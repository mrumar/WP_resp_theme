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


        <div id="main_search" class="side-widget">
              <a href="<?php bloginfo('rss2_url'); ?>" title="Subskrybuj kanał RSS chóru Voce Angeli" class="icon-feed">subskrybuj kanał rss</a>
                <form method="get" id="searchform_top" action="<?php bloginfo('url'); ?>/">
                    <div>
                    	<span>Szukaj :</span>
                        <input type="text" value="<?php the_search_query(); ?>" name="s" id="searchform_top_text" />
                        <input type="submit" value="szukaj" id="gosearch" class="icon-search" />
                    </div>
                </form>
            </div>
            <article class="side-widget" id="upcomming-concerts">
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
                                                  <em title="<?=$concert->data_koncertu.'T'.$concert->godzina;?>" class="dtstart"><?=pl_time2string2($concert->data_koncertu,$concert->godzina);?></em><br />
                                                  <strong class="summary"><?=$concert->nazwa;?></strong><br /> 
                                                  <small class="location"><?=$concert->miejsce;?></small>      
                                                </li>
                                                <?
                                              }
                                          }
                                          else
                                          {
                                              echo 'Informacje wkrótce';
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
    </div>
</div>

</div> <!-- end of div.inner-wrap -->
</div> <!-- end of div.page -->

    <?php wp_footer(); ?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery-1.9.0.min.js"></script>
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