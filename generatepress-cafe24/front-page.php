<?php
/**
 * Front Page Template — Gumi British English Tutoring
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// 🔧 이 부분만 실제 값으로 교체하세요 ─────────────────────
$gbe_kakao_url = 'https://open.kakao.com/YOUR-LINK';
$gbe_phone     = '010-0000-0000';
$gbe_phone_tel = 'tel:' . preg_replace( '/[^0-9]/', '', $gbe_phone );
// ────────────────────────────────────────────────────────

get_header();
?>

<?php gbe_render_toast(); ?>

<main id="gbe-landing" class="gbe-landing">

	<!-- ═══════════ HERO ═══════════ -->
	<section class="gbe-hero">
		<div class="gbe-hero__inner">
			<p class="gbe-kicker">AUTHENTIC BRITISH ENGLISH · SINCE LONDON</p>
			<h1 class="gbe-hero__title">진짜 영국 영어를,<br>구미에서 만나다.</h1>
			<p class="gbe-hero__sub">
				100% 영국 원어민 선생님과 함께하는 프리미엄 1:1 과외<br>
				봉곡동 전용 스터디룸에서 만나는, 진짜 영국 교실.
			</p>
			<div class="gbe-cta-row">
				<a class="gbe-btn gbe-btn--primary" href="#quick-form">무료 레벨 테스트 신청 →</a>
				<a class="gbe-btn gbe-btn--ghost" href="<?php echo esc_url( $gbe_kakao_url ); ?>" target="_blank" rel="noopener">카카오톡 상담</a>
			</div>
			<ul class="gbe-trust">
				<li>⭐ 영국 학사 출신</li>
				<li>👩‍🏫 5년+ 티칭 경력</li>
				<li>🏠 구미 봉곡동 스튜디오 운영</li>
			</ul>
		</div>
	</section>

	<!-- ═══════════ USP ═══════════ -->
	<section class="gbe-section gbe-usp">
		<div class="gbe-container">
			<header class="gbe-section__head">
				<p class="gbe-kicker gbe-kicker--dark">WHY BRITISH?</p>
				<h2>왜, 영국 원어민 선생님이어야 할까요?</h2>
				<p class="gbe-lead">
					똑같이 '영어'라 부르지만, 영국 영어는 정확한 발음, 풍부한 어휘,<br>
					그리고 품격 있는 표현에서 차이가 납니다. <strong>아이의 첫 발음 습관, 평생을 좌우합니다.</strong>
				</p>
			</header>

			<div class="gbe-grid gbe-grid--3">
				<article class="gbe-card">
					<div class="gbe-card__icon">
						<svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
							<path d="M20 4 L20 8 L44 8 L44 4 Z" fill="#0A2342"/>
							<rect x="14" y="8" width="36" height="7" rx="1.5" fill="#C8102E"/>
							<rect x="16" y="15" width="32" height="40" fill="#C8102E"/>
							<rect x="20" y="19" width="24" height="24" fill="none" stroke="#0A2342" stroke-width="2"/>
							<line x1="32" y1="19" x2="32" y2="43" stroke="#0A2342" stroke-width="2"/>
							<line x1="20" y1="31" x2="44" y2="31" stroke="#0A2342" stroke-width="2"/>
							<rect x="18" y="46" width="28" height="4" fill="#0A2342"/>
							<text x="32" y="56" text-anchor="middle" fill="#FAF8F2" font-size="6" font-weight="700" font-family="serif">TELEPHONE</text>
							<rect x="14" y="58" width="36" height="4" rx="1" fill="#0A2342"/>
						</svg>
					</div>
					<h3>Pronunciation<br><span>정확한 RP 발음</span></h3>
					<p>BBC 아나운서들이 사용하는 표준 영국 발음. 흐리멍덩한 발음 대신, 한 단어 한 단어 또렷하고 품격 있게 익힙니다.</p>
				</article>
				<article class="gbe-card">
					<div class="gbe-card__icon">
						<svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
							<path d="M22 10 Q20 14 22 18 Q24 22 22 26" fill="none" stroke="#C8102E" stroke-width="2" stroke-linecap="round"/>
							<path d="M32 8 Q30 12 32 16 Q34 20 32 24" fill="none" stroke="#C8102E" stroke-width="2" stroke-linecap="round"/>
							<path d="M42 10 Q40 14 42 18 Q44 22 42 26" fill="none" stroke="#C8102E" stroke-width="2" stroke-linecap="round"/>
							<path d="M12 32 L12 44 Q12 52 22 52 L38 52 Q48 52 48 44 L48 32 Z" fill="#0A2342"/>
							<path d="M48 36 Q56 36 56 42 Q56 48 48 48" fill="none" stroke="#0A2342" stroke-width="3" stroke-linecap="round"/>
							<rect x="14" y="32" width="32" height="3" fill="#C8102E"/>
							<ellipse cx="30" cy="55" rx="24" ry="3" fill="#C8102E"/>
						</svg>
					</div>
					<h3>Culture<br><span>교과서 밖 진짜 문화</span></h3>
					<p>해리포터, 패딩턴, 로알드 달 동화까지. 영국 원어민만이 전할 수 있는 살아있는 문화적 맥락으로 영어가 '이야기'가 됩니다.</p>
				</article>
				<article class="gbe-card">
					<div class="gbe-card__icon">
						<svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
							<rect x="42" y="8" width="7" height="12" fill="#0A2342"/>
							<rect x="41" y="6" width="9" height="3" fill="#C8102E"/>
							<path d="M10 30 L32 12 L54 30 Z" fill="#C8102E"/>
							<rect x="14" y="30" width="36" height="26" fill="#FAF8F2" stroke="#0A2342" stroke-width="1.5"/>
							<rect x="28" y="40" width="8" height="16" fill="#0A2342"/>
							<circle cx="34" cy="48" r="0.8" fill="#C5A572"/>
							<rect x="18" y="35" width="7" height="7" fill="#FFFFFF" stroke="#0A2342" stroke-width="1"/>
							<line x1="21.5" y1="35" x2="21.5" y2="42" stroke="#0A2342" stroke-width="0.8"/>
							<line x1="18" y1="38.5" x2="25" y2="38.5" stroke="#0A2342" stroke-width="0.8"/>
							<rect x="39" y="35" width="7" height="7" fill="#FFFFFF" stroke="#0A2342" stroke-width="1"/>
							<line x1="42.5" y1="35" x2="42.5" y2="42" stroke="#0A2342" stroke-width="0.8"/>
							<line x1="39" y1="38.5" x2="46" y2="38.5" stroke="#0A2342" stroke-width="0.8"/>
							<path d="M24 20 L28 16 L32 20 L36 16 L40 20" fill="none" stroke="#C5A572" stroke-width="1.2"/>
						</svg>
					</div>
					<h3>Immersion<br><span>영국식 몰입 스터디룸</span></h3>
					<p>선생님 자택의 영국풍 전용 학습 공간에서 수업. 현관문을 들어서는 순간부터 'English Only', 주 2회 짧은 시간에 최대의 몰입 효과를 만듭니다.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ═══════════ CURRICULUM ═══════════ -->
	<section class="gbe-section gbe-curriculum" id="curriculum">
		<div class="gbe-container">
			<header class="gbe-section__head">
				<p class="gbe-kicker gbe-kicker--dark">CURRICULUM</p>
				<h2>우리 아이의 단계에 꼭 맞는 커리큘럼</h2>
			</header>

			<div class="gbe-grid gbe-grid--2">
				<article class="gbe-curri gbe-curri--elem">
					<span class="gbe-curri__tag">초등부 · 1–6학년</span>
					<h3>흥미로, 영어와 평생 친구가 되는 시간</h3>
					<ul>
						<li><strong>Phonics Mastery</strong> — 영국식 파닉스 규칙으로 처음부터 제대로</li>
						<li><strong>Storytime Speaking</strong> — 영국 그림책·동요로 자연스러운 기초 회화</li>
						<li><strong>Fun Vocabulary Games</strong> — 놀이처럼 익히는 어휘 확장</li>
						<li><strong>발표 자신감 UP</strong> — 매 수업 마지막 5분, '미니 발표'</li>
					</ul>
					<blockquote>"영어 책 읽어달라고 조르는 아이, 직접 만들어 드리겠습니다."</blockquote>
				</article>

				<article class="gbe-curri gbe-curri--mid">
					<span class="gbe-curri__tag">중등부 · 1–3학년</span>
					<h3>내신 1등급과 진짜 실력, 둘 다 잡는 시간</h3>
					<ul>
						<li><strong>내신 완벽 대비</strong> — 구미 지역 중학교 교과서·기출 밀착 분석</li>
						<li><strong>수행평가 A+ 전략</strong> — 에세이·스피킹 1:1 첨삭</li>
						<li><strong>Academic Writing</strong> — 서론-본론-결론 논리적 영작</li>
						<li><strong>Real British Discussion</strong> — 시사·문화 주제 토론</li>
					</ul>
					<blockquote>"수행평가 만점, 영국 원어민 첨삭이 만드는 차이입니다."</blockquote>
				</article>
			</div>
		</div>
	</section>

	<!-- ═══════════ TEACHER BIO ═══════════ -->
	<section class="gbe-section gbe-teacher" id="teacher">
		<div class="gbe-container">
			<div class="gbe-teacher__grid">
				<div class="gbe-teacher__photo">
					<?php
					$portrait = get_stylesheet_directory() . '/images/teacher-portrait.jpg';
					if ( file_exists( $portrait ) ) :
						printf( '<img src="%s" alt="Teacher portrait" loading="lazy">', esc_url( get_stylesheet_directory_uri() . '/images/teacher-portrait.jpg' ) );
					else : ?>
						<div class="gbe-photo-placeholder">Teacher Portrait<br>(3:4)</div>
					<?php endif; ?>
				</div>
				<div class="gbe-teacher__text">
					<div class="gbe-bio-icon">
						<svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
							<path d="M32 6 L56 16 L32 26 L8 16 Z" fill="#0A2342"/>
							<path d="M20 20 L20 26 Q20 30 32 30 Q44 30 44 26 L44 20 L32 25 Z" fill="#0A2342"/>
							<line x1="56" y1="16" x2="56" y2="28" stroke="#C8102E" stroke-width="2.5" stroke-linecap="round"/>
							<circle cx="56" cy="30" r="2.5" fill="#C8102E"/>
							<rect x="10" y="38" width="44" height="18" rx="2" fill="#C8102E"/>
							<circle cx="10" cy="47" r="4" fill="#0A2342"/>
							<circle cx="54" cy="47" r="4" fill="#0A2342"/>
							<circle cx="32" cy="47" r="3.5" fill="#C5A572"/>
							<path d="M29 48 L31 51 L35 45" fill="none" stroke="#0A2342" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
					<p class="gbe-kicker gbe-kicker--dark">MEET YOUR TEACHER</p>
					<h2>Hello from Ciera 🇬🇧</h2>
					<ul class="gbe-bio">
						<li>🎓 University of Leeds, B.A. in English Education</li>
						<li>📜 CELTA · TEFL 국제 공인 자격증</li>
						<li>🇬🇧 영국 출생, 사우스엔드온시 성장</li>
						<li>🏫 5년+ 초·중등 영어 교육 경력</li>
						<li>🏡 구미시 봉곡동 전용 스터디룸 운영</li>
					</ul>
					<blockquote class="gbe-letter">
						안녕하세요, 학부모님. 키라입니다.<br><br>
						영국에서 나고 자란 제가 한국, 그중에서도 구미라는 따뜻한 도시에 자리를 잡은 이유는 단 하나입니다. <strong>아이들의 반짝이는 눈빛</strong> 때문이었어요.<br><br>
						영어는 시험 과목이 아니라, 세상을 두 배 넓게 보는 창(窓)입니다. 제가 자라며 사랑했던 영국의 이야기, 발음, 그리고 예의 바른 대화의 품격을 구미의 아이들에게 정성껏 전해드리겠습니다.<br><br>
						<em>— Warmly, Ciera 💌</em>
					</blockquote>
				</div>
			</div>
		</div>
	</section>

	<!-- ═══════════ PRICING ═══════════ -->
	<section class="gbe-section gbe-pricing" id="pricing">
		<div class="gbe-container">
			<header class="gbe-section__head">
				<p class="gbe-kicker gbe-kicker--dark">TUITION</p>
				<h2>수강료 안내</h2>
				<p class="gbe-lead">첫 수업 <strong>30분 무료 레벨 테스트 &amp; 학부모 상담</strong> 제공</p>
			</header>

			<div class="gbe-grid gbe-grid--3">
				<article class="gbe-price">
					<h3>1:1 개인 과외</h3>
					<p class="gbe-price__amt">월 60~90<span>만원</span></p>
					<ul>
						<li>초등부 60분 · 주 2회</li>
						<li>중등부 80분 · 주 2회</li>
						<li>완전 맞춤 커리큘럼</li>
					</ul>
				</article>
				<article class="gbe-price gbe-price--featured">
					<span class="gbe-price__badge">BEST</span>
					<h3>2인 소그룹</h3>
					<p class="gbe-price__amt">월 45~55<span>만원 / 인</span></p>
					<ul>
						<li>또래와 함께 시너지 ↑</li>
						<li>스피킹 페어 워크 다수</li>
						<li>형제·친구 매칭 가능</li>
					</ul>
				</article>
				<article class="gbe-price">
					<h3>3–4인 그룹</h3>
					<p class="gbe-price__amt">월 35~42<span>만원 / 인</span></p>
					<ul>
						<li>합리적 비용</li>
						<li>활발한 토론·발표 수업</li>
						<li>동일 레벨 매칭</li>
					</ul>
				</article>
			</div>
			<p class="gbe-fineprint">※ 교재비 별도 · 전 수업은 봉곡동 전용 스터디룸에서 진행됩니다</p>
		</div>
	</section>

	<!-- ═══════════ QUICK CONTACT FORM ═══════════ -->
	<section class="gbe-section gbe-form-section" id="quick-form">
		<div class="gbe-container gbe-container--narrow">
			<header class="gbe-section__head">
				<p class="gbe-kicker gbe-kicker--dark">QUICK INQUIRY</p>
				<h2>간단 문의 폼</h2>
				<p class="gbe-lead">아래 정보만 남겨주시면, <strong>24시간 이내</strong>에 직접 연락드립니다.</p>
			</header>

			<form class="gbe-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
				<input type="hidden" name="action" value="gbe_contact">
				<?php wp_nonce_field( 'gbe_contact_nonce', 'gbe_nonce' ); ?>

				<!-- honeypot -->
				<div class="gbe-form__hp" aria-hidden="true">
					<label>Website (leave empty)<input type="text" name="website" tabindex="-1" autocomplete="off"></label>
				</div>

				<div class="gbe-form__row">
					<label>학부모 성함 <span class="req">*</span>
						<input type="text" name="parent_name" required>
					</label>
					<label>연락처 <span class="req">*</span>
						<input type="tel" name="phone" required placeholder="010-0000-0000">
					</label>
				</div>

				<div class="gbe-form__row">
					<label>학생 학년
						<select name="grade">
							<option value="">선택해 주세요</option>
							<option>초등 1학년</option>
							<option>초등 2학년</option>
							<option>초등 3학년</option>
							<option>초등 4학년</option>
							<option>초등 5학년</option>
							<option>초등 6학년</option>
							<option>중등 1학년</option>
							<option>중등 2학년</option>
							<option>중등 3학년</option>
							<option>기타</option>
						</select>
					</label>
					<label>거주 지역
						<select name="area">
							<option value="">선택해 주세요</option>
							<option>봉곡동</option>
							<option>형곡동</option>
							<option>송정동</option>
							<option>원평동</option>
							<option>사곡동</option>
							<option>상모·사곡</option>
							<option>인동·진미</option>
							<option>옥계·산동</option>
							<option>기타 구미 지역</option>
						</select>
					</label>
				</div>

				<label>문의 내용
					<textarea name="message" rows="4" placeholder="수업 요일/시간 선호도, 학생 수준, 궁금한 점 등 자유롭게 적어 주세요."></textarea>
				</label>

				<button type="submit" class="gbe-btn gbe-btn--primary gbe-btn--block">문의 보내기</button>
				<p class="gbe-form__priv">※ 제공해주신 정보는 상담 목적 외에는 사용되지 않습니다.</p>
			</form>
		</div>
	</section>

	<!-- ═══════════ CONTACT CTA ═══════════ -->
	<section class="gbe-section gbe-contact" id="contact">
		<div class="gbe-container">
			<div class="gbe-contact__grid">
				<div class="gbe-contact__photo">
					<?php
					$contact_img = get_stylesheet_directory() . '/images/contact.jpg';
					if ( file_exists( $contact_img ) ) :
						printf( '<img src="%s" alt="상담하기" loading="lazy">', esc_url( get_stylesheet_directory_uri() . '/images/contact.jpg' ) );
					else : ?>
						<div class="gbe-photo-placeholder gbe-photo-placeholder--dark">Teacher waving<br>상담하기</div>
					<?php endif; ?>
				</div>
				<div class="gbe-contact__text">
					<h2>궁금한 점은<br>편하게 물어봐 주십시오.</h2>
					<p>수업 방식·요일·시간표까지 학부모님과 충분히 상의 후 결정합니다.</p>
					<div class="gbe-cta-row gbe-cta-row--stack">
						<a class="gbe-btn gbe-btn--kakao" href="<?php echo esc_url( $gbe_kakao_url ); ?>" target="_blank" rel="noopener">💬 카카오톡 오픈채팅 바로가기</a>
						<a class="gbe-btn gbe-btn--outline-light" href="<?php echo esc_attr( $gbe_phone_tel ); ?>">📱 문자 상담 (<?php echo esc_html( $gbe_phone ); ?>)</a>
					</div>
					<p class="gbe-fineprint gbe-fineprint--light">모든 상담은 비공개로 진행되며, 연락처는 수업 목적 외 사용되지 않습니다.</p>
				</div>
			</div>
		</div>
	</section>

</main>

<!-- ═══════════ FLOATING KAKAO BUTTON ═══════════ -->
<a href="<?php echo esc_url( $gbe_kakao_url ); ?>" target="_blank" rel="noopener" class="gbe-float-kakao" aria-label="카카오톡 상담하기">
	<span class="gbe-float-kakao__icon">💬</span>
	<span class="gbe-float-kakao__text">상담하기</span>
</a>

<?php
get_footer();
