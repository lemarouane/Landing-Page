<?php
/**
 * Toolbox functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'toolbox_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override toolbox_setup() in a child theme, add your own toolbox_setup to your child theme's
 * functions.php file.
 */
function toolbox_setup() {
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on toolbox, use a find and replace
	 * to change 'toolbox' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'toolbox', get_template_directory() . '/languages' );

	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'toolbox' ),
		'mobile' => __( 'Mobile Menu', 'toolbox' ),
	) );

	/**
	 * Add support for the Aside and Gallery Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'gallery' ) );
}
endif; // toolbox_setup

/**
 * Nav Schema Walker
 */
class schema_walker extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="'. esc_attr( $class_names ) . '"';

		$output .= $indent . '<li itemprop="name" id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		$attributes  = ' itemprop="url"';
		$attributes .= ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
		$item_output .= $description.$args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**
 * Tell WordPress to run toolbox_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'toolbox_setup' );

/**
 * Set a default theme color array for WP.com.
 */
$themecolors = array(
	'bg' => 'ffffff',
	'border' => 'eeeeee',
	'text' => '444444',
);

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function toolbox_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'toolbox_page_menu_args' );

if ( ! function_exists( 'toolbox_content_nav' ) ):
/**
 * Display navigation to next/previous pages when applicable
 *
 * @since Toolbox 1.2
 */
function toolbox_content_nav( $nav_id ) {
	global $wp_query;

	?>
	<nav id="<?php echo $nav_id; ?>">
		<h1 class="assistive-text section-heading"><?php _e( 'Post navigation', 'toolbox' ); ?></h1>

	<?php if ( is_single() ) : // navigation links for single posts ?>

		<?php previous_post_link( '<div class="nav-previous">%link</div>', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'toolbox' ) . '</span> %title' ); ?>
		<?php next_post_link( '<div class="nav-next">%link</div>', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'toolbox' ) . '</span>' ); ?>

	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

		<?php if ( get_next_posts_link() ) : ?>
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'toolbox' ) ); ?></div>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'toolbox' ) ); ?></div>
		<?php endif; ?>

	<?php endif; ?>

	</nav><!-- #<?php echo $nav_id; ?> -->
	<?php
}
endif; // toolbox_content_nav


if ( ! function_exists( 'toolbox_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own toolbox_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Toolbox 0.4
 */
function toolbox_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'toolbox' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'toolbox' ), ' ' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer>
				<div class="comment-author vcard">
					<?php echo get_avatar( $comment, 40 ); ?>
					<?php printf( __( '%s <span class="says">says:</span>', 'toolbox' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
				</div><!-- .comment-author .vcard -->
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em><?php _e( 'Your comment is awaiting moderation.', 'toolbox' ); ?></em>
					<br />
				<?php endif; ?>

				<div class="comment-meta commentmetadata">
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
					<?php
						/* translators: 1: date, 2: time */
						printf( __( '%1$s at %2$s', 'toolbox' ), get_comment_date(), get_comment_time() ); ?>
					</time></a>
					<?php edit_comment_link( __( '(Edit)', 'toolbox' ), ' ' );
					?>
				</div><!-- .comment-meta .commentmetadata -->
			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for toolbox_comment()

if ( ! function_exists( 'toolbox_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own toolbox_posted_on to override in a child theme
 *
 * @since Toolbox 1.2
 */
function toolbox_posted_on() {
	printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="byline"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'toolbox' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'toolbox' ), get_the_author() ) ),
		esc_html( get_the_author() )
	);
}
endif;

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Toolbox 1.2
 */
function toolbox_body_classes( $classes ) {
	// Adds a class of single-author to blogs with only 1 published author
	if ( ! is_multi_author() ) {
		$classes[] = 'single-author';
	}

	return $classes;
}
add_filter( 'body_class', 'toolbox_body_classes' );

/**
 * Returns true if a blog has more than 1 category
 *
 * @since Toolbox 1.2
 */
function toolbox_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'all_the_cool_cats', $all_the_cool_cats );
	}

	if ( '1' != $all_the_cool_cats ) {
		// This blog has more than 1 category so toolbox_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so toolbox_categorized_blog should return false
		return false;
	}
}

/**
 * Flush out the transients used in toolbox_categorized_blog
 *
 * @since Toolbox 1.2
 */
function toolbox_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'all_the_cool_cats' );
}
add_action( 'edit_category', 'toolbox_category_transient_flusher' );
add_action( 'save_post', 'toolbox_category_transient_flusher' );

/**
 * Filter in a link to a content ID attribute for the next/previous image links on image attachment pages
 */
function toolbox_enhanced_image_navigation( $url ) {
	global $post, $wp_rewrite;

	$id = (int) $post->ID;
	$object = get_post( $id );
	if ( wp_attachment_is_image( $post->ID ) && ( $wp_rewrite->using_permalinks() && ( $object->post_parent > 0 ) && ( $object->post_parent != $id ) ) )
		$url = $url . '#main';

	return $url;
}
add_filter( 'attachment_link', 'toolbox_enhanced_image_navigation' );

/**
 * Post types
 */
add_action( 'init', 'init_post_types' );

function init_post_types() {
	register_post_type( 'leadership',
		array(
			'labels' => array(
				'name' => __( 'Leadership' ),
				'singular_name' => __( 'Leader' ),
				'add_new_item' => __( 'Add New Leader' ),
				'edit_item' => __( 'Edit Leader' ),
				'new_item' => __( 'New Leader' ),
				'view_item' => __( 'View Leader' ),
				'search_items' => __( 'Search Leadership' ),
				'not_found' => __( 'No leaders found' ),
				'not_found_in_trash' => __( 'No leaders found in Trash' )
			),
			'menu_position' => 21,
			'menu_icon' => 'dashicons-businessman',
			'public' => false,
			'hierarchical' => true,
			'show_ui' => true,
			'has_archive' => true,
			'supports' => ['title','editor','thumbnail'],
			'register_meta_box_cb' => 'add_leadership_metabox'
		)
	);
}

/**
 * Post Thumbails Support
 */

add_theme_support( 'post-thumbnails' ); 

/**
 * Page Metaboxes
 */

function page_settings_metabox(){
	wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('wp-color-picker', admin_url('js/color-picker.min.js'), array('iris'), false,1); ?>
    <script>
		jQuery(function($){
			$('.color-picker').wpColorPicker();
		});
	</script>
	<style type="text/css">
		span.pre {
			font-family: monospace;
		}
	</style>
	<p><input type="checkbox" name="wp_auto_p_off" id="wp_auto_p_off"<?php if(isset($_REQUEST['post']) && get_post_meta($_REQUEST['post'], 'wp_auto_p_off', true)) echo " checked";?> /><label for="wp_auto_p_off"> Turn off automatic <span class="pre">&lt;p&gt;</span> tags?</label></p>
	<p><input type="checkbox" name="hide_page_title" id="hide_page_title"<?php if(isset($_REQUEST['post']) && get_post_meta($_REQUEST['post'], 'hide_page_title', true)) echo " checked";?> /><label for="hide_page_title"> Hide page title?</label></p>
    <p><strong>Banner Overlay Opacity</strong></p>
    <select name="banner_overlay_opacity">
        <option></option>
        <?php $x = 5;
        while($x <= 100): ?>
        <option value="<?php echo $x/100; ?>"<?php if($x/100 == get_post_meta($_REQUEST['post'], 'banner_overlay_opacity', true)) echo ' selected'; ?>><?php echo $x; ?>%</option>
        <?php $x = $x + 5;
        endwhile ?>
    </select>
<?php }
 
function page_banner_content_metabox(){ 
	wp_editor( get_post_meta($_REQUEST['post'], 'banner-content', true), 'banner-content',
		array(
			'textarea_name' => 'banner-content',
			'textarea_rows'	=>	5
		)
	 );
}

function page_testimonial_metabox(){ ?>
	<style type="text/css">
		span.pre {
			font-family: monospace;
		}
		input.test-text {
			display: block;
			width: 100%;
			height: 40px;
			line-height: 40px;
			font-size: 20px;
			font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif;
			padding: 0 10px;
		}
	</style>
	<p><input type="checkbox" name="testimonial_active" id="testimonial_active"<?php if(isset($_REQUEST['post']) && get_post_meta($_REQUEST['post'], 'testimonial_active', true)) echo " checked";?> /><label for="testimonial_active"> Display testimonial?</label></p>
<?php wp_editor( get_post_meta($_REQUEST['post'], 'testimonial_content', true), 'testimonial_content',
		array(
			'textarea_name' => 'testimonial_content',
			'textarea_rows'	=>	5
		)
	 ); ?>
	<p><input type="text" id="testimonial_author" placeholder="Testimonial Title" name="testimonial_author" value="<?php echo get_post_meta($_REQUEST['post'], 'testimonial_author', true); ?>" class="test-text" /></p>
<?php }

function page_cta_metabox(){ ?>
	<style type="text/css">
		span.pre {
			font-family: monospace;
		}
		input.cta-text {
			display: block;
			width: 100%;
			height: 40px;
			line-height: 40px;
			font-size: 20px;
			font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif;
			padding: 0 10px;
		}
	</style>
	<p><input type="checkbox" name="cta_off" id="cta_off"<?php if(isset($_REQUEST['post']) && get_post_meta($_REQUEST['post'], 'cta_off', true)) echo " checked";?> /><label for="cta_off"> Hide call to action banner on this page?</label></p>
	<p><input type="checkbox" name="cta_override" id="cta_override"<?php if(isset($_REQUEST['post']) && get_post_meta($_REQUEST['post'], 'cta_override', true)) echo " checked";?> /><label for="cta_override"> Override call to action banner content on this page?</label></p>
	<p><input type="text" id="cta_title" placeholder="Call to Action Custom Title" name="cta_title" value="<?php echo get_post_meta($_REQUEST['post'], 'cta_title', true); ?>" class="cta-text" /></p>

<?php wp_editor( get_post_meta($_REQUEST['post'], 'cta_content', true), 'cta_content',
		array(
			'textarea_name' => 'cta_content',
			'textarea_rows'	=>	5
		)
	 ); ?>
	<p><input type="text" id="cta_link" placeholder="Call to Action Custom Link Text" name="cta_link" value="<?php echo get_post_meta($_REQUEST['post'], 'cta_link', true); ?>" class="cta-text" /></p>
<?php }

function page_code_metabox(){ ?>
	<style type="text/css">
		span.code {
			font-family: monospace;
			font-weight: normal;
		}
		.CodeMirror {
			border: 1px solid #eee;
			height: 400px;
		}
	</style>
	<p class="post-attributes-label-wrapper"><label class="post-attributes-label" for="page_head_code">Inside <span class="code">&lt;head&gt;</span> tags.</label></p>
	<?php wp_code_mirror_editor( 'page_head_code', get_post_meta($_REQUEST['post'], 'page_head_code', true), 'javascript', 1 ); ?>
	<p class="post-attributes-label-wrapper"><label class="post-attributes-label" for="page_foot_code">Before <span class="code">&lt;/body&gt;</span> close tag.</label></p>
	<?php wp_code_mirror_editor( 'page_foot_code', get_post_meta($_REQUEST['post'], 'page_foot_code', true), 'javascript', 1 ); ?>
<? }

// A function that will add the metabox to the edit page
function add_page_metaboxes() { 
    // More info about arguments in the WP Codex
    add_meta_box(
        'page_settings_meta',		// Name of the box
        __('Page Settings'),		// Title of the box
		'page_settings_metabox',  	// The metabox html function 
        ['page'],	                  // SET TO THE POST TYPE WHERE THE METABOX IS SHOWN
        'side',						// Specifies where the box is shown
        'high'                      // Specifies priority
    ); 

    add_meta_box(
        'page_banner_content_meta',          // Name of the box
        __('Banner Content'),              // Title of the box
        'page_banner_content_metabox',			  // The metabox html function 
        ['page'],	                  // SET TO THE POST TYPE WHERE THE METABOX IS SHOWN
        'normal',               	  // Specifies where the box is shown
        'high'						// Specifies priority
    ); 	

	add_meta_box(
		'page_testimonial_meta',          // Name of the box
		__('Page Testimonial Banner'),              // Title of the box
		'page_testimonial_metabox',			  // The metabox html function 
		['page'],	                  // SET TO THE POST TYPE WHERE THE METABOX IS SHOWN
		'normal',               	  // Specifies where the box is shown
		'high'						// Specifies priority
	); 		
	
	$ism_ops = get_option('ism_ops');
	if($ism_ops['cta_active']){
		add_meta_box(
			'page_cta_meta',          // Name of the box
			__('Page Custom Call to Action Banner Settings'),              // Title of the box
			'page_cta_metabox',			  // The metabox html function 
			['page'],	                  // SET TO THE POST TYPE WHERE THE METABOX IS SHOWN
			'normal',               	  // Specifies where the box is shown
			'high'						// Specifies priority
		); 		
	}

    add_meta_box(
        'page_code_meta',          // Name of the box
        __('Page Custom Tracking &amp; Code'),              // Title of the box
        'page_code_metabox',			  // The metabox html function 
        ['page'],	                  // SET TO THE POST TYPE WHERE THE METABOX IS SHOWN
        'normal',               	  // Specifies where the box is shown
        'high'						// Specifies priority
    ); 	
}
add_action( 'add_meta_boxes', 'add_page_metaboxes' );

/**
 * Leadership Metabox
 */

function leadership_metabox(){ ?>
    <p><strong>Title</strong><br />
	<textarea name="leader_title" placeholder="Ex: CEO" style="width: 100%; height: 100px;"><?php echo get_post_meta($_REQUEST['post'], 'leader_title', true); ?></textarea></p>
<?php }

// A function that will add the metabox to the edit page
function add_leadership_metabox() { 
    // More info about arguments in the WP Codex
    add_meta_box(
        'leadership_meta',          // Name of the box
        __('Settings &amp; Info'),              // Title of the box
        'leadership_metabox',  // The metabox html function 
        'leadership',                  // SET TO THE POST TYPE WHERE THE METABOX IS SHOWN
        'side',               	    // Specifies where the box is shown
        'high'                      // Specifies priority
    ); 
}

// This function takes care of saving the metabox's value
function save_post_types($post_id){
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    	return;

    if('page' == $_POST['post_type']){
		update_post_meta($post_id, 'wp_auto_p_off', $_POST['wp_auto_p_off']);
		update_post_meta($post_id, 'hide_page_title', $_POST['hide_page_title']);
		update_post_meta($post_id, 'banner_overlay_opacity', $_POST['banner_overlay_opacity']);
		update_post_meta($post_id, 'banner-content', $_POST['banner-content']);
		update_post_meta($post_id, 'page_head_code', $_POST['page_head_code']);
		update_post_meta($post_id, 'page_foot_code', $_POST['page_foot_code']);
		update_post_meta($post_id, 'testimonial_active', $_POST['testimonial_active']);
		update_post_meta($post_id, 'testimonial_content', $_POST['testimonial_content']);
		update_post_meta($post_id, 'testimonial_author', $_POST['testimonial_author']);
		update_post_meta($post_id, 'cta_off', $_POST['cta_off']);
		update_post_meta($post_id, 'cta_override', $_POST['cta_override']);
		update_post_meta($post_id, 'cta_title', $_POST['cta_title']);
		update_post_meta($post_id, 'cta_content', $_POST['cta_content']);
		update_post_meta($post_id, 'cta_link', $_POST['cta_link']);
		return;
    }
	
	if('post' == $_POST['post_type']){
		return;
	}
	
	if('leadership' == $_POST['post_type']){
		update_post_meta($post_id, 'leader_title', $_POST['leader_title']);
		return;
	}
}

// Hook these actions into Wordpress
add_action('save_post', 'save_post_types');

/**
 * Post Submenu Pages
 */

add_action('admin_menu', 'add_menu_options_pages');
function add_menu_options_pages() {
	add_submenu_page( 'edit.php?post_type=leadership', 'Sort Leaders', 'Sort Leaders', 'manage_options', 'sort-leaders', 'sortleaders' );
}

function sortleaders() {
	require_once('pages/sort-leaders.php');
}

// TinyMCE HTML5
add_filter('tiny_mce_before_init', 'modify_valid_children');
function modify_valid_children($settings){
    $settings['valid_children']="+a[div|p|ul|ol|li|h1|h2|h3|h4|h5|h5|h6]";
    return $settings;
}

// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

/**
 * Add Custom Avatar Field
 */
function custom_avatar_field( $user ) { ?>
	<style type="text/css">
		#avatar-img-container img {
			max-width: 100%;
			height: auto;
		}
		a#avatar-img-container {
			width: 200px;
			display: block;
		}
		a#avatar-img-container.hidden {
			display: none;
		}
	</style>
    <?php wp_enqueue_media(); ?>
	<h3>Custom Avatar</h3>
	<table class="form-table">
		<tbody>
			<tr>
				<th><label for="custom_avatar">Non-gravatar avatar</label></th>
				<td>
					<input type="hidden" name="custom_avatar" id="custom_avatar" value="<?php echo esc_attr( get_the_author_meta( 'custom_avatar', $user->ID ) ); ?>" />
					<p>
						<a title="Set avatar image" href="javascript://" id="avatar-img-container" class="upload-avatar-img<?php if(esc_attr( get_the_author_meta( 'custom_avatar', $user->ID ) ) == '') echo ' hidden'; ?>">
						<?php if(esc_attr( get_the_author_meta( 'custom_avatar', $user->ID ) ) <> '') echo wp_get_attachment_image(esc_attr( get_the_author_meta( 'custom_avatar', $user->ID ) ), 'medium' );  ?>
						</a>
					</p>
					<p>
						<a href="javascript://" id="upload-avatar-img" class="upload-avatar-img<?php if(esc_attr( get_the_author_meta( 'custom_avatar', $user->ID ) ) <> '') echo ' hidden'; ?>">Set avatar image</a>
						<a href="javascript://" id="delete-avatar-img"<?php if(esc_attr( get_the_author_meta( 'custom_avatar', $user->ID ) ) == '') echo ' class="hidden"'; ?>>Remove avatar image</a>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
    <script>
		jQuery(function($){
			// Set all variables to be used in scope
			var frame,
				metaBox = $('#post_avatar_meta.postbox'), // Your meta box id here
				addImgLink = $('.upload-avatar-img'),
				setImgLink = $('#upload-avatar-img'),
				delImgLink = $( '#delete-avatar-img'),
				imgContainer = $( '#avatar-img-container'),
				imgIdInput =$( '#custom_avatar' );
			// ADD IMAGE LINK
			addImgLink.on( 'click', function( event ){
				event.preventDefault();
				// If the media frame already exists, reopen it.
				if ( frame ) {
					frame.open();
					return;
				}
				// Create a new media frame
				frame = wp.media({
					title: 'Select or Upload Shout Featured Image',
					button: {
						text: 'Use this image'
					},
					library: { 
						type: 'image' // limits the frame to show only images
					},
					multiple: false  // Set to true to allow multiple files to be selected
				});
				// When an image is selected in the media frame...
				frame.on( 'select', function() {
					// Get media attachment details from the frame state
					var attachment = frame.state().get('selection').first().toJSON();
					// Send the attachment URL to our custom image input field.
					imgContainer.html( '<img src="'+attachment.url+'" alt="" style="max-width:100%;"/>' );
					// Send the attachment id to our hidden input
					imgIdInput.val( attachment.id );
					// Unhide the remove image link
					delImgLink.removeClass( 'hidden' );
					// Unhide the remove image link
					addImgLink.removeClass( 'hidden' );
					// Hide the add image link
					setImgLink.addClass( 'hidden' );
				});
				// Get current image
				frame.on( 'open', function() {
					var selection   =   frame.state().get('selection');
					var image_id    =   imgIdInput.val();

					attachment  =  wp.media.attachment(image_id);
					attachment.fetch();
					selection.add(attachment ? [attachment] : []);
				});		
				// Finally, open the modal on click
				frame.open();
			});
			// DELETE IMAGE LINK
			delImgLink.on( 'click', function( event ){
				event.preventDefault();
				// Clear out the preview image
				imgContainer.html( '' );
				// Un-hide the add image link
				addImgLink.removeClass( 'hidden' );
				// Hide the delete image link
				delImgLink.addClass( 'hidden' );
				// Delete the image id from the hidden input
				imgIdInput.val( '' );
			});	   
		});
	</script>		
 <?php 
}
add_action( 'show_user_profile', 'custom_avatar_field' );
add_action( 'edit_user_profile', 'custom_avatar_field' );
 
/**
 * Save Custom Avatar Field
 */
function save_custom_avatar_field( $user_id ) {
 if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }
 update_usermeta( $user_id, 'custom_avatar', $_POST['custom_avatar'] );
}
add_action( 'personal_options_update', 'save_custom_avatar_field' );
add_action( 'edit_user_profile_update', 'save_custom_avatar_field' );
function custom_gravatar_filter($avatar, $id_or_email, $size, $default, $alt) {
	$custom_avatar = get_the_author_meta('custom_avatar');
	if ($custom_avatar) 
		$return = wp_get_attachment_image(esc_attr( $custom_avatar ), 'medium' );
	elseif ($avatar) 
		$return = $avatar;
	else 
		$return = '<img src="'.$default.'" width="'.$size.'" height="'.$size.'" alt="'.$alt.'" />';
	return $return;
}
add_filter('get_avatar', 'custom_gravatar_filter', 10, 5);

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');


/**
 * Print Code Mirror Editor
 */
function wp_code_mirror_editor( $name, $value, $mode, $ajax = 0 ) {
	ob_start(); ?>
	<textarea class="code-mirror widefat textarea" data-mode="<?php echo $mode; ?>" data-ajax="<?php echo $ajax; ?>" name="<?php echo $name; ?>"><?php echo ($value); ?></textarea>
	<?php $output = ob_get_clean();
	echo $output;
}

/**
 * This theme was built with PHP, Semantic HTML, CSS, love, and a Toolbox.
 */