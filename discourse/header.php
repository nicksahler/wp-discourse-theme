<nav id="bar">
	<div>
		<a class="nav-link" href="http://www.discourse.org/">
			<img style="border: none;" width="64" height="45" src="http://blog.discourse.org/wp-uploads/2013/02/nav-icon.png" alt="logo" />
		</a>
		<a class="nav-link red" href="http://www.discourse.org/about/">About</a>
		<a class="nav-link orange" href="http://www.discourse.org/faq/">FAQ</a>
		<a class="nav-link yellow selected" href="http://blog.discourse.org">Blog</a>
		<a class="nav-link green" href="http://try.discourse.org">Try It</a>
		<a class="nav-link blue" href="http://www.discourse.org/buy/">Buy It</a>
		<a class="nav-link grey" href="http://meta.discourse.org">Meta</a>
		<a class="fork-us" href="http://github.com/discourse/discourse"><i class="icon-github-alt"></i>&nbsp;Fork Us</a>
	</div>
</nav>
<header>
	<section>
		<a style="border:none;" href="<?php echo home_url( '/' ); ?>">
			<img style="border:none;" src="http://blog.discourse.org/wp-uploads/2013/02/logo3.png" alt="Discourse"/>
		</a>	
		<form action="<?php echo home_url( '/' ); ?>">
			<input type="text" placeholder="search the blog..." value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s"/>
			<input type="submit" style="display: none;"/>
		</form>
	</section>
</header>