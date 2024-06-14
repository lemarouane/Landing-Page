<?php 
/**
 * Front end scripts and styles
 */

function ism_scripts() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', false, '2.1.3', true);
    }
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700&display=swap' );
	wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), '', filemtime( get_template_directory() . '/style.css' ) );
	wp_enqueue_style( 'custom-styles', get_template_directory_uri().'/css/custom-styles.php', 'stylesheet', time() );
	wp_enqueue_script( 'ism-scripts', get_template_directory_uri().'/js/ism-scripts.js', array('jquery'), filemtime( get_template_directory() . '/js/ism-scripts.js' ), true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri().'/js/custom-js.php', array('jquery','ism-scripts'), '1.0', true );
	if(is_page_template('page-map.php')){
		wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCv4h0Uyw1h1kpJBp32iSvusk8_gUMt2ng', 'google-jquery', '1.0', true );
		wp_enqueue_script( 'ism-map-js', get_template_directory_uri().'/js/ism-map.js', array('google-jquery', 'google-maps'), '1.0', true );
	}
}

add_action( 'wp_enqueue_scripts', 'ism_scripts' );

/**
 * Admin scripts
 */

function ism_admin_scripts() {
	wp_enqueue_style( 'codemirror-twilight', get_template_directory_uri() . '/admin/css/codemirror/themes/twilight.css' );
	wp_enqueue_code_editor(
		array(
			'type' => 'text/html',
			'codemirror' => array(
				'autoRefresh' => true
      		)
		)
	);
	wp_enqueue_script( 'js-code-editor', get_template_directory_uri() . '/admin/js/init-code-mirror.js', array( 'jquery' ), '1.0.2', true );
}
add_action( 'admin_enqueue_scripts', 'ism_admin_scripts' );

