<?php get_header(); ?>

	<div id="content" class="pagenarrow">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-page" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Przeczytaj dalszą część strony &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Strony:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				<?php edit_post_link('Edytuj tą stronę.', '<br /><p>', '</p>'); ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>