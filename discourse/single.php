<?php
/*
Template Name: Discourse
*/
?>
<!Doctype html>
<html>
	<head>
		<title><?php while ( have_posts() ) : the_post(); ?><?php the_title() ?><?php endwhile; ?></title>
		<?php include 'head.php'; ?>
	</head>
	<body onload="deepLink()">
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
					</section>
					<nav>	
						<?php 
							previous_post_link('<span class="left-button">%link</span>', '« %title');
						?>
						<?php 
							next_post_link('<span class="right-button">%link</span>', '%title »');
						?>
					</nav>
					<?php comments_template(); ?>
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