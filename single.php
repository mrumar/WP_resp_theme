<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                <div class="icon-comment">
                    <?php comments_popup_link('Brak komentarzy', 'Komentarzy: <span>(1)</span>', 'Komentarzy: <span>(%)</span>'); ?>
                </div>
                <div class="links">
                    <?php edit_post_link('Edytuj', '  ', ''); ?>
                </div>
            </footer>
            <nav class="other-posts-links clear">
                <span class="prev"><?php previous_post_link('%link', '&laquo; poprzedni wpis', TRUE); ?></span>
                <span class="next"><?php next_post_link('%link', 'następny wpis &raquo;', TRUE); ?></span>
            </nav>
            <aside class="comments" id="comments">
                <?php comments_template(); ?>
            </aside>
        </article>
	<?php endwhile; else: ?>
		<p>Nie znaleziono wpisów o podanych kryteriach.</p>
<?php endif; ?>

<?php get_footer(); ?>
