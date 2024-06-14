<script>
	jQuery(function($) {
		$('#leader-list').sortable({
			update: function( event, ui ) {
				var sort = [];
				$('#leader-list li').each(function(){
					sort.push($(this).data('id'));
				});
				$('#sorted-leaders').val(sort.join());
			}
		});
		$('#leader-list').disableSelection();
	});
</script>
<style type="text/css">
	div.wrap form {
		padding: 20px 30px 20px;
		border: solid 1px #CCC;
		border-radius: 5px;
		margin: 15px 15px 0 0;
		width: 700px;
		background-color: #FCFCFC;
	}
	#leader-list li {
		padding: 20px;
		margin: 30px 0;
		border: solid 1px #CCC;
		background-color: #FEFEFE;
		position: relative;
		cursor: move;
	}
	#leader-list.sortItems {
		margin: 0 -15px;
	}
	#leader-list.sortItems:after {
		clear: both;
		display: block;
		content: '';
		margin: 30px 0 0;
	}
	#leader-list.sortItems li {
		width: calc(50% - 72px);
		float: left;
		margin: 30px 15px 0;
	}
	#leader-list li:after {
		content: '';
		display: block;
		clear: both;
	}
	#leader-list li div.grip {
		width: 19px;
		height: 19px;
		position: absolute;
		top: 10px;
		right: 10px;
	}
	#leader-list li div.grip span {
		display: block;
		width: 19px;
		height: 5px;
		background: #CCC;
	}
	#leader-list li div.grip span {
		background: #EEE;
	}
	#leader-list li div.grip span.middle {
		margin: 2px 0;
	}
	#leader-list li img {
		float: left;
		width: auto;
		height: 75px;
		margin: 0 20px 0 0;
	}
	#leader-list li h3 {
		margin: 0 0 10px;
	}
	div.wrap legend {
		font-size: 20px;
		font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif;
	}
	div.testtextbox {
		border: 1px solid #ddd;
		margin: 20px;
		font-size: 18px;
		padding: 20px;
		background: #f8f8f8;
		box-shadow: 0px 3px 3px rgba(0,0,0,.5)
	}
	input[type=text].title {
		padding: 7px 5px 2px;
		font-size: 1.7em;
		line-height: 100%;
		outline: 0;
		width: 676px;
	}
	input[type=text].preview {
		padding: 7px 5px 5px;
		line-height: 100%;
		outline: 0;
		width: 676px;
		margin: 20px 0;
	}
	div.wrap textarea {
		padding: 7px 5px 2px;
		font-size: 1.7em;
		line-height: 100%;
		outline: 0;
		width: 676px;
		height: 120px;
		resize: none;
	}
	.row {
		margin: 20px 0 0;
	}
	span.label, p.label {
		font-size: 14px;
		font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif;
	}
	span.label.large, p.label.large {
		font-size: 18px;
	}
	span.label.right {
		margin-left: 20px;
	}
	span.hint {
		color: #666;
		font-size: 80%;
	}
	a.preview {
		display: block;
		height: 200px;
		width: 200px;
		background-position: center center;
		background-size: cover;
		border-radius: 2px;
		box-shadow: 0px 3px 3px rgba(0,0,0,.5);
		float: none;
		margin: 10px;
		border: 1px solid #ddd;
	}
	a.preview:hover {
		box-shadow: 0px 2px 2px rgba(0,0,0,.35);
		border: 1px solid #666;
	}
	a.clearIt {
		display: block;
		width: 200px;
		margin: 0 10px;
		text-align: center;
		text-decoration: none;
	}
	a.clearIt:hover {
		text-decoration: underline;
	}
	.column {
		width: 48%;
		float: left;
	}
	.column.right {
		margin-left: 4%;
	}
	#galleryButtons .button {
		width: 49%;
		display: inline-block;
	}
	#galleryButtons .button.last {
		margin-left: 2%;
	}
	#pageContentMessage {
		display: none;
	}
	#cat-table {
		font-size: 14px;
		margin-left: 20px;
	}
	#cat-table a {
		text-decoration: none;
		line-height: 24px;
		display: inline-block;
	}
	#cat-table ul {
		margin-left: 20px;
	}
</style>
<div class="wrap">
<?php if(isset($_POST['sorted-leaders'])):
	$sorted_blocks = explode(',', $_POST['sorted-leaders']);
	$sort_position = 0;
	foreach($sorted_blocks as $sorted_block){
		$update_block = array(
			'ID'           => $sorted_block,
			'menu_order'   => $sort_position
		);
		$sort_position++;
		wp_update_post( $update_block );
	} ?>
	<div id="message" class="updated below-h2">
		<p>Leaders have been sorted.</p>
	</div>
<?php endif; ?>
<h2>Sort Leaders</h2>
<p>Drag &amp; drop the leaders below to sort them.</p>
<?php settings_errors(); ?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
	<?php wp_enqueue_media(); ?>
	<?php wp_nonce_field('update-options'); ?>
	<div id="ops-wrap">
		<ul id="leader-list">
		<?php $leaders = get_posts(
			array(
				'posts_per_page'   => 99999,
				'orderby'          => 'menu_order',
				'order'            => 'ASC',
				'post_type'        => 'leadership'
			)
		);
		$sort_array = array();
		foreach($leaders as $leader): setup_postdata( $leader );
			$sort_array[] = $leader->ID; ?>
			<li data-id="<?php echo $leader->ID; ?>">
				<div class="grip">
					<span></span>
					<span class="middle"></span>
					<span></span>
				</div>
				<?php echo get_the_post_thumbnail($leader->ID, 'medium'); ?>
				<h2><?php echo $leader->post_title; ?></h2>
			</li>           		
		<?php endforeach; ?>
		</ul>
		<input type="hidden" name="sorted-leaders" id="sorted-leaders" value="<?php echo implode(',',$sort_array); ?>" />
		<p><input type="submit" name="Submit" value="Sort Leaders" class="button button-primary button-large" id="submit-button" /></p>
	</div>    
</form>
</div>