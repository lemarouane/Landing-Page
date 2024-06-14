<?php
/**
 * The Sidebar containing the main widget areas.
 */
?>
	<?php $sidebars = explode(',',get_post_meta(get_the_ID(), 'sidebarsList', true)); 
    if(sizeof($sidebars) > 0 && get_post_meta(get_the_ID(), 'sidebarsList', true) <> ''):?>
		<div id="secondary" class="widget-area-wrap" role="complementary">
			<?php foreach($sidebars as $sidebar):  ?>
            <div id="<?php echo $sidebar; ?>" class="widget-area">
                <?php dynamic_sidebar( $sidebar ); ?>
            </div>
            <?php endforeach; ?>
		</div><!-- #secondary .widget-area -->
	<?php endif; ?>
