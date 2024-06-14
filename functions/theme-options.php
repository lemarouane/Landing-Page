<?php
/**
 * Theme Options.
 */

add_action('admin_menu', 'add_theme_options_page');
function add_theme_options_page() {
	add_theme_page( 'Theme Options', 'Theme Options', 'edit_posts', 'theme-options', 'themeoptions' );
}
function themeoptions() { ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script>
        function int_image_button(namespace){
			// Set all variables to be used in scope
			var frame;
			// ADD IMAGE LINK
			jQuery('#'+namespace+'_img_id_button').on( 'click', function( event ){
				event.preventDefault();
				// If the media frame already exists, reopen it.
				if ( frame ) {
				  frame.open();
				  return;
				}
				// Create a new media frame
				frame = wp.media({
					title: 'Select or Upload an Image',
					button: {
						text: 'Add selected images'
					},
					library: { 
						type: 'image' // limits the frame to show only images
					},
					multiple: false  // Set to true to allow multiple files to be selected
				});
			
				// When an image is selected in the media frame...
				frame.on( 'select', function() {
					// Get media attachment details from the frame state
					
					var selection = frame.state().get('selection');
					selection.map( function( attachment ) {
						attachment = attachment.toJSON();
						// Send the attachment URL to our custom image input field.
						jQuery('#'+namespace+'_img_id').val(attachment.id);
						jQuery('#'+namespace+'_img_id_display').html('<img src="'+attachment.url+'" />');
					});
				});
				
				// Finally, open the modal on click
				frame.open();
				var selection = frame.state().get('selection');
				var selected = jQuery('#'+namespace+'_img_id').val(); // the id of the image
				if (selected) {
					selection.add(wp.media.attachment(selected));
				}
				
			});
            jQuery('#'+namespace+'_img_id_clear').click(function(){
                jQuery('#'+namespace+'_img_id').val('');
                jQuery('#'+namespace+'_img_id_display').html('');
            });
        }
        function colorDrop(namespace) {
            jQuery('#'+namespace+'-color-drop-display, #'+namespace+'-color-drop-arrow').click(function(){
                jQuery('#'+namespace+'-color-drop-down').toggle();
            });
            jQuery('#'+namespace+'-color-drop-wrap .color-drop-option').each(function(){
                jQuery(this).click(function(){
                    jQuery('#'+namespace+'-color-drop-wrap .color-drop-option').removeClass('selected');
                    jQuery(this).addClass('selected');
                    jQuery('#'+namespace+'_color').val(jQuery(this).data('color'));
                    jQuery('#'+namespace+'-color-drop-down').hide();
                    jQuery('#'+namespace+'-color-drop-display').html(jQuery(this).html());
                });
            });
        }
        jQuery(function($) {
            $( "#tabs" ).tabs();
            $( "#tabs > ul > li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
            $('#ops-wrap').show();
			int_image_button('testimonial_bg');
			int_image_button('cta_bg');
			int_image_button('cta_contact');
			$('#cta_active').change(function(){
				if($(this).attr('checked')) {
					$('#cta-options').show();
				}
				else {
					$('#cta-options').hide();
				}
			});
        });
    </script>
    <style type="text/css">
        .ui-tabs-vertical {
            width: 100%;
            border-radius: 0px;
            border: none;
            padding: 0 0 0 200px;
            min-height: 500px;
            position: relative;
            box-sizing: border-box;
        }
        .ui-tabs-vertical:after {
            content: '';
            display: block;
            clear: both;
        }
        .ui-tabs-vertical .ui-tabs-nav {
            width: 200px;
            padding: 0;
            border: none;
            background: #23282D;
            border-radius: 0px;
            position: absolute;
            top: 0px;
            left: 0px;
            height: 100%;
            margin: 0;
        }
        .ui-tabs-vertical .ui-tabs-nav li {
            clear: left;
            width: 100%;
            border: none !important;
            margin: 0;
            border-radius: 0;
            top: 0px;
            height: 34px;
            line-height: 34px;
            background: #22272c;
            position: relative;
        }
        .ui-tabs-vertical .ui-tabs-nav li.ui-state-hover {
            background: #181d22;
        }
        .ui-tabs-vertical .ui-tabs-nav li.ui-state-hover a {
            color: #00b9eb;
        }
        .ui-tabs-vertical .ui-tabs-nav li a {
            display: block;
            float: none;
            color: #FFF;
            padding: 0 10px;
            -webkit-box-shadow: none;
            box-shadow: none;
            text-decoration: none;
            font-family: "Open Sans",sans-serif;
            font-size: 14px;
        }
        .ui-tabs .ui-tabs-nav .ui-tabs-anchor {
            padding: 0 10px;
        }
        .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active {
            border: none !important;
            background: #0073AA;
        }
        .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active a {
            color: #FFF;
        }
        .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active:after {
            right: 0;
            border: 8px solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-right-color: #FFF;
            top: 50%;
            margin-top: -8px;
        }
        .ui-tabs-vertical .ui-tabs-panel {
            padding: 20px;
            background: #FFF;
            min-height: 500px;
        }
        #ops-wrap h3,
        #ops-wrap h4 {
            font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif;
            font-weight: normal;
            margin: 0;
        }
        #ops-wrap h3.margin-top {
            margin: 50px 0 0 0;	
        }
        #ops-wrap h4.margin-bottom {
            margin: 0 0 10px;
        }
        .row {
            margin: 60px 0 0;
            clear: both;
        }
        .row.first {
            margin: 20px 0 0;
        }
        .row:after {
            clear: both;
            content: '';
            display: block;
        }
        .row input[type=text] {
            display: block;
            font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif;
            background: #f1f1f1;
            color: #222;
            outline: none;
            height: 40px;
            line-height: 40px;
            width: 100%;
            box-shadow: none;
            border: none;
            font-size: 16px;
            padding: 0 10px;
        }
        .color-drop-wrap {
            height: 50px;
            line-height: 50px;
            border: solid 1px #e5e5e5;
            background-color: #f5f5f5;
            position: relative;
            width: 250px;
            font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif;
        }
        .color-drop-down {
            display: none;
            overflow: hidden;
            position: absolute;
            bottom: 0px;
            left: -1px;
            width: 100%;
            border: solid #e5e5e5;
            border-width: 1px 1px 0;
            z-index: 2;
        }
        .color-drop-display {
            height: 50px;
            position: absolute;
            top: 0px;
            left: 0px;
            right: 50px;
            cursor: pointer;
            padding: 0 10px;
        }
        .color-drop-display:after {
            content: '';
            width: 1px;
            height: 30px;
            position: absolute;
            right: 0px;
            top: 10px;
            background: #999;
        }
        .color-drop-arrow {
            height: 50px;
            width: 50px;
            position: absolute;
            top: 0px;
            right: 0px;
            cursor: pointer;
        }
        .color-drop-arrow:before {
            border: solid transparent;
            content: '';
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(153, 153, 153, 0);
            border-bottom-color: #999;
            border-width: 6px;
            margin-left: -6px;
            top: 11px;
            left: 24px;
        }
        .color-drop-arrow:after {
            border: solid transparent;
            content: '';
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(153, 153, 153, 0);
            border-top-color: #999;
            border-width: 6px;
            margin-left: -6px;
            bottom: 11px;
            left: 24px;
        }
        .color-drop-option {
            line-height: 40px;
            height: 40px;
            padding: 0 10px;
        }
        .color-drop-option:nth-child(odd) {
            background-color: #fefefe;
        }
        .color-drop-option:nth-child(even) {
            background-color: #fafafa;
        }
        .color-drop-option.selected {
            background-color: #b7e2f7;
        }
        .color-drop-option:hover {
            cursor: pointer;
            background-color: #0073aa;
            color: #fff;
        }
        .color-block {
            width: 50%;
            float: left;
            vertical-align: middle;
            margin: 10px 10px 10px 0;
        }
        .color-drop-option .color-block {
            height: 20px;
        }
        .color-drop-display .color-block {
            height: 30px;
        }
        .purple {
            background-color: #b42371;
        }
        .red {
            background-color: #fb3448;
        }
        .orange {
            background-color: #ff6b35;
        }
        .yellow {
            background-color: #ffdb00;
        }
        .green {
            background-color: #00b188;
        }
        .blue {
            background-color: #131b4d;
        }
        .image-id-display img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            margin: 0 auto 10px;
            display: block;
        }
        .img-col-buttons {
            text-align: center;
        }
        .column {
            width: 48%;
            float: left;
        }
        .column.left {
            margin-right: 4%;
        }
        .column-thirds {
            width: 30%;
            float: left;
        }
        .column-thirds.column-thirds-first-two-thirds {
            width: 65%;
            float: left;
			margin-right: 5%;
        }
		.column-thirds.column-thirds-middle {
			margin: 0 5%;
		}
        .ace_container {
            width: 100%;
            height: 400px;
            position: relative;
        }
        .ace_textarea {
            display: none;
        }
        .ace_content {
            background: #f1f1f1;
        }
        .ace_gutter-layer {
            background: #23282D;
            color: #FFF;
        }
        #cat_list {
            margin: 0;
            padding: 0;
            background: #f1f1f1;
            list-style: none;
        }
        #cat_list:after {
            content: '';
            clear: both;
            display: block;
        }
        #cat_list li {
            font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",sans-serif;
            background: #23282D;
            color: #FFF;
            text-align: center;
            width: 14.65%;
            float: left;
            height: 50px;
            line-height: 50px;
            margin: 1%;
            border-radius: 0;
        }
        #cat_list li.ui-state-placeholder {
            background: #AAA;
        }
        #cat_list li.ui-sortable-helper {
            background: #0073AA;
        }
        #ops-wrap {
            margin-top: 20px;
            display: none;
        }
        #ops-wrap #submit-button {
            float: right;
        }
        #pm_mark_img_id_display {
            background-color: #aaa;
        }
        p.hint {
            font-size: 10px;
            color: #666;
        }
        textarea.hash-list {
            width: 100%;
            height: 200px;
            resize: none;
        }
        ul#all-products {
            text-align: center;
            background-color: #f1f1f1;
            border: 1px solid #e5e5e5;
            -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.04) inset;
            box-shadow: 0 1px 1px rgba(0,0,0,.04) inset;
            overflow-x: scroll;
            max-height: 340px;
        }
        ul#product-spotlight-list,
        ul#featured-products-list {
            text-align: center;
            background-color: #f1f1f1;
            border: 1px solid #e5e5e5;
            -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.04) inset;
            box-shadow: 0 1px 1px rgba(0,0,0,.04) inset;
            width: 100%;
            min-height: 280px;
        }
        ul#all-products:after,
        ul#product-spotlight-list:after,
        ul#featured-products-list:after {
            display: block;
            content: '';
            clear: both;
        }
        ul#all-products li,
        ul#featured-products-list li {
            margin: 20px;
            display: inline-block;
            vertical-align: top;
            width: 85px;
            height: 103px;
            text-align: center;
            padding: 1px;
            background-color: #e5e5e5;
            color: #23282D;
            cursor: move;
            font-size: 12px;
        }
        ul#all-products li:hover,
        ul#featured-products-list li:hover {
            background-color: #0073AA;
            color: #fff;
        }
        ul#all-products li img,
        ul#featured-products-list li img {
            max-width: 85px;
            max-height: 85px;
            height: auto;
            display: block;
        }
        ul#product-spotlight-list li {
            margin: 20px auto;
            display: block;
            vertical-align: top;
            width: 260px;
            text-align: center;
            padding: 1px 1px 6px;
            background-color: #e5e5e5;
            color: #23282D;
            cursor: move;
            font-size: 20px;
        }
        ul#product-spotlight-list li:hover {
            background-color: #0073AA;
            color: #fff;
        }
        ul#product-spotlight-list li img {
            max-width: 260px;
            max-height: 260px;
            height: auto;
            display: block;
            margin-bottom: 5px;
        }
        .hide {
            display: none;
        }
		span.code {
			font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", "monospace";
		}
		.CodeMirror {
			border: 1px solid #eee;
			height: 400px;
		}
    </style>
    <div class="wrap">
    <h2>Theme Options</h2>
    <?php settings_errors(); ?>
    <form method="post" action="options.php" id="ism-options-form">
        <?php wp_enqueue_media(); ?>
        <?php wp_nonce_field('update-options'); ?>
        <?php $ism_ops = get_option('ism_ops'); ?>
        <div id="ops-wrap">
            <div id="tabs" class="ui-tabs-vertical ui-helper-clearfix">
                <ul>
                    <li><a href="#home-page">Site Info &amp; Home Page</a></li>
                    <li><a href="#soc-nets">Social Networks</a></li>
                    <li><a href="#custom-css">Custom CSS</a></li>
                    <li><a href="#custom-js">Custom JavaScript</a></li>
                    <li><a href="#tracking">Tracking</a></li>
                </ul>
                <div id="home-page">
                    <h3>Testimonial Banner Background Image</h3>
                    <div class="row first">
						<div id="testimonial_bg_img_id_display" class="image-id-display"><?php if($ism_ops['testimonial_bg_img_id'] <> '') echo wp_get_attachment_image( $ism_ops['testimonial_bg_img_id'], 'full'); ?></div>
						<input type="hidden" name="ism_ops[testimonial_bg_img_id]" value="<?php echo $ism_ops['testimonial_bg_img_id']; ?>" id="testimonial_bg_img_id" />
						<div class="img-col-buttons"><a href="javascript://" class="button button-primary" id="testimonial_bg_img_id_button" title="Manage Image">Manage Image</a> <a href="javascript://" class="button" id="testimonial_bg_img_id_clear" title="Remove Image">Remove Image</a></div>
					</div>
                    <h3 class="margin-top">Call to Action Banner</h3>
                    <div class="row first">
						<p><label for="cta_active"><input type="checkbox" id="cta_active" name="ism_ops[cta_active]" value="1" <?php if($ism_ops['cta_active']) echo ' checked'; ?> /> Activate call to action banner?</label></p>
					</div>
					<div id="cta-options" <?php if(!$ism_ops['cta_active']) echo ' style="display: none;"'; ?>>
						<div class="row first">
							<div class="column-thirds column-thirds-first-two-thirds">
								<h4>Banner Background Image</h4>
								<div id="cta_bg_img_id_display" class="image-id-display"><?php if($ism_ops['cta_bg_img_id'] <> '') echo wp_get_attachment_image( $ism_ops['cta_bg_img_id'], 'full'); ?></div>
								<input type="hidden" name="ism_ops[cta_bg_img_id]" value="<?php echo $ism_ops['cta_bg_img_id']; ?>" id="cta_bg_img_id" />
								<div class="img-col-buttons"><a href="javascript://" class="button button-primary" id="cta_bg_img_id_button" title="Manage Image">Manage Image</a> <a href="javascript://" class="button" id="cta_bg_img_id_clear" title="Remove Image">Remove Image</a></div>
							</div>
							<div class="column-thirds">
								<h4>Banner Contact Image</h4>
								<div id="cta_contact_img_id_display" class="image-id-display"><?php if($ism_ops['cta_contact_img_id'] <> '') echo wp_get_attachment_image( $ism_ops['cta_contact_img_id'], 'full'); ?></div>
								<input type="hidden" name="ism_ops[cta_contact_img_id]" value="<?php echo $ism_ops['cta_contact_img_id']; ?>" id="cta_contact_img_id" />
								<div class="img-col-buttons"><a href="javascript://" class="button button-primary" id="cta_contact_img_id_button" title="Manage Image">Manage Image</a> <a href="javascript://" class="button" id="cta_contact_img_id_clear" title="Remove Image">Remove Image</a></div>
							</div>
						</div>
						<div class="row first">
							<?php wp_dropdown_pages(
								array(
									'selected'              => $ism_ops['cta_link_page'],
									'echo'                  => 1,
									'name'                  => 'ism_ops[cta_link_page]',
									'show_option_none'      => 'Call to Action Page', // string
									'option_none_value'     => '', // string
								)
							); ?>
						</div>
						<div class="row first">
							<input type="text" name="ism_ops[cta_title]" value="<?php echo $ism_ops['cta_title']; ?>" placeholder="Call to Action Title" />
						</div>
						<div class="row first">
							 <?php wp_editor( $ism_ops['cta_content'], 'cta_content',
								array(
									'textarea_name' => 'ism_ops[cta_content]',
									'media_buttons' => false,
									'teeny'	=>	true,
									'textarea_rows'	=>	5
								)
							 ); ?>
						</div>
						<div class="row first">
							<input type="text" name="ism_ops[cta_link]" value="<?php echo $ism_ops['cta_link']; ?>" placeholder="Call to Action Link Text" />
						</div>
					</div>
                    <h3 class="margin-top">Footer Address Bar</h3>                    <div class="row first">
                         <?php wp_editor( $ism_ops['footer-address'], 'footer-address',
                            array(
                                'textarea_name' => 'ism_ops[footer-address]',
                                'media_buttons' => false,
                                'teeny'	=>	true,
                                'textarea_rows'	=>	5
                            )
                         ); ?>
                    </div>
                </div>
                <div id="soc-nets">
                    <h3>Social Networks</h3>
                    <div class="row first">
                        <input type="text" name="ism_ops[facebook]" value="<?php echo $ism_ops['facebook']; ?>" placeholder="Facebook" />
                    </div>
                    <div class="row first">
                        <input type="text" name="ism_ops[twitter]" value="<?php echo $ism_ops['twitter']; ?>" placeholder="Twitter" />
                    </div>
                    <div class="row first">
                        <input type="text" name="ism_ops[google]" value="<?php echo $ism_ops['google']; ?>" placeholder="Google+" />
                    </div>
                </div>
                <div id="custom-css">
                    <h3>Global Custom CSS</h3>
                    <div class="row first">
						<?php wp_code_mirror_editor( 'ism_ops[custom_css]', $ism_ops['custom_css'], 'css' ); ?>
                    </div>
                </div>
                <div id="custom-js">
                    <h3>Global Custom JavaScript</h3>
                    <div class="row first">
						<?php wp_code_mirror_editor( 'ism_ops[custom_js]', $ism_ops['custom_js'], 'javascript' ); ?>
                    </div>
                </div>
				<div id="tracking">
                    <h3>Google Analytics or Other Tracking Codes</h3>
                    <div class="row first">
						<p class="hint">This will be inserted before the <code>&lt;head&gt;</code> tag closes.</p>
						<?php wp_code_mirror_editor( 'ism_ops[google_an]', $ism_ops['google_an'], 'javascript' ); ?>
                    </div>
					<h3 class="margin-top">Tracking After <code>&lt;body&gt;</code> Open Tag</h3>
                    <div class="row first">
						<p class="hint">This will be inserted immediately after the open <code>&lt;body&gt;</code> tag.</p>
						<?php wp_code_mirror_editor( 'ism_ops[body_tracking]', $ism_ops['body_tracking'], 'javascript' ); ?>
                    </div>                    
					<h3 class="margin-top">Tracking Before <code>&lt;/body&gt;</code> Close Tag</h3>
                    <div class="row first">
						<p class="hint">This will be inserted immediately before the close <code>&lt;/body&gt;</code> tag.</p>
						<?php wp_code_mirror_editor( 'ism_ops[body_tracking_2]', $ism_ops['body_tracking_2'], 'javascript' ); ?>
					</div>
                </div>
            </div>    
            <p><input type="submit" name="Submit" value="Update Options" class="button button-primary button-large" id="submit-button" /></p>
            
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="ism_ops" />
        </div>    
    </form>
    </div>
<?php }

/***
 * Include Google Analytics
 **/

add_action('wp_head', 'google_tracking');
function google_tracking() {
	$ism_ops = get_option('ism_ops');
	echo $ism_ops['google_an'];
}

/***
 * Option Content
 **/

function option_content($content) {
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	echo $content;
}

/**
 * Check content contents.
 */

function empty_content($str) {
    return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
}