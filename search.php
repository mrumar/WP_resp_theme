<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) :  ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
                <div class="post-top">
                    <div class="post-title">
                    	<h4><b><?php pl_date() ?></b></h4>
                    	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><?php the_title(); ?></a></h2>
                        <?php if ( function_exists('the_tags')) the_tags('<h3 class="tags"><span>Tagi: : </span>', ', ', ' </h3>'); ?>
                       
                    </div>
                </div>

				<div class="entry clear">
					<?php the_content('Zobacz cały wpis &raquo;'); ?>
				</div>

                <div class="postmetadata">
                	<div class="alignleft">
                    	Kategoria: <b>(<?php the_category(', ') ?>)</b> Autor: <b><?php the_author() ?></b>
                    </div>
                    <div class="alignright"><?php comments_popup_link('Brak komentarzy', '<span>(1)</span> Comment', 'Komentarzy: <span>(%)</span>'); ?>  <a class="readmore" href="<?php the_permalink() ?>" >Czytaj dalej</a><?php edit_post_link('Edytuj', '  ', ''); ?></div>
                </div>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Starsze wpisy') ?></div>
			<div class="alignright"><?php previous_posts_link('Nowsze wpisy &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Podana fraza nie została odnaleziona.</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>