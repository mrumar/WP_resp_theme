<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">Ten wpis jest chroniony hasłem. Podaj hasło aby zobaczyć komentarze..</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h2 id="comment_title">Komentarze:</h2>
	<!--<h3 id="comments"><?php comments_number('Brak komentarzy', '(01)', '(%)' );?> posted on <?php the_title(); ?></h3>    //-->

	<ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>

		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
        	<div class="commentmetadata"><span><?php comment_author_link() ?></span> </div>
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Twój komentarz czeka na akceptację przez moderatora.</em>
			<?php endif; ?>
			<div class="commentmetadata_text"><?php comment_text() ?></div>
        	<div class="commentmetadata_end">Napisano <span><?php pl_comment_date() ?> o godzinie <?php comment_time() ?></span></div>

		</li>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Nie można komentować tego wpisu.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="respond_box">
<h3 id="respond">Dodaj komentarz</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Jesteś zalogowany jako <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Wyloguj &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" class="comm_input_text" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author">Imię <?php if ($req) echo "(wymagane)"; ?></label></p>

<p><input type="text" name="email" class="comm_input_text" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email">Email (nie będzie wyświetlany) <?php if ($req) echo "(wymagane)"; ?></label></p>

<p><input type="text" name="url" class="comm_input_text" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url">Strona www</label></p>

<?php endif; ?>

<!--<p><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p><textarea name="comment" class="comm_textarea_text" id="comment" cols="40" rows="6" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
</div>