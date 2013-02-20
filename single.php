<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
                <div class="post-top">
                    <div class="post-title">
                    	<h4><b><?php pl_date() ?></b></h4>
                    	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><?php the_title(); ?></a></h2>
                        <?php if ( function_exists('the_tags')) the_tags('<h3 class="tags"><span>Tagi: </span>', ', ', ' </h3>'); ?>
                       
                    </div>
                </div>

				<div class="entry clear">
					<?php the_content('Zobacz cały wpis &raquo;'); ?>
				</div>

               <div class="postmetadata">
                	  <div class="alignleft">
                    	<?php comments_popup_link('brak komentarzy', 'komentarzy: <span>(1)</span>', 'komentarzy: <span>(%)</span>'); ?>
                    </div>
                    <div class="alignright">
                        <!--
                        <a class="readmore" href="<?//php the_permalink() ?>" >Czytaj dalej</a>
                        //--><?php edit_post_link('Edytuj', '  ', ''); ?>
                        
                    </div>
                </div>
                <div class="other-posts-links">
                    <span class="prev"><?php previous_post_link('%link', '&laquo; poprzedni wpis', TRUE); ?></span> 
                    <span class="next"><?php next_post_link('%link', 'następny wpis &raquo;', TRUE); ?></span> 
                </div>
			</div>

	<div id="comments_template">
	<?php comments_template(); ?>
    </div>

	<?php endwhile; else: ?>

		<p>Nie znaleziono wpisów o podanych kryteriach.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
