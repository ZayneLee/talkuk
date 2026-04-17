<?php
/**
 * generatepress-cafe24 child theme functions
 * Gumi British English Tutoring — landing page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ═════════ 1. Styles & fonts ═════════ */
add_action( 'wp_enqueue_scripts', 'generatepress_cafe24_enqueue_styles' );
function generatepress_cafe24_enqueue_styles() {
	$parent_handle = 'generate-style';
	$theme         = wp_get_theme();

	wp_enqueue_style(
		$parent_handle,
		get_template_directory_uri() . '/style.css',
		array(),
		$theme->parent() ? $theme->parent()->get( 'Version' ) : false
	);

	wp_enqueue_style(
		'generatepress-cafe24-style',
		get_stylesheet_uri(),
		array( $parent_handle ),
		$theme->get( 'Version' )
	);

	wp_enqueue_style(
		'gbe-google-fonts',
		'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Noto+Serif+KR:wght@400;600;700&display=swap',
		array(),
		null
	);
}

/* ═════════ 2. Theme support ═════════ */
add_action( 'after_setup_theme', 'generatepress_cafe24_setup' );
function generatepress_cafe24_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}

/* ═════════ 3. Analytics & Search Console ═════════
 * wp-config.php 에 아래 상수를 추가하면 자동 삽입됩니다:
 *   define( 'GBE_GA4_ID',      'G-XXXXXXXXXX' );
 *   define( 'GBE_NAVER_CODE',  'YOUR_NAVER_META_CONTENT' );
 *   define( 'GBE_GOOGLE_CODE', 'YOUR_GOOGLE_SEARCH_CONSOLE_META' );
 */
add_action( 'wp_head', 'gbe_head_scripts', 1 );
function gbe_head_scripts() {
	if ( defined( 'GBE_NAVER_CODE' ) && GBE_NAVER_CODE ) {
		printf( '<meta name="naver-site-verification" content="%s">' . "\n", esc_attr( GBE_NAVER_CODE ) );
	}
	if ( defined( 'GBE_GOOGLE_CODE' ) && GBE_GOOGLE_CODE ) {
		printf( '<meta name="google-site-verification" content="%s">' . "\n", esc_attr( GBE_GOOGLE_CODE ) );
	}
	if ( defined( 'GBE_GA4_ID' ) && GBE_GA4_ID ) {
		$id = esc_attr( GBE_GA4_ID );
		echo "<script async src='https://www.googletagmanager.com/gtag/js?id={$id}'></script>\n";
		echo "<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','{$id}');</script>\n";
	}
}

/* ═════════ 4. Contact form handler (wp_mail) ═════════
 * 수신 이메일 변경: wp-config.php 에
 *   define( 'GBE_CONTACT_TO', 'teacher@example.com' );
 * 또는 add_filter( 'gbe_contact_to', ... );
 */
add_action( 'admin_post_nopriv_gbe_contact', 'gbe_handle_contact' );
add_action( 'admin_post_gbe_contact',        'gbe_handle_contact' );
function gbe_handle_contact() {
	$back = wp_get_referer() ? wp_get_referer() : home_url( '/' );
	$go   = function( $code ) use ( $back ) {
		wp_safe_redirect( add_query_arg( 'gbe_msg', $code, $back ) . '#quick-form' );
		exit;
	};

	if ( empty( $_POST['gbe_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['gbe_nonce'] ) ), 'gbe_contact_nonce' ) ) {
		$go( 'err' );
	}

	// Honeypot — bots fill this hidden field
	if ( ! empty( $_POST['website'] ) ) {
		$go( 'ok' );
	}

	$name  = sanitize_text_field( wp_unslash( $_POST['parent_name'] ?? '' ) );
	$phone = sanitize_text_field( wp_unslash( $_POST['phone']       ?? '' ) );
	$grade = sanitize_text_field( wp_unslash( $_POST['grade']       ?? '' ) );
	$class_type = sanitize_text_field( wp_unslash( $_POST['class_type'] ?? '' ) );
	$msg   = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

	if ( empty( $name ) || empty( $phone ) ) {
		$go( 'missing' );
	}

	$default_to = defined( 'GBE_CONTACT_TO' ) && GBE_CONTACT_TO ? GBE_CONTACT_TO : get_option( 'admin_email' );
	$to         = apply_filters( 'gbe_contact_to', $default_to );

	$subject = sprintf( '[구미 영어 과외 문의] %s / %s', $name, $grade ?: '학년 미기재' );
	$body  = "══ 새 상담 문의 ══\n\n";
	$body .= "학부모 성함: {$name}\n";
	$body .= "연락처: {$phone}\n";
	$body .= "학생 학년: {$grade}\n";
	$body .= "희망 수업 형태: {$class_type}\n\n";
	$body .= "── 문의 내용 ──\n";
	$body .= $msg ? $msg : '(내용 없음)';

	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'From: ' . get_bloginfo( 'name' ) . ' <' . get_option( 'admin_email' ) . '>',
	);

	$sent = wp_mail( $to, $subject, $body, $headers );
	$go( $sent ? 'ok' : 'err' );
}

/* ═════════ 5. Success / error toast ═════════ */
function gbe_render_toast() {
	if ( empty( $_GET['gbe_msg'] ) ) {
		return;
	}
	$code = sanitize_key( $_GET['gbe_msg'] );
	$map  = array(
		'ok'      => array( 'ok',  '✓ 문의가 정상적으로 접수되었습니다. 24시간 이내에 연락드리겠습니다.' ),
		'missing' => array( 'warn','성함과 연락처는 필수 입력 항목입니다.' ),
		'err'     => array( 'err', '전송 중 오류가 발생했습니다. 카카오톡으로 문의해 주세요.' ),
	);
	if ( ! isset( $map[ $code ] ) ) {
		return;
	}
	printf(
		'<div class="gbe-toast gbe-toast--%s" role="status">%s</div>',
		esc_attr( $map[ $code ][0] ),
		esc_html( $map[ $code ][1] )
	);
}
