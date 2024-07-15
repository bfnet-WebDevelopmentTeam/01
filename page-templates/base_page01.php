<?php
/*
Template Name: base_page01

*/
get_header(); ?>

<?php
/*
Template Name: News-index
Template Post Type: post,page,course,membership
*/
?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>

<?php
get_footer(); ?>



