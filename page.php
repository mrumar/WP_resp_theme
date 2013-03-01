<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="post" id="post-<?php the_ID(); ?>">
        <header class="post-title">
            <h1><?php the_title(); ?></h1>
        </header>
        <div class="entry">
            <?php the_content('<p class="serif">Przeczytaj dalszą część strony &raquo;</p>'); ?>

            <?php wp_link_pages(array('before' => '<p><strong>Strony:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

            <footer class="post-metadata clear">

                <div class="links">
                    <?php edit_post_link('Edytuj tą stronę.', '', ''); ?>
                </div>
            </footer>
        </div>
    </article>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>