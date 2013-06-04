	<title> Discourse Blog </title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font/sansation/style.css">
	<link rel="shortcut icon" href="http://blog.discourse.org/wp-uploads/2013/02/favicon.ico"/>
	<link rel="alternate" type="application/atom+xml" href="/feed/atom/" title="Atom Feed"/>
	<link rel="alternate" type="application/rss+xml" href="/feed" title="RSS Feed"/>
	<link rel="icon" href="http://blog.discourse.org/wp-uploads/2013/02/favicon.png" />
    	<link rel="apple-touch-icon" href="http://blog.discourse.org/wp-uploads/2013/02/favicon.png" />
	<script>
		// Makes up for 48px banner
		function deepLink()
		{
			var comment = document.getElementById(window.location.hash.replace("#",""));
			if (comment != undefined)
			{
				window.scrollTo(0,window.scrollY - 48);
				if (comment.id != "comments")
				{
					comment.style.backgroundColor = "#FFB";
					setTimeout(function()
					{
						comment.style.backgroundColor = "#FFD";
					}, 1000);
				}
			}
		}
	</script>