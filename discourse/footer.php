<footer>
	<?php 
	if(!is_404()) 
	{
	?>
		<?php 
		if(is_single())
		{
		?>
			<nav id="pagination">	
				<span class="left">
					<?php 
						previous_post_link();
					?>
				</span>
				
				<span class="right">
					<?php 
						next_post_link();
					?>
				</span>
		<?php
		}
		else{
		?>
			<nav id="pagination" class="home">	
				<span class="left">
					<?php 
					if(get_previous_posts_link())
					{
						echo previous_posts_link();
					}
					else
					{
					?>
					<a style="color: #DDD">
						&laquo; Previous 
					</a>
					<?php
					}?>
				</span>

				<?php show_pagination_links() ?>

				<span class="right">
					<?php 
					if(get_next_posts_link())
					{
						echo next_posts_link();
					}
					else
					{
					?>
					<a style="color: #DDD">
						Next &raquo;
					</a>
					<?php
					}?>
				</span>
			<?php
				}
			}
			?>
		<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>

	</nav>
	<section id="foot">
		<div class="links">
			<a href="http://www.discourse.org/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon-tiny.png" width="24" height="24"></a> <a href="http://www.discourse.org/about/">About</a> | <a href="http://www.discourse.org/faq/">FAQ</a> | <a href="http://blog.discourse.org">Blog</a> | <a href="http://try.discourse.org">Try It</a> | <a href="http://www.discourse.org/buy/">Buy It</a> | <a href="http://meta.discourse.org">Meta</a> | <a href="http://twitter.com/discourse">@discourse</a>
		</div>
		<p>Content is <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/">by-nc-sa</a>, Discourse logo and “Discourse Forum” ®, Civilized Discourse Construction Kit, Inc.</p>
		<p><a href="http://www.youtube.com/watch?v=Xe1TZaElTAs">Built with love, Internet style</a></p>
	</section>
</footer>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-33736483-1']);
		_gaq.push(['_setDomainName', 'discourse.org']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>