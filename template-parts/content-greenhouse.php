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
		<?php $greenhouseJobsURL = 'https://boards-api.greenhouse.io/v1/boards/gelbergroup/jobs?content=true'; //https://boards.greenhouse.io/gelbergroup/jobs/{jobID}}
		$json = file_get_contents($greenhouseJobsURL);
		$json = json_decode($json);
		if(sizeof($json->jobs) > 0): ?>
		<div id="greenhouse-jobs-outer">
			<div id="greenhouse-jobs-inner">
				<h2>Current Career Opportunities With Gelber</h2>
				<?php $greenhouseDeptURL = 'https://boards-api.greenhouse.io/v1/boards/gelbergroup/departments';
				$depts = file_get_contents($greenhouseDeptURL);
				$depts = json_decode($depts);
				$greenhouseOfficeURL = 'https://boards-api.greenhouse.io/v1/boards/gelbergroup/offices';
				$offs = file_get_contents($greenhouseOfficeURL);
				$offs = json_decode($offs); ?>
				<div id="greenhouse-jobs-filters">
					<div class="greenhouse-job-filter">
						<label for="greenhouse-job-dept-filter">Departments</label>
						<select id="greenhouse-job-dept-filter">
							<option value="all">All Department</option>
							<?php foreach($depts->departments as $dept):
								if(sizeof($dept->jobs) > 0): ?>
							<option value="dept-<?php echo $dept->id; ?>"><?php echo $dept->name; ?></option>
							<?php endif;
							endforeach; ?>
						</select>
					</div>
					<div class="greenhouse-job-filter">
						<label for="greenhouse-job-office-filter">Office</label>
						<select id="greenhouse-job-office-filter">
							<option value="all">All Offices</option>
							<?php foreach($offs->offices as $off):
								$hasJobs = 0;
								foreach($off->departments as $offDep) if(sizeof($offDep->jobs) > 0) $hasJobs++;
								if($hasJobs): ?>
							<option value="office-<?php echo $off->id; ?>"><?php echo $off->name; ?></option>
							<?php endif;
							endforeach; ?>
						</select>
					</div>
				</div>
				<div id="greenhouse-department-list">
				<?php foreach($depts->departments as $dept): 
					if(sizeof($dept->jobs) > 0): ?>
					<section class="greenhouse-department" id="dept-<?php echo $dept->id; ?>">
						<h3><?php echo $dept->name; ?></h3>
						<div class="greenhouse-job-list">
							<?php foreach($dept->jobs as $opening):
							$greenhouseJobURL = 'https://boards-api.greenhouse.io/v1/boards/gelbergroup/jobs/'.$opening->id;
							$job = file_get_contents($greenhouseJobURL);
							$job = json_decode($job); 
							$offices = [];
							foreach($job->offices as $of) $offices[] = 'office-'.$of->id; ?>
							<article class="greenhouse-job <?php echo implode(' ', $offices); ?>" id="job-<?php echo $job->id; ?>" data-office="<?php echo sizeof($job->offices); ?>">
								<?php //print_r($job->offices); ?>
								<header>
									<h4><a href="javascript://" class="greenhouse-job-expand" data-target="job-<?php echo $job->id; ?>"><?php echo $job->title; ?></a></h4>
									<p class="greenhouse-job-location"><?php echo $job->location->name; ?></p>
								</header>
								<div class="greenhouse-job-descrip-outer">
									<div class="greenhouse-job-descrip-inner">
										<div class="greenhouse-job-descrip">
											<?php print htmlspecialchars_decode($job->content); ?>
										</div>
									</div>
									<div class="greenhouse-job-toggle-wrapper">
										<?php if(0==1): ?><a href="javascript://" class="greenhouse-job-toggle greenhouse-job-expand" data-target="job-<?php echo $job->id; ?>">Expand details</a><?php endif; ?>
										<a href="javascript://" class="greenhouse-job-toggle greenhouse-job-collapse" data-target="job-<?php echo $job->id; ?>">Collapse details</a>
									</div>
								</div>
								<div class="greenhouse-apply"><a href="<?php echo $job->absolute_url; ?>#app" target="_blank">Apply</a></div>
							</article>
							<?php endforeach; ?>
						</div>
					</section>
					<?php endif;
				endforeach; ?>
				</div>
			</div>
		</div>
		<?php else: ?>
			<p id="greenhouse-no-jobs">Sorry, there currently aren't any available job openings. Please check back soon.</p>
		<?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php if(get_post_meta($post->ID, 'wp_auto_p_off', true)) add_filter ('the_content', 'wpautop'); ?>