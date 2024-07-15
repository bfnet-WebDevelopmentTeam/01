<?php
/*
Template Name: login_page04

*/

get_header(); ?>


	<div id="primary" class="fp-content-area">
		<main id="main" class="site-main" role="main">


				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>

<article>
	<div id="members_box">
		<div class="member_box_inner02"><?php echo do_shortcode("[wpmem_form login]"); ?></div>
<!-- end ID members_box -->
</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer(); ?>
