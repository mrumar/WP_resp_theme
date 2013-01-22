<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
<?php $attachment_link = get_the_attachment_link($post->ID, true, array(450, 800)); // This also populates the iconsize for the next line ?>
<?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 128 ? 'small' : '') . 'attachment'; // This lets us style narrow icons specially ?>

			<div class="post" id="post-<?php the_ID(); ?>">
                <div class="post-top">
                    <div class="post-title">
                    	<h4><b><?php pl_date() ?></b></h4>
                    	<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><?php the_title(); ?></a></h2>
                        <?php if ( function_exists('the_tags')) the_tags('<h3 class="tags"><span>Tagi : </span>', ', ', ' </h3>'); ?>
                       
                    </div>
                </div>

				<div class="entry clear">
					<?php the_content('Przeczytaj dalsz± czê¶æ &raquo;'); ?>
                    <p class="<?php echo $classname; ?>"><?php echo $attachment_link; ?><br /><?php echo basename($post->guid); ?></p>
				</div>

                <div class="postmetadata">
                	<div class="alignleft">
                    	Filed Under <b>(<?php the_category(', ') ?>)</b> by <b><?php the_author() ?></b>
                    </div>
                    <div class="alignright"><?php comments_popup_link('brak komentarzy', '<span>(1)</span> komentarz', 'komentarzy: <span>(%)</span>'); ?>  <a class="readmore" href="<?php the_permalink() ?>" >Read more</a><?php edit_post_link('Edytuj', '  ', ''); ?></div>
                </div>
			</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no attachments matched your criteria.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
