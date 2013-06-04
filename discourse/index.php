<?php
/*
Template Name: Discourse
*/
?>
<!Doctype html>
<html>
	<head>
	<?php include 'head.php'; ?>
	</head>
	<body>
		<?php get_header(); ?>
		<section id="content">
			<?php if ( have_posts() ) : ?>
			<div id="posts">
				<?php while ( have_posts() ) : the_post(); ?>
				<article>
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
					<?php if ( has_post_thumbnail() ) {	the_post_thumbnail();} ?> 
					<section class="middle">
						<?php the_content() ?>
						<a style="float:right" href="<?php the_permalink() ?>#comments"><?php  comments_number('0 comments', '1 Comment', '% comments'); ?></a>
					</section>
				</article>
				<?php endwhile; ?>
				<a href="http://blog.discourse.org/feed/" class="social rss"></a>
				<a href="http://twitter.com/discourse" class="social twitter"></a>
			</div>
			<?php else: ?>
				<h1 class="searchtext"><?php echo "Sorry, no posts matched your criteria." ?></h1>
			<?php endif; ?>
		</section>			
		<?php get_footer(); ?>

	</body>
</html>