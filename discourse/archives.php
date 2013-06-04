<?php
/*
Template Name: Archive
*/
?>
<!Doctype html>
<html>
	<head>
	<?php include 'head.php'; ?>
	</head>
	<body>
		<?php get_header(); ?>
		<?php $query = new WP_Query('posts_per_page=1000000');?>
		<section id="content">
			<div id="posts">
				<?php while ($query->have_posts()) : $query->the_post();?>
				<article class="archive">
					<section class="date">
						<h1 class="month"><?php the_time('M');?></h1>
						<h1 class="day"><?php the_time('j');?></h1>
						<h2 class="ago"><?php echo readable_time_diff( get_the_time('U'), current_time('timestamp') ); ?></h2>
					</section>
					<section class="description">
						<section class="top">
							<a href="<?php the_permalink() ?>"><h1><?php the_title() ?></h1></a>
							<span>
								<i class="icon-user"></i>
								<a href="#"> <?php the_author() ?> </a>
							</span>
							<span>
								<i class="icon-calendar"></i>
								<?php the_date() ?>
							</span>
							<i class="icon-tags"></i>
							<?php the_category() ?>
						</section>
						<section class="middle">
							<?php echo str_replace("[...]", "...", get_the_excerpt()); ?>
							<br/>
							<a href="<?php the_permalink() ?>">Read more...</a>
						</section>
					</section>
					<?php comments_template(); ?>
				</article>
				<?php endwhile; ?>
				<a href="http://blog.discourse.org/feed/" class="social rss"></a>
				<a href="http://twitter.com/discourse" class="social twitter"></a>
			</div>
		</section>			
		<?php get_footer(); ?>
	</body>
</html>