<?php
/**
 * Add dynamic widget areas
 */
 
add_action( 'init', 'init_widget_areas_type' );

function init_widget_areas_type() {
	register_post_type( 'sidebar',
		array(
			'labels' => array(
				'name' => __( 'Widget Areas' ),
				'singular_name' => __( 'Widget Area' ),
				'add_new_item' => __( 'Add New Widget Area' ),
				'edit_item' => __( 'Edit Widget Area' ),
				'new_item' => __( 'New Widget Area' ),
				'view_item' => __( 'View Widget Area' ),
				'search_items' => __( 'Search Widget Area' ),
				'not_found' => __( 'No widget areas found' ),
				'not_found_in_trash' => __( 'No widget areas found in Trash' )
			),
			'menu_position' => 21,
			'menu_icon' => 'dashicons-welcome-widgets-menus',
			'public' => false,
			'has_archive' => false,
			'supports' => array(
				'title',
			),
			'show_in_nav_menus' => false,
			'show_ui' => true,
			'exclude_from_search' => true,
			'register_meta_box_cb' => 'add_w_a_metabox'
		)
	);
}

/***
 * Widget Area Metaboxes.
 **/

function w_a_metabox(){ ?>
    <?php wp_nonce_field('my_meta_box_nonce', 'meta_box_nonce'); // Security ?>
	<style type="text/css">
		.inputRow { margin: 0 0 10px; font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif; }
		.inputCol { float: left; width: 49%; }
		.widgetInput { width: 100%; margin: 5px 0 10px; display: block; font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif; }
		.inputHint { display: block; color: #666; font-size: 80%; }
		.spacer { float: left; width: 2%; height: 10px; }
		.clear { clear: both; }
		#edit-slug-box { display: none; }
		input[type=text].widgetID { width: 48%; margin: 0 2% 10px 0; font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif; transition: all .5s; -moz-transition: all .5s; -webkit-transition: all .5s; }
		input[type=text].fail { border-color: #F00; color: #F00; background-color: #FCC; }
		input[type=text].pass { border-color: #090; color: #090; background-color: #CFC; }
		span.widgetID.hint { display: inline-block; width: 48%; color: #666; font-size: 90%; margin: 0 0 10px; }
	</style>
    <div class="inputRow">
        <div class="inputCol">
            <input type="text" name="sidebar_id" id="sidebar_id" placeholder="Widget Area ID" value="<?php if(isset($_REQUEST['post'])) echo get_post_meta($_REQUEST['post'], 'sidebar_id', true); ?>" class="widgetID"<?php if(isset($_REQUEST['post']) && (get_post_meta($_REQUEST['post'], 'sidebar_id', true) <> '')) echo " readonly";?> /><span class="widgetID hint" id="someshit"><?php if(isset($_REQUEST['post']) && (get_post_meta($_REQUEST['post'], 'sidebar_id', true) <> '')) echo "The ID cannot be changed."; else echo "Widget Area ID must be unique."; ?></span>
            <select name="widget_wrapper" class="widgetInput">
                <option value="div">Widget Wrapper Tag: (DIV is default)</option>
                <option value="div"<?php if(isset($_REQUEST['post']) && (get_post_meta($_REQUEST['post'], 'widget_wrapper', true) == 'div')) echo " selected";?>>DIV (Default)</option>
                <option value="aside"<?php if(isset($_REQUEST['post']) && (get_post_meta($_REQUEST['post'], 'widget_wrapper', true) == 'aside')) echo " selected";?>>ASIDE</option>
                <option value="li"<?php if(isset($_REQUEST['post']) && (get_post_meta($_REQUEST['post'], 'widget_wrapper', true) == 'li')) echo " selected";?>>LI</option>
            </select><select name="title_wrapper" class="widgetInput">
                <option value="h2">Title Wrapper Tag: (Heading 2 is default)</option>
                <option value="h2"<?php if(isset($_REQUEST['post']) && (get_post_meta($_REQUEST['post'], 'title_wrapper', true) == 'h2')) echo " selected";?>>Heading 2 (Default)</option>
                <option value="h3"<?php if(isset($_REQUEST['post']) && (get_post_meta($_REQUEST['post'], 'title_wrapper', true) == 'h3')) echo " selected";?>>Heading 3</option>
                <option value="h4"<?php if(isset($_REQUEST['post']) && (get_post_meta($_REQUEST['post'], 'title_wrapper', true) == 'h4')) echo " selected";?>>Heading 4</option>
                <option value="h5"<?php if(isset($_REQUEST['post']) && (get_post_meta($_REQUEST['post'], 'title_wrapper', true) == 'h5')) echo " selected";?>>Heading 5</option>
                <option value="h6"<?php if(isset($_REQUEST['post']) && (get_post_meta($_REQUEST['post'], 'title_wrapper', true) == 'h6')) echo " selected";?>>Heading 6</option>
            </select>
        </div>
        <div class="spacer"></div>
        <div class="inputCol">
            <textarea name="description" placeholder="Widget Area Description" class="widgetInput" style="height: 100px;"><?php if(isset($_REQUEST['post'])) echo get_post_meta($_REQUEST['post'], 'description', true); ?></textarea>
        </div>
        <div class="clear"></div>
    </div>
	<script>
        jQuery(document).ready(function(){
            var sidebarIDs = new Array();
            sidebarIDs.push( 'default-widget-area' );
            sidebarIDs.push( 'footer-1' );
            <?php $sidebars = get_posts(array(
                'posts_per_page'   => 99999,
                'post_type'        => 'sidebar'
                )
            );
            foreach ( $sidebars as $sidebar ) : setup_postdata( $sidebar ); ?>
            sidebarIDs.push( '<?php echo get_post_meta($sidebar->ID, 'sidebar_id', true); ?>' );
            <?php endforeach; ?>
            jQuery('#sidebar_id').keyup(function(){
                if( jQuery.inArray(jQuery('#sidebar_id').val().replace(' ', '-'), sidebarIDs) < 0 ) jQuery('#sidebar_id').addClass('pass').removeClass('fail');
                else jQuery('#sidebar_id').addClass('fail').removeClass('pass');
                if(jQuery('#sidebar_id').val().replace(' ', '-') == '') jQuery('#sidebar_id').removeClass('pass').removeClass('fail');
            });
            jQuery('#publish').click(function() {
                if( jQuery('#sidebar_id').hasClass('fail') || jQuery('#sidebar_id').val() == '' ) {
                    jQuery('.spinner').hide();
                    jQuery('#publish').removeClass('button-primary-disabled');
                    jQuery('#save-post').removeClass('button-disabled');
					alert('Please enter a unique ID for your sidebar.');
					return false;
				}
                else return true;
            });
        });
    </script>
<?php }

// A function that will add the metabox to the edit page
function add_w_a_metabox() { 
    // More info about arguments in the WP Codex
    add_meta_box(
        'w_a_meta',          // Name of the box
        __('Widget Area Settings'),              // Title of the box
        'w_a_metabox',			  // The metabox html function 
        'sidebar',	                  // SET TO THE POST TYPE WHERE THE METABOX IS SHOWN
        'normal',               	  // Specifies where the box is shown
        'high'						// Specifies priority
    ); 
}

function w_a_selectabox(){ 
	$sidebars = array();
	$sidebars[] = array(
		'id' => 'default-widget-area',
		'title' => 'Default Sidebar'
	);
	$sidebarlist = get_posts(array(
		'posts_per_page'   => 99999,
		'post_type'        => 'sidebar', 
		'order' 		   => 'ASC'
		)
	);
	foreach ( $sidebarlist as $sidebar ) : setup_postdata( $sidebar );
		$sidebars[] = array(
			'id' => get_post_meta($sidebar->ID, 'sidebar_id', true),
			'title' => $sidebar->post_title
		);
	endforeach; ?>
    <?php $actives = explode(',', get_post_meta($_REQUEST['post'], 'sidebarsList', true)); ?>
    <style type="text/css">
		strong.sbTitles {
			display: block;
			float: left;
			width: 49%;
			font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif;
			margin: 15px 0;
			font-weight: normal;
			font-size: 22px;
		}
		span.sbSpacer {
			display: block;
			float: left;
			width: 2%;
			height: 2px;
		}
		ul.connectedSortable {
			font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif;
			padding: none;
			margin: 0;
			list-style: none;
			width: 49%;
			min-height: 50px;
			float: left;
			background: #FAFAFA;
			border: solid 1px #EEE;
			box-sizing: border-box;
			border-radius: 1px;
		}
		#sortable1 {
			margin-right: 2%;
		}
		ul.connectedSortable li {
			margin: 10px 10px;
			padding: 10px;
			font-size: 18px;
			border: solid 1px #e5e5e5;
			background: #FFF;
			box-shadow: 0 1px 1px rgba(0,0,0,.04);
		}
		ul.connectedSortable li:hover {
			cursor: move;
			border-color: #0074A2;
			color: #FFF;
			background: #0074A2;
		}
		.ui-state-highlight {
			height: 20px;
			border: none !important;
			background: #333333 !important;
			box-shadow: 0 1px 1px rgba(255,255,255,.5), 0 1px 1px rgba(0,0,0,.04) inset !important;
		}
		.clear {
			clear: both;
		}
	</style>
    <p class="instruct">To add widget areas to this <?php if($_REQUEST['post_type'] == 'page') echo $_REQUEST['post_type']; else echo 'post'; ?>, drag and drop available widget areas from the left column to the right. Widget areas will appear in the order they are listed, but can be rearranged by draggin and dropping them in the desired order.<?php if($_REQUEST['post_type'] == 'page'): ?> Be sure to select the "Default Template" from the "Templates" drop down, or your widget areas won't show up!<?php endif; ?></p>
    <strong class="sbTitles">Available Widget Areas</strong>
    <span class="sbSpacer"></span>
    <strong class="sbTitles">Active Widget Areas</strong>
    <div class="clear"></div>
	<ul id="sortable1" class="connectedSortable">
    <?php function in_array_r($needle, $haystack, $strict = false) {
		foreach ($haystack as $item) {
			if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
				return true;
			}
		}
		return false;
	}
	foreach ( $sidebars as $sidebar ) : ?>
    	<?php if(!in_array($sidebar['id'],$actives)): ?><li data-sidebar="<?php echo $sidebar['id']; ?>"><?php echo $sidebar['title']; ?></li><?php endif; ?>
	<?php endforeach ?>
    </ul>
	<ul id="sortable2" class="connectedSortable">
    <?php foreach ( $actives as $active ) : ?>
    	<?php if(in_array_r($active, $sidebars)): 
		foreach($sidebars as $sidebar){
			if($sidebar['id'] == $active) $activeTitle = $sidebar['title'];
		} ?><li data-sidebar="<?php echo $sidebar['id']; ?>"><?php echo $activeTitle; ?></li><?php endif; ?>
	<?php endforeach ?>
    </ul>
    <input type="hidden" name="sidebarsList" value="<?php echo get_post_meta($_REQUEST['post'], 'sidebarsList', true); ?>" id="sidebarsList" />
    <div class="clear"></div>
    <script>
		jQuery(document).ready(function() {
            jQuery( "#sortable1, #sortable2" ).sortable({
				placeholder: "ui-state-highlight",
				connectWith: ".connectedSortable", 
				stop: function(){
					var sidebarsList = [];
					jQuery('#sortable2').children('li').each(function(){
						sidebarsList.push(jQuery(this).data('sidebar'));
					});
					jQuery('#sidebarsList').val(sidebarsList.join(','));
				}
			}).disableSelection();
        });
	</script>
<?php }
 
// A function that will add the metabox to the edit page
function add_sidebar_selectbox() { 
    // More info about arguments in the WP Codex
    add_meta_box(
        'w_a_meta',          // Name of the box
        __('Select Post Widget Areas'),              // Title of the box
        'w_a_selectabox',  // The metabox html function 
        'post',                  // SET TO THE POST TYPE WHERE THE METABOX IS SHOWN
        'normal',               	    // Specifies where the box is shown
        'default'                      // Specifies priority
    ); 

    add_meta_box(
        'w_a_meta',          // Name of the box
        __('Select Page Widget Areas'),              // Title of the box
        'w_a_selectabox',  // The metabox html function 
        'page',                  // SET TO THE POST TYPE WHERE THE METABOX IS SHOWN
        'normal',               	    // Specifies where the box is shown
        'default'                      // Specifies priority
    ); 

    add_meta_box(
        'w_a_meta',          // Name of the box
        __('Select Page Widget Areas'),              // Title of the box
        'w_a_selectabox',  // The metabox html function 
        'procedure',                  // SET TO THE POST TYPE WHERE THE METABOX IS SHOWN
        'normal',               	    // Specifies where the box is shown
        'default'                      // Specifies priority
    ); 
}
add_action( 'add_meta_boxes', 'add_sidebar_selectbox' );


/**
 * Register widgetized area and update sidebar with default widgets
 */
function widgets_init() {
	register_sidebar( array(
		'name' => __( 'Default Widget Area', 'toolbox' ),
		'id' => 'default-widget-area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer', 'toolbox' ),
		'id' => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
}
add_action( 'init', 'widgets_init' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function dynamic_sidebars_init() {
	$sidebars = get_posts(array(
		'posts_per_page'   => 99999,
		'post_type'        => 'sidebar',
		'order' => 'ASC'
		)
	);
	foreach ( $sidebars as $sidebar ) :
		setup_postdata( $sidebar );
		register_sidebar( array(
			'name' => __( $sidebar->post_title ),
			'id' => get_post_meta($sidebar->ID, 'sidebar_id', true),
			'description' => __( get_post_meta($sidebar->ID, 'description', true) ),
			'before_widget' => '<'.get_post_meta($sidebar->ID, 'widget_wrapper', true).' id="%1$s" class="widget %2$s">',
			'after_widget' => '</'.get_post_meta($sidebar->ID, 'widget_wrapper', true).'>',
			'before_title' => '<'.get_post_meta($sidebar->ID, 'title_wrapper', true).' class="widget-title">',
			'after_title' => '</'.get_post_meta($sidebar->ID, 'title_wrapper', true).'>',
		) );
	endforeach;
}
add_action( 'init', 'dynamic_sidebars_init' );
// This function takes care of saving the metabox's value
function save_widget_areas($post_id){
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    	return;

    if('page' == $_POST['post_type']){
		update_post_meta($post_id, 'sidebarsList', $_POST['sidebarsList']);
		return;
    }
	
	if('post' == $_POST['post_type']){
		update_post_meta($post_id, 'sidebarsList', $_POST['sidebarsList']);
		return;
	}

    if('physician' == $_POST['post_type']){
		update_post_meta($post_id, 'sidebarsList', $_POST['sidebarsList']);
		return;
    }
	
	if('procedure' == $_POST['post_type']){
		update_post_meta($post_id, 'sidebarsList', $_POST['sidebarsList']);
		return;
	}

	if ('sidebar' == $GLOBALS['post_type']){
        // Encode so it can be stored and retrieved properly
		update_post_meta($post_id, 'sidebar_id', str_replace(' ', '-', $_POST['sidebar_id']));
		update_post_meta($post_id, 'description', $_POST['description']);
		update_post_meta($post_id, 'widget_wrapper', $_POST['widget_wrapper']);
		update_post_meta($post_id, 'title_wrapper', $_POST['title_wrapper']);
		return;
    }
}

// Hook these actions into Wordpress
add_action('save_post', 'save_widget_areas');
