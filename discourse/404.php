<?php
/*
Template Name: Discourse
*/
?>
<!Doctype html>
<html>
	<?php include 'head.php'; ?>
	<body>
		<?php get_header(); ?>
		<div id="content">
			<div id="info">
				<h1>Sorry, we couldn't find that!</h1>
				<h2> Here are some tips for finding the problem:</h2>
				<ul>
					<li><h2>Check spelling and capitalization in the address</h2></li>
					<li>
						<h2>Search for it:</h2>
						<form action="<?php echo home_url( '/' ); ?>">
							<input type="text" placeholder="search the blog..." value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s"/>
							<input type="submit" style="display: none;"/>
						</form>
					</li>
					<li><h2>Go back to our <a href="/index.php">home page</a></h2></li>
				</ul>
			</div>
		</div>
		<?php get_footer(); ?>
	</body>
</html>