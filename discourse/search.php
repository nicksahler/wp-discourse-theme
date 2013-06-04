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
		
		<div id="content">
			<?php if ( have_posts() ) : ?>
			<div id="info"><h1> Posts matching "<?php echo wp_specialchars($s, 1); ?>"</h1></div>
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
			<?php else: ?>
				<div id="info"><h1>Sorry, no posts matched your criteria.</h1></div>
			<?php endif; ?>
		</div>			
		<?php get_footer(); ?>
	</body>
</html>