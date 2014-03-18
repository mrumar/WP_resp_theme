    </div> <!-- end of main-content -->

	<div class="side-content">
        <figure class="display-photo">
            <img src="<?php bloginfo('template_url'); ?>/images/voce1b.jpg" />
        </figure>

            <?php if (is_user_logged_in()) {
                $user_info = get_userdata(1);
                echo('<div class="logged-user">');
                echo('</a><span>witaj '.$user_info->user_login.'!</span>');
                echo('</div>');
            }?>


        <div class="side-widget search-box">
            <a href="<?php bloginfo('rss2_url'); ?>" title="Subskrybuj kanał RSS chóru Voce Angeli" class="icon-feed">subskrybuj kanał rss</a>
            <form method="get" id="searchform_top" action="<?php bloginfo('url'); ?>/">
                <input type="text" value="<?php the_search_query(); ?>" name="s" id="searchform_top_text" placeholder="szukaj na stronie" class="search-input" />
                <button type="submit" id="gosearch" class="icon-search search-btn" >szukaj</button>
            </form>
        </div>
        <a class="big-banner-btn" href="/2014/03/17/milosc-ponad-wszystko-nuty-i-muzyka-do-pobrania/" title="Wszystko na temat utworu ekspiacyjnego Miłość ponad wszystko">
            <img src="http://voceangeli.pl/files/Milosc_ponad_wszystko/milosc-baner-m.png" alt="Banner Miłość ponad wsyzstko - modlitwa przebłagalna i wynagradzająca" />
            <p>informacje&nbsp;&bull;&nbsp;nagrania&nbsp;&bull;&nbsp;nuty</p>
        </a>
        <article class="side-widget upcomming-concerts" id="upcomming-concerts">
          <h1>Najbliższe koncerty</h1>
          <ul>
              <?php
                              global $wpdb;
                              $options = get_option('NadchodzaceKoncertyPluginOptions');
                              $sql = 'SELECT * FROM  voce_nadchodzace_koncerty where data_koncertu>=date(now()) ORDER BY data_koncertu,godzina DESC LIMIT '.$options['concerts_number'].';';
                              $concerts = $wpdb->get_results($sql);
                                        //print_r($concerts);

                                      if (!empty($concerts))
                                      {
                                          foreach ($concerts as $concert)
                                          {
                                            ?>
                                            <li class="vevent">
                                              <em title="<?=$concert->data_koncertu.'T'.$concert->godzina;?>" class="dtstart"><?=pl_time2string2($concert->data_koncertu,$concert->godzina);?></em>
                                              <strong class="summary"><?=$concert->nazwa;?></strong>
                                              <small class="location"><?=$concert->miejsce;?></small>
                                            </li>
                                            <?
                                          }
                                      }
                                      else
                                      {
                                          ?>
                                          <small class="no-items">Informacje wkrótce</small>
                                          <?
                                      }
              ?>
            </ul>
        </article>

        <?
        if ( function_exists('wp_tag_cloud')){ ?>
        <? } ?>

        <!-- FB box -->
        <article class="side-widget" id="fb-box">
            <h1>Voce na Facebooku</h1>
            <div class="fb-hide-border">
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FVoce-Angeli%2F167479236604347&amp;width=314&amp;colorscheme=light&amp;connections=5&amp;stream=false&amp;header=false&amp;height=192" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:314px; height:192px;" allowTransparency="true"></iframe>
            </div>
        </article>
        <!-- sidebars -->
        <?php get_sidebar(); ?>
        <?php get_sidebar_right(); ?>
    </div> <!-- end of side-content -->

</div> <!-- end of div.body -->

<div class="main-footer clear">
    <div>
        <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a> &copy; All Rights Reserved. 
        <a href="/kontakt/">Kontakt</a>
        <a href="/wp-admin" title="Zaloguj się do panelu edycji">Logowanie</a>
    </div>
</div>

</div> <!-- end of div.inner-wrap -->
</div> <!-- end of div.page -->

    <?php wp_footer(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/va.js"></script>
    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        try {
        var pageTracker = _gat._getTracker("UA-12783117-2");
        pageTracker._trackPageview();
        } catch(err) {}
    </script>
</body>
</html>