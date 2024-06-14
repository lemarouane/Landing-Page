<?php
/**
 * The template used for displaying page content in page.php
 */
if(get_post_meta($post->ID, 'wp_auto_p_off', true)) remove_filter ('the_content', 'wpautop'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(has_post_thumbnail($post->ID)): ?>
	<div id="page-banner-<?php the_ID(); ?>" class="page-banner">
		<div id="image-wrapper"><?php echo get_the_post_thumbnail($post->ID, 'full'); ?></div>
		<div id="page-banner-header-wrap">
			<div id="page-banner-header">
				<div id="page-banner-header-inner">
					<?php if(!empty_content(get_post_meta($post->ID, 'banner-content', true))) option_content(get_post_meta($post->ID, 'banner-content', true)); ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php if(!get_post_meta($post->ID, 'hide_page_title', true)): ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
    <?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php edit_post_link( __( 'Edit', 'toolbox' ), '<p class="edit-link">', '</p>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php if(get_post_meta($post->ID, 'wp_auto_p_off', true)) add_filter ('the_content', 'wpautop'); ?>