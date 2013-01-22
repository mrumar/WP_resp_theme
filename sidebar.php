	<div id="sidebar">
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->
            
			<li class="widget_categories">
                <h2>Category</h2>
                <ul>
                    <?php wp_list_cats('sort_column=name&optioncount=1'); ?>
                </ul>
            </li>
            
			<?php wp_list_bookmarks(); ?>

			<?php endif; ?>
		</ul>
	</div>

