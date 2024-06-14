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
		<?php $leaders = get_posts(
			array(
				'posts_per_page'   => 99999,
				'orderby'          => 'menu_order',
				'order'            => 'ASC',
				'post_type'        => 'leadership'
			)
		);
		foreach($leaders as $leader): setup_postdata( $leader ); ?>
		<div class="leader" id="leader-<?php echo $leader->ID; ?>">
			<div class="leader-img"><?php echo get_the_post_thumbnail($leader->ID, 'full'); ?></div>
			<div class="leader-content">
				<h2><?php echo $leader->post_title; ?></h2>
				<h3><?php echo get_post_meta($leader->ID, 'leader_title', true); ?></h3>
				<?php option_content($leader->post_content); ?>
			</div>
		</div>
		<?php endforeach; ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php if(get_post_meta($post->ID, 'wp_auto_p_off', true)) add_filter ('the_content', 'wpautop'); ?>