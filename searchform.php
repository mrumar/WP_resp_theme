<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <div>
        <span>Szukaj :</span>
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
        <input type="image" id="searchsubmit" src="/wp-content/themes/BlueGrey/images/searchbtn.gif" />
    </div>
</form>

