<?php get_header(); ?>

		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

            <article class="post" id="post-<?php the_ID(); ?>">
                <header class="post-title">
                    <time><b class="day"><?php the_time('d') ?></b><b class="month"><?php the_time('M') ?></b><span class="year"><?php the_time('Y') ?></span></time>
                    <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><?php the_title(); ?></a></h1>
                    <?php if ( function_exists('the_tags')) the_tags('<p class="tags"><span>Tagi : </span>', ', ', ' </p>'); ?>
                </header>

                <div class="entry clear">
                    <?php the_content('Zobacz cały wpis &raquo;'); ?>
                </div>

                <footer class="post-metadata clear">
                    <p class="result-info">Kategoria: <?php the_category(', ') ?></p>
                    <div class="icon-comment">
                        <?php comments_popup_link('Brak komentarzy', 'Komentarzy: <span>(1)</span>', 'Komentarzy: <span>(%)</span>'); ?>
                    </div>
                    <div class="links icon-arrow-right">
                        <a class="readmore" href="<?php the_permalink() ?>" >Czytaj dalej</a><?php edit_post_link('Edytuj', '  ', ''); ?>
                    </div>
                </footer>
            </article>

		<?php endwhile; ?>

        <nav class="other-posts-links clear">
            <span class="prev"><?php next_posts_link('&laquo; Starsze wpisy') ?></span>
            <span class="next"><?php previous_posts_link('Nowsze wpisy &raquo;') ?></span>
        </nav>

	<?php else : ?>

		<h2 class="center">Brak wpisów</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

<?php get_footer(); ?>
