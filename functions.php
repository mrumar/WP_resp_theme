<?php

if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
	register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));	
}

function get_sidebar_right() {
	do_action( 'get_sidebar' );
	if ( file_exists( TEMPLATEPATH . '/sidebar_right.php') )
		load_template( TEMPLATEPATH . '/sidebar_right.php');
	else
		load_template( ABSPATH . 'wp-content/themes/default/sidebar.php');
}

function wp_list_pages2($limit=NULL) {


	
	$defaults = array('depth' => 0, 'show_date' => '', 'date_format' => get_option('date_format'),
		'child_of' => 0, 'exclude' => '', 'title_li' =>'', 'echo' => 1, 'authors' => '', 'sort_column' => 'menu_order, post_title');
	$r = array_merge((array)$defaults, (array)$r);

	$output = '';
	$current_page = 0;

	// sanitize, mostly to keep spaces out
	$r['exclude'] = preg_replace('[^0-9,]', '', $r['exclude']);

	// Allow plugins to filter an array of excluded pages
	$r['exclude'] = implode(',', apply_filters('wp_list_pages_excludes', explode(',', $r['exclude'])));

	// Query pages.
	$pages = get_pages($r);

	if ( !empty($pages) ) {

		for($i=0;$i<count($pages);$i++)
		{
			$output .='|<a href="'.get_page_link($pages[$i]->ID).'">'.strtoupper($pages[$i]->post_title).'</a>';
			if($limit!=NULL)
			{
				break;
			}
		}
	}

	$output = apply_filters('wp_list_pages', $output);

	echo $output;
}

?>