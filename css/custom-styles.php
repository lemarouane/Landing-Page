<?php header("Content-type: text/css");
require( '../../../../wp-load.php' );
$ism_ops = get_option('ism_ops');
$posts_pages = get_posts(
	array(
		'posts_per_page'	=> 99999,
		'post_type'			=> array('post', 'page', 'condition', 'treatment')
	)
);
foreach($posts_pages as $post_page): setup_postdata($post_page);
	if(has_post_thumbnail($post_page->ID) || $post_page->ID = get_option( 'page_on_front' )): ?>
#page-banner-<?php echo $post_page->ID; ?> #image-wrapper {
	background-image: url('<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id( $post_page->ID ), 'full'); echo $img[0]; ?>');
}
@media only screen and (max-width : 700px) {
	#page-banner-<?php echo $post_page->ID; ?> #image-wrapper {
		background-image: url('<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id( $post_page->ID ), 'large'); echo $img[0]; ?>');
	}
}
#page-banner-<?php echo $post_page->ID; ?> #page-banner-header-wrap {
    background-color: rgba(0,0,0,<?php if(get_post_meta($post_page->ID, 'banner_overlay_opacity', true) <> '') echo get_post_meta($post_page->ID, 'banner_overlay_opacity', true); else echo 0.5; ?>);
}
<?php endif;
endforeach;
wp_reset_postdata(); ?>
#testimonial-block {
	background-image: url('<?php $img = wp_get_attachment_image_src($ism_ops['testimonial_bg_img_id'], 'full'); echo $img[0]; ?>');
}
#cta-banner-image {
	background-image: url('<?php $img = wp_get_attachment_image_src($ism_ops['cta_bg_img_id'], 'full'); echo $img[0]; ?>');
}
@media only screen and (max-width : 700px) {
	#testimonial-block {
		background-image: url('<?php $img = wp_get_attachment_image_src($ism_ops['testimonial_bg_img_id'], 'large'); echo $img[0]; ?>');
	}
	#cta-banner-image {
		background-image: url('<?php $img = wp_get_attachment_image_src($ism_ops['cta_bg_img_id'], 'large'); echo $img[0]; ?>');
	}
}

<?php echo $ism_ops['custom_css']; ?>