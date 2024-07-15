<?php
/*
Template Name: LP(フローティングバナー、スクロール追従ボタン)テンプレート
Template Post Type: post,page
*/
?>



<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="../wp-content/themes/01/css/new_lp.css" type="text/css">
	<script src="<?php echo get_stylesheet_directory_uri() ?>/js/lp.js" defer></script>

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
	<!-- End Google Tag Manager -->

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MNQL7H" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
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

	<script>
		if (window.location == 'https://onecoin-study.net/') {
			window.location.href = 'https://onecoin-study.net/dashboard/';
		}
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php sydney_do_schema('html'); ?>>

	<span id="toptarget"></span>

	<?php wp_body_open(); ?>

	<?php do_action('sydney_before_site'); //Hooked: sydney_preloader() 
	?>

	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'sydney'); ?></a>

		<?php do_action('sydney_before_header'); //Hooked: sydney_header_clone() 
		?>

		<?php do_action('sydney_header'); ?>

		<?php do_action('sydney_after_header'); ?>

		<div class="sydney-hero-area">
			<?php sydney_slider_template(); ?>
			<div class="header-image">
				<?php sydney_header_overlay(); ?>
				<?php if ((get_theme_mod('front_header_type', 'nothing') == 'image' && is_front_page()) || (get_theme_mod('site_header_type') == 'image' && !is_front_page())) : ?>
					<?php $shop_thumb = get_the_post_thumbnail_url(get_option('woocommerce_shop_page_id')); ?>
					<?php if (class_exists('Woocommerce') && is_shop() && !$shop_thumb) : ?>
						<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
					<?php endif; ?>
				<?php endif; ?>
			</div>
			<?php sydney_header_video(); ?>

			<?php do_action('sydney_inside_hero'); ?>
		</div>

		<?php do_action('sydney_after_hero'); ?>

		<!-- フローティングバナー追加 -->
		<div id="js_fBanner" class="f-banner">
			<div id="js_fBanner_close" class="f-banner-close">
				<img src="<?php echo esc_url(home_url()); ?>/wp-content/uploads/2024/01/cv_img_03.png" alt="">
			</div>
			<a href="<?php echo esc_url(home_url()); ?>/purchase/?plan=3623">
				<div class="f-banner-img">
					<img src="<?php echo esc_url(home_url()); ?>/wp-content/uploads/2024/02/lp_02_01.png">
				</div>
			</a>
		</div>

		<div id="overlay">

		</div>

		<div id=" content" class="page-wrap">
			<div class="content-wrapper <?php echo esc_attr(apply_filters('sydney_main_container', 'container')); ?>">
				<div class="row">

					<!-- アニメLPページへCTAボタンの追加 -->
					<div id="fix-cta-btn" class="fix-cta-container">
						<a href="<?php echo esc_url(home_url()); ?>/purchase/?plan=3623">
							<img src="<?php echo esc_url(home_url()); ?>/wp-content/uploads/2024/02/lp_03.png" alt="">
						</a>
					</div>

					<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div><!-- #content -->

		<?php do_action('sydney_before_footer'); ?>

		<?php if (is_active_sidebar('footer-1')) : ?>
			<?php get_sidebar('footer'); ?>
		<?php endif; ?>

		<?php $container 	= get_theme_mod('footer_credits_container', 'container'); ?>
		<?php $credits 		= sydney_footer_credits(); ?>

		<footer id="colophon" class="site-footer">
			<div class="<?php echo esc_attr($container); ?>">
				<div class="site-info">
					<div class="row">
						<div class="col-md-6">
							<?php echo wp_kses_post($credits); ?>
						</div>
						<div class="col-md-6">
							<?php sydney_social_profile('social_profiles_footer'); ?>
						</div>
					</div>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

		<?php do_action('sydney_after_footer'); ?>

	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>

</html>