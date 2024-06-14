<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
$ism_ops = get_option('ism_ops');
	if(get_post_type() == 'page' && array_key_exists('cta_active', $ism_ops) && $ism_ops['cta_active'] && !get_post_meta($post->ID, 'cta_off', true)): 
		if(get_post_meta($post->ID, 'cta_override', true)){
			$cta_title = get_post_meta($post->ID, 'cta_title', true);
			$cta_content = get_post_meta($post->ID, 'cta_content', true);
			$cta_link = get_post_meta($post->ID, 'cta_link', true);
		}
		else {
			$cta_title = $ism_ops['cta_title'];
			$cta_content = $ism_ops['cta_content'];
			$cta_link = $ism_ops['cta_link'];
		} ?>
	<div id="cta-banner">
		<?php if($ism_ops['cta_bg_img_id']): ?><div id="cta-banner-image"><?php echo wp_get_attachment_image( $ism_ops['cta_bg_img_id'], 'full'); ?></div><?php endif; ?>
		<div id="cta-banner-content">
			<div id="cta-contact-img"><?php echo wp_get_attachment_image( $ism_ops['cta_contact_img_id'], 'full'); ?></div>
			<h4><?php echo $cta_title; ?></h4>
			<?php option_content($cta_content) ;?>
			<a href="<?php echo get_permalink($ism_ops['cta_link_page']); ?>"><?php echo $cta_link; ?></a>
		</div>
	</div><!-- #cta-banner -->
	<?php endif; ?>
	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
    	<?php dynamic_sidebar( 'footer-1' ); ?>
    <?php $socialArray = array();
		if($ism_ops['facebook'] <> ''){
			$socialArray[] = array(
				'title' => 'Facebook',
				'class' => 'facebook',
				'url' => $ism_ops['facebook']
			);
		}
		if($ism_ops['twitter'] <> ''){
			$socialArray[] = array(
				'title' => 'Twitter',
				'class' => 'twitter',
				'url' => $ism_ops['twitter']
			);
		}
		if($ism_ops['google'] <> ''){
			$socialArray[] = array(
				'title' => 'Google+',
				'class' => 'google',
				'url' => $ism_ops['google']
			);
		} 
		if(sizeof($socialArray) > 0): ?>
    	<div id="footer-social">
        <?php foreach($socialArray as $social): ?>
        	<a href="<?php echo $social['url']; ?>" title="<?php echo $social['title']; ?>" class="<?php echo $social['class']; ?>" target="_blank"></a>
        <?php endforeach; ?>
        </div>
        <?php endif; ?>
    	<div id="footer-address"><?php option_content($ism_ops['footer-address']); ?></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php echo $ism_ops['body_tracking_2']; ?>
<?php echo get_post_meta($post->ID, 'page_foot_code', true); ?>
</body>
</html>