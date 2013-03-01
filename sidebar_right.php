
<div class="sidebar-right">
    <ul>
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ){
    ?>
    <?
    } else { ?>
    <article class="side-widget">
        <?php wp_list_pages('title_li=<h1>Strony</h1>' ); ?>
    </article>
<?php } ?>
    </ul>
</div>
