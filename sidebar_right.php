
		<div id="sidebar_right">
			<ul>
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ){
			?>
			<?
			} else { ?>	

			<li class="widget_archives"><h2>Archiwum</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php wp_list_pages('title_li=<h2>Strony</h2>' ); ?>
			
            
		<?php } ?>
			</ul>
			
		</div>
