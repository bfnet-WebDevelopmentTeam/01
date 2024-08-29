<?php /*

  This file is part of a child theme called 01.
  Functions in this file will be loaded before the parent theme's functions.
  For more information, please read
  https://developer.wordpress.org/themes/advanced-topics/child-themes/

*/

// this code loads the parent's stylesheet (leave it in place unless you know what you're doing)

function your_theme_enqueue_styles()
{

	$parent_style = 'parent-style';

	wp_enqueue_style(
		$parent_style,
		get_template_directory_uri() . '/style.css'
	);
	wp_enqueue_style(
		'reset_style',
		get_stylesheet_directory_uri() . '/css/reset.css',
		array($parent_style)
	);
	wp_enqueue_style(
		'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array($parent_style, 'reset_style'),
		wp_get_theme()->get('Version')
	);
	wp_enqueue_style(
		'sp_style',
		get_stylesheet_directory_uri() . '/css/style_sp.css',
		array($parent_style, 'reset_style', 'child-style'),
	);
	wp_enqueue_style(
		'default_style',
		get_stylesheet_directory_uri() . '/css/style.css',
		array($parent_style, 'reset_style', 'child-style'),
	);
	wp_enqueue_style(
		'lms_style',
		get_stylesheet_directory_uri() . '/css/onecoine_lms.css',
		array($parent_style, 'reset_style', 'child-style'),
	);
	if (is_front_page()) {
		wp_enqueue_style(
			'front-style',
			get_stylesheet_directory_uri() . '/css/front_page.css',
			array($parent_style, 'reset_style', 'child-style')
		);
	}
}

add_action('wp_enqueue_scripts', 'your_theme_enqueue_styles');

/*  Add your own functions below this line.
    ======================================== */

// JSファイルも読み込み
function my_scripts()
{
	if (!is_front_page()) {

		wp_enqueue_script(
			'course',
			get_stylesheet_directory_uri() . '/js/lms_course.js',
			array(),
			false,
			true
		);
	} elseif (is_front_page()) {
		wp_enqueue_script(
			'top',
			get_stylesheet_directory_uri() . '/js/top.js',
			array(),
			false,
			true
		);
	} elseif (is_page('lp_animation-2')) {
		wp_enqueue_script(
			'top',
			get_stylesheet_directory_uri() . '/js/lp.js',
			array(),
			false,
			true
		);
	}
}

add_action('wp_enqueue_scripts', 'my_scripts');

/** mypage menu list */
function my_remove_dashboard_tabs($tabs)
{
	// unset( $tabs['view-courses'] );
	// unset( $tabs['view-achievements'] );
	// unset( $tabs['notifications'] );
	// unset( $tabs['edit-account'] );
	unset($tabs['redeem-voucher']);
	// unset( $tabs['orders'] );
	unset($tabs['signout']);
	return $tabs;
}
add_filter('llms_get_student_dashboard_tabs', 'my_remove_dashboard_tabs');

add_filter('gettext', 'translate_reply');
add_filter('ngettext', 'translate_reply');

function translate_reply($translated)
{
	$translated = str_ireplace('membership', 'メンバーシップ', $translated);
	$translated = str_ireplace('Password', 'パスワード', $translated);
	$translated = str_ireplace('VIEW ALL MY COURSES', 'もっとみる', $translated);
	$translated = str_ireplace('This course does not have any sections.', '', $translated);
	$translated = str_ireplace('ENROLL NOW', '今すぐ登録', $translated);
	$translated = str_ireplace('UPDATE PAYMENT METHOD', '支払い方法の更新', $translated);
	$translated = str_ireplace('CANCEL SUBSCRIPTION', 'サブスクリプションをキャンセルする', $translated);
	$translated = str_ireplace('Transaction', '取引', $translated);
	$translated = str_ireplace('Payment Method', '支払方法', $translated);
	$translated = str_ireplace('buy now', '今すぐ購入', $translated);
	$translated = str_ireplace('既存ユーザのログイン', 'ログイン', $translated);
	$translated = str_ireplace('Reset', 'リセット', $translated);
	$translated = str_ireplace('Email Address', 'メールアドレス', $translated);
	$translated = str_ireplace('Remember me', 'ログイン状態を保存する ', $translated);
	$translated = str_ireplace('Lost your パスワード?', 'パスワードを忘れた場合<br>', $translated);
	$translated = str_ireplace('login', 'ログイン', $translated);
	$translated = str_ireplace('My Courses', '学習メニュー', $translated);
	$translated = str_ireplace('Your', '', $translated);

	$translated = str_ireplace('MARK COMPLETE', '完了マークを付ける', $translated);
	$translated = str_ireplace('Lesson Complete', 'レッスン完了', $translated);
	$translated = str_ireplace('Change', '変更', $translated);
	$translated = str_ireplace('Back to', '戻る', $translated);


	$translated = str_ireplace('Enter', '', $translated);

	return $translated;
}

//* ユーザーリスト項目の追加/項目の並べ替え *//
add_filter('manage_users_columns', 'my_manage_users_columns', 10, 1);
function my_manage_users_columns($columns)
{
	$columns['user_registered'] = '登録日';
	return $columns;
}

add_filter('manage_users_custom_column', 'my_manage_users_custom_column', 10, 3);
function my_manage_users_custom_column($output, $column_name, $user_id)
{
	if ($column_name == 'user_registered') {
		$user = new WP_User($user_id);
		return $user->user_registered;
	}
	return $output;
}

add_filter('manage_users_sortable_columns', 'my_manage_users_sortable_columns', 10, 1);
function my_manage_users_sortable_columns($columns)
{
	$columns['user_registered'] = 'user_registered';
	return $columns;
}

//siteurl
add_shortcode('surl', 'shortcode_surl');
function shortcode_surl()
{
	return site_url();
}

function my_llms_loop_cols($cols)
{
	return 20; // change this to be the number of columns you want
}
add_filter('lifterlms_loop_columns', 'my_llms_loop_cols');

add_filter('totaltheme/header/logo/link_url', function ($url) {
	$url = 'https://onecoin-study.net/dashboard/';
	return $url;
});

/* WooCommerceの注文状況を処理中から完了に自動変更するためのコード */
// add_filter('woocommerce_order_item_needs_processing', '__return_false');

// stripe支払いフォームの入力エリアのカスタマイズ
function my_llms_stripe_elements_settings($settings)
{
	// ロケールを変更(日本語)
	// see https://stripe.com/docs/stripe.js#stripe-elements for all available options
	$settings['elements']['locale'] = 'ja';

	// 郵便番号表示設定
	$settings['card']['hidePostalCode'] = true;

	// CSSでのスタイル変更
	// see https://stripe.com/docs/stripe.js#element-options for all available options
	// $settings['card']['style']['base']['fontSize'] = '14px';

	return $settings;
}
add_filter('llms_stripe_elements_settings', 'my_llms_stripe_elements_settings');


//LifterLMSのオーバーライドカスタマイズ用
function my_llms_theme_override_dirs($dirs)
{

	array_unshift($dirs, plugin_dir_path(__FILE__) . '/lifterlms');

	return $dirs;
}
add_filter('lifterlms_theme_override_directories', 'my_llms_theme_override_dirs', 10, 1);


// カスタム投稿タイプの追加
add_action('init', 'create_post_type');
function create_post_type()
{
	register_post_type(
		'news',
		array(
			'label' => 'お知らせ',
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'show_in_rest' => true,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'custom-fields',
				'revisions',
				'excerpt',
				'custom-fields'
			),
		)
	);
	register_post_type(
		'quiz',
		array(
			'label' => 'クイズ',
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'show_in_rest' => true,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'custom-fields',
				'revisions',
				'excerpt',
				'custom-fields'
			),
		)
	);
	register_post_type(
		'lecture_update',
		array(
			'label' => '講義内容変更',
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'show_in_rest' => true,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'custom-fields',
				'revisions',
				'excerpt',
				'custom-fields'
			),
		)
	);
}

// 特定のページにクイズ一覧の表示
function quiz_contents_active()
{
	if (is_user_logged_in() && (is_page('dashboard'))) { ?>
		<div class="quiz-container">
			<h3>今日の一問一答</h3>
			<?php
			$query = new WP_Query(
				array(
					'post_type' => 'quiz',
					'posts_per_page' => 1,
				)
			);
			if ($query->have_posts()) : ?>
				<ul class="quiz-list">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<li class="quiz-item">
							<a href="<?php the_permalink(); ?>" class="quiz-item-btn">
								<button type="button">START!</button>
							</a>
							<div class="quiz-item-img">
								<img src="https://onecoin-study.net/wp-content/uploads/2024/01/一問一答01.png">
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php
			endif;
			wp_reset_postdata(); ?>

			<!-- 一覧ページの表示 -->
			<!-- <p class="quiz-link"><a href="https:/onecoin-study.net/quiz">クイズ一覧＞</a></p> -->
		</div>
	<?php
	}
}
add_action('sydney_get_sidebar', 'quiz_contents_active');

/**
 * news_contents
 * 
 * カスタム投稿タイプ「お知らせ」一覧のループ表示
 * 
 * @param string $tag htmlタグ
 * @return void
 */
function news_contents($tag = "h3")
{ ?>
	<div class="news-container">
		<<?php echo $tag; ?>>お知らせ</<?php echo $tag; ?>>
		<?php
		$query = new WP_Query(
			array(
				'post_type' => 'news',
				'posts_per_page' => 3,
			)
		);
		if ($query->have_posts()) : ?>
			<ul class="news-list">
				<?php while ($query->have_posts()) : $query->the_post(); ?>
					<li class="news-item"><a href="<?php the_permalink(); ?>">
							<p><?php the_time(get_option('date_format')); ?></p>
							<p><?php the_title(); ?></p>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php
		endif;
		wp_reset_postdata(); ?>
		<p class="news-link"><a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ一覧＞</a></p>
	</div>
<?php }

/**
 * lecture_update_contents
 * 
 * カスタム投稿タイプ「講義内容変更」一覧のループ表示
 * 
 * @param string $tag htmlタグ
 * @return void
 */
function lecture_update_contents($tag = "h3")
{ ?>
	<div class="lecture_update-container">
		<<?php echo $tag; ?>>講義内容変更</<?php echo $tag; ?>>
		<?php
		$query = new WP_Query(
			array(
				'post_type' => 'lecture_update',
				'posts_per_page' => 3,
			)
		);
		if ($query->have_posts()) : ?>
			<ul class="lecture_update-list">
				<?php while ($query->have_posts()) : $query->the_post(); ?>
					<li class="lecture_update-item"><a href="<?php the_permalink(); ?>">
							<p><?php the_time(get_option('date_format')); ?></p>
							<p><?php the_title(); ?></p>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php
		endif;
		wp_reset_postdata(); ?>
		<p class="lecture_update-link"><a href="<?php echo esc_url(home_url('/lecture_update/')); ?>">講義内容変更一覧＞</a></p>
	</div>
	<?php }


// 特定のページのみカスタム投稿タイプ(お知らせ)一覧の表示
function custom_contents_active()
{
	if (is_user_logged_in() && (is_page('dashboard'))) {

		// ページごとに一度だけ処理を行うための変数
		static $is_processed = false;

		// 一度だけ処理を行う 
		if (!$is_processed) {
			lecture_update_contents();
			news_contents(); ?>
		<?php
			// 一度処理を行ったので変数をtrueに設定
			$is_processed = true;
		}
	}
}

// ダッシュボードページに講義内容変更、お知らせ一覧を表示する際に使用
add_action('sydney_get_sidebar', 'custom_contents_active');


// 特定のページにRSSフィードのトピック一覧の表示
function feed_contents_active()
{
	if (is_user_logged_in() && (is_page('dashboard'))) {

		include_once(ABSPATH . WPINC . '/feed.php');
		$rss = fetch_feed('https://bf-estate.co.jp/archives/category/blog/feed');
		if (!is_wp_error($rss)) {
			$maxitems = $rss->get_item_quantity(3);
			$rss_items = $rss->get_items(0, $maxitems);
		}
		?>
		<div class="feed-topics-container">
			<h3>不動産トピックス</h3>
			<p class="rss-c"><cite>出典：<a href="https://bf-estate.co.jp/" target="_blank">ビーエフエステート株式会社</a></cite></p>
			<?php if (!empty($maxitems)) : ?>
				<ul class="feed-topics-list">
					<?php if ($maxitems == 0) {
						echo '<li>RSSデータがありませんでした。</li>';
					} else {
						foreach ($rss_items as $item) :
							// カテゴリーが指定のものであれば表示
					?>
							<li class="date-item"><span><?php echo $item->get_date('Y.m.d'); ?></span></li>
							<li class="title-item">
								<a href="<?php echo $item->get_permalink(); ?>" target="_blank">
									<?php echo $item->get_title(); ?>
								</a>
							</li>
							<li class="desc-item">
								<span class="desc">
									<?php echo mb_substr(strip_tags($item->get_description()), 0, 50) . '...'; ?>
								</span>
								<span><a href='<?php echo $item->get_permalink(); ?>' target="_blank">続きを読む</a></span>
							</li>
					<?php
						endforeach;
					}
					?>
				</ul>
			<?php
			endif;

			?>
		</div>
	<?php }
}

add_action('sydney_get_sidebar', 'feed_contents_active');


// アーカイブタイトル名の文字列削除
add_filter('get_the_archive_title', function ($title) {
	if (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	}
	return $title;
});

// アーカイブページのカスタマイズ
function archive_customize()
{
	if (is_post_type_archive('news') || is_post_type_archive('lecture_update')) {
	?>
		<p class="archive-date"><?php the_time(get_option('date_format')); ?></p>
	<?php } ?>
	<?php }

add_action('sydney_loop_post', 'archive_customize');

// アーカイブページの日付表示
function custom_news_date()
{
	if (is_singular('news') || is_singular('lecture_update')) { ?>
		<p class="custom_date"><?php the_time(get_option('date_format')); ?></p>
	<?php }
}
add_action('sydney_inside_top_post', 'custom_news_date');

// 個別投稿ページ、個別カスタム投稿タイプページからアーカイブページに戻る処理
function back_page_link()
{
	if (is_singular('news') || is_singular('lecture_update')) { ?>
		<p class="back_link">
			<a href="<?php echo esc_url(get_post_type_archive_link(get_post_type())); ?>"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?>一覧ページへ</a>
		</p>

	<?php }
}
add_action('sydney_after_content', 'back_page_link');

// stripe支払い説明文(新規、既存の切り替え)
add_filter("llms_stripe_request_body", "llms_stripe_request_body_change_stripe_description", 100, 3);

function llms_stripe_request_body_change_stripe_description($data, $resource, $method)
{
	$description = isset($data['description']) ? $data['description'] : '';
	$metadata    = isset($data['metadata']) ? $data['metadata'] : '';
	$type        = isset($metadata['Payment Type']) ? $metadata['Payment Type'] : '';

	if ('recurring' == $type) {
		$description = str_replace('Order', '既存', $description);
	}

	if ('initial' == $type) {
		$description = str_replace('Order', '新規', $description);
	}

	if (isset($data['description'])) {
		$data['description'] = $description;
	}

	return $data;
}

// 特定ページのクイズ領域
function quiz_content()
{
	if (is_user_logged_in() && (is_singular('quiz'))) {
		$question = get_field('question');
		$choices = [get_field('correct'), get_field('incorrect')];
		$answer = get_field('correct');
		$form_hidden = !empty($_POST['my_answer']);
		$incorrect = get_field('incorrect');
		$dscMsgs =  [get_field('description')];

	?>
		<h1>今日のクイズ</h1>
		<div id="single-quiz-container">
			<h2 id="question"><span>問題: </span><?php echo $question; ?></h2>
			<form action="" method="post" id="quiz-form" <?php echo $form_hidden ? 'style="display: none;"' : ''; ?>>
				<button type="submit" class="choices-item" name="my_answer" value="○: はい">
					○: はい</button>
				<button type="submit" class="choices-item" name="my_answer" value="x: いいえ">
					x: いいえ</button>
			</form>
			<?php if (!empty($_POST['my_answer'])) :
				$myAnswer = $_POST['my_answer'];
			?>
				<div class="quiz-result-container">
					<p>あなたが回答した選択: <span><?php echo htmlspecialchars($myAnswer, ENT_QUOTES); ?></span></p>
					<div id="answer-result">
						<?php if ($myAnswer === $answer) : ?>
							<button class="result-btn correct-btn">正解！</button>
							<div class="result-container">
								<div class="result-img correct-img"><img src="https://onecoin-study.net/wp-content/uploads/2024/01/一問一答02_正解.png" alt=""></div>
								<p><?php echo $dscMsgs[0]; ?></p>
							</div>
						<?php elseif ($myAnswer === $incorrect) : ?>
							<button class="result-btn incorrect-btn">不正解!</button>
							<div class="result-container">
								<div class="result-img incorrect-img"><img src="https://onecoin-study.net/wp-content/uploads/2024/01/一問一答02_不正解.png" alt=""></div>
								<p><?php echo $dscMsgs[0]; ?></p>
							</div>
						<?php endif; ?>
						<!-- ダッシュボード画面に戻る -->
						<a href="<?php echo esc_url(home_url('/dashboard/'));  ?>" class="back-link">終了してマイページに戻る</a>
					</div>
				</div>

			<?php endif; ?>
		</div>

	<?php }
}
add_action('sydney_before_single_entry', 'quiz_content');

/**
 * Google Tag Manager
 */
function header_tag()
{ ?>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5MNQL7H');
	</script>

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MNQL7H" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager  -->

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-G7KEEM8ZB5"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'G-G7KEEM8ZB5');
	</script>

	<!-- もしもアフィリエイト -->
	<script src="https://r.moshimo.com/af/r/maftag.js"></script>
	<?php if (is_single(2815)) { ?>
		<script src="https://r.moshimo.com/af/r/result.js?p_id=5958&pc_id=16605&m_v=abc" id="msmaf"></script>
		<noscript><img src="https://r.moshimo.com/af/r/result?p_id=5958&pc_id=16605&m_v=abc" width="1" height="1" alt=""></noscript>
	<?php }
}
add_action('wp_head', 'header_tag');

/**
 * 個別フッター設置
 */
function footer_nav_content()
{ ?>
	<footer>
		<div id="footer_navi">
			<div class="navi_inner01">
				<div class="footer_logo"><img src="https://onecoin-study.net/wp-content/uploads/2023/07/onecoin_logo_02.png" alt="onecoin宅建講座"></div>
				<div class="footer_menu">
					<ul>
						<li><a href="#toptarget" target="_parent"> 上へ</a></li>
						<li><?php echo do_shortcode("[wpmem_loginout]"); ?></li>
						<li><a href="privacy-policy/" target="_parent"> プライバシーポリシー</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer_box">
			<p align="center" class="foot_img">Copyright (C) 2023 onecoin-study宅建講座 All Rights Reserved.</p>
		</div>
	</footer>
<?php }
add_action('wp_footer', 'footer_nav_content');

// ダッシュボードページのアカウント情報
function my_page_box()
{ ?>
	<div class="content-wrapper container">
		<div class="row">
			<div class="my_page_box">
				<ul class="llms-sd-items">
					<li class="llms-sd-items dashboard current"><a class="llms-sd-link" href="<?php echo esc_url(home_url('/dashboard/')); ?>">マイページ</a></li>
					<li class="llms-sd-items dashboard current"><a class="llms-sd-link" href="<?php echo esc_url(home_url('/downroad/')); ?>">学習資料のダウンロード</a></li>
					<li class="llms-sd-items edit-account"><a class="llms-sd-link" href="<?php echo esc_url(home_url('/dashboard/edit-account/')); ?>">アカウント編集</a></li>
					<li class="llms-sd-items orders"><a class="llms-sd-link" href="<?php echo esc_url(home_url('/dashboard/orders/')); ?>">注文履歴</a></li>
				</ul>
			</div>
		</div>
	</div>
<?php }

/**
 * show_on_login_my_page_box
 * 
 * ログイン時のみダッシュボードページのアカウント情報を表示
 * 
 * @return void
 */
function show_on_login_my_page_box()
{
	if (is_user_logged_in() && (is_page('dashboard'))) {
		my_page_box();
	}
}
add_action('sydney_after_hero', 'show_on_login_my_page_box');

// auto paragraph生成の解除
add_action('init', function () {
	remove_filter('the_excerpt', 'wpautop');
	remove_filter('the_content', 'wpautop');
});
add_filter('tiny_mce_before_init', function ($init) {
	$init['wpautop'] = false;
	$init['apply_source_formatting'] = true;
	return $init;
});

//ショートコード周りの自動整形を解除
function shortcode_p_fix($content)
{
	$array = array(
		'<p>[' => '[',
		']</p>' => ']',
		']<br />' => ']'
	);
	$content = strtr($content, $array);
	return $content;
}
add_filter('the_content', 'shortcode_p_fix');


// クイズスタートボタンのテキスト変更
function changeText()
{
	$button_text = 'クイズを始める！';
	return $button_text;
}

add_filter('lifterlms_start_quiz_button_text', 'changeText');

// ダッシュボード画面で、ユーザーからのキャンセル操作を不可にする処理
add_filter('llms_allow_subscription_cancellation', '__return_false');


// Don't copy this line!
/**
 * llms-catalog-descriptions.php
 *
 * @since 2017-05-30
 */

// this will add custom content BEFORE the dynamic catalog content
add_action('lifterlms_archive_description', 'my_llms_catalog_description');

function my_llms_catalog_description()
{
	// for course catalog
	if (is_post_type_archive('course')) {
		// replace the content here with your custom html / content
		echo '<p>コース変更はこちらから</p>';
	}
	// for membership catalog
	if (is_post_type_archive('llms_membership')) {
		// replace the content here with your custom html / content
		return false;
	}
}

// コース一覧ページの各アイキャッチ画像
function course_catalog_thumbnail()
{ ?>
	<div class="thumbnail">
		<?php the_post_thumbnail(); ?>
	</div>
<?php }

add_action('lifterlms_before_loop_item', 'course_catalog_thumbnail');

// メンテナンスモード切り替え
// function maintenance_mode()
// {
// 	if (!current_user_can('edit_themes') || !is_user_logged_in()) {
// 		wp_die('ただいま緊急メンテナンス中です。本日17時以降に再開いたしますので、ご迷惑をお掛けしますが今しばらくお待ちください。');
// 	}
// }
// add_action('get_header', 'maintenance_mode');
