<?php
/*
Template Name: 750px_base_page03

*/

get_header(); ?>

<?php
/*
Template Name: News-index
Template Post Type: post,page,course,memberships
*/
?>
	<div id="primary" class="fp-content-area">
		<main id="main" class="site-main" role="main">
			<div class="entry-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div><!-- .entry-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer(); ?>
