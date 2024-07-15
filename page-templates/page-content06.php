<?php
/*
Template Name: news_page06

*/

get_header(); ?>


<?php
/*
Template Name: News-index
Template Post Type: post,page
*/
?>

<?php get_header(); ?>

<body class="drawer drawer--right drawer-close">
	
	<div style="overflow: hidden;">
	<div class="contents-tittle">
<div class="lifterlms">
	<div class="llms-student-dashboard dashboard" data-current="dashboard">
		<header class="llms-sd-header">
			<nav class="llms-sd-nav">
				<ul class="llms-sd-itemss">
					<li class="llms-sd-itemss dashboard  current">
						<a class="llms-sd-link" href="https://onecoin-study.net/dashboard/study/">ホーム</a></li>
					<li class="llms-sd-itemss edit-account ">
						<a class="llms-sd-link" href="https://onecoin-study.net/dashboard/edit-account/">アカウント編集</a></li>
					<li class="llms-sd-itemss orders">
				<a class="llms-sd-link" href="https://onecoin-study.net/my-account/orders/">注文履歴</a></li>
				</ul>
			</nav>
		</header>
	</div>
</div>
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
						<p>
						
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
						</p>
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
