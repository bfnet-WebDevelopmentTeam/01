<?php
/*
Template Name: archive-news

*/

get_header(); ?>


<?php
/*
Template Name: News-index
Template Post Type: post,page,news
*/
?>

<?php get_header(); ?>

<body class="drawer drawer--right drawer-close">
	
	<div style="overflow: hidden;">
	
	<div class="contents-tittle">
	<div style="background: url(/wp-content/themes/bf-entertainment/assets/images/main-bg.png);position: relative;">
		<div class="title">
			<h1>News</h1>
			<span style="font-size: 3vw; color:#F40519">重要なお知らせ</span>
		</div>
	</div>
	</div>

	<div class="contents-body">
		<div class="news_sec01">
			<div class="news-area">
			<dl>
				<dt><a href="<?php the_permalink() ?>">
					<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail(); ?>
					<?php the_content(); ?>
					<?php else: ?>

					<?php endif; ?>
					</a>
				</dt>
				<dd><h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
					<span><i class="fa-solid fa-calendar-days"></i><?php the_time('Y.m.d'); ?></span>
					<div class="txt">
						<p><?php the_excerpt(); ?></p>
					</div>
					
				</dd>
			</dl>


		
		</div>
				

		
		

	</div>

		


	</div>

		
</div>
<?php get_footer(); ?>


<?php
get_footer(); ?>
