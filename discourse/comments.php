<?php
if ( post_password_required() )
	return;
?>

<section class="comments">
	<?php if($comments) : ?>  
		<ol>  
			<h2><?php  comments_number('0 Comments', '1 Comment', '% Comments');?></h2>
			<?php foreach($comments as $comment) : ?>
				<li class="comment" class="comment-<?php comment_ID(); ?>" <?php if ($comment->comment_author_email == get_the_author_email()) echo "style=\"background-color: #eaf9ff\"";?>>  
  				<?php
				$grav = "http://www.gravatar.com/avatar/" . md5(strtolower(get_comment_author_email())) . "?s=64";
				echo "<img src=\"$grav\"/>"; 
				?>
					<strong><?php comment_author_link(); ?></strong><br/>
					<a href="#comment-<?php comment_ID(); ?>"><?php comment_date(); ?>&nbsp;<?php comment_time(); ?></a>
					<br/>
					<?php if ($comment->comment_author_email == get_the_author_email()) echo "<em>author</em>";?>
					<?php if ($comment->comment_approved == '0') : ?>  
						<em>Pending approval</em>  
					<?php endif; ?>
					<div class="comment-content">
					  <?php comment_text(); ?>
                                        </div>
				</li>  
			<?php endforeach; ?>  
		</ol>  
	<?php endif; ?>  


	<?php if(comments_open()) : ?>  
		<?php if(get_option('comment_registration') && !$user_ID) : ?>
			<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>  
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="respond">
				<h3> Add A Comment </h3>
				<?php if($user_ID) : ?>
					<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>  
				<?php else : ?>  
					<input placeholder="Name <?php if($req) echo "(required)"; ?>" type="text" name="author" class="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
					<input style="margin-right: 17px; margin-left: 17px" placeholder="Mail <?php if($req) echo "(required)"; ?>" type="text" name="email" class="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />  
					<input placeholder="Website (optional)" type="text" name="url" class="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />  
				<?php endif; ?>
				<textarea name="comment" class="comment" cols="50" rows="10" tabindex="4"></textarea>  
				<button name="submit" type="submit" class="submit" tabindex="5">Post Comment</button> 
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /> 
				<?php do_action('comment_form', $post->ID); ?>  
			</form>
		<?php endif; ?>
	<?php else : ?>  
		<h1>The comments are closed.</h1>  
	<?php endif; ?>  
</section>