<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div class="page_archives_div">

<div class="ar_panel">
	<h2>Po miesiącu:</h2>
	<ul class="dark">
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
</div>

<div class="ar_panel ar_panel2">
	<h2>Po kategorii:</h2>
	<ul>
		 <?php wp_list_categories('title_li='); ?>
	</ul>
</div>

</div>

<?php get_footer(); ?>