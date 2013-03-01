<div class="sidebar">
    <ul>
        <?php 	/* Widgetized sidebar, if you have the plugin installed. */
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
        <li class="side-widget">
            <h1>Kategorie</h1>
            <ul>
                <?php wp_list_cats('sort_column=name&optioncount=1'); ?>
            </ul>
        </li>
        <?php wp_list_bookmarks(); ?>
        <?php endif; ?>
    </ul>
</div>

