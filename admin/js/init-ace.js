( function( global, $ ) {
	if($('.ace_container').length > 0){
		var editor,
			syncCSS = function() {
				if($( '#custom_css_input' ).length > 0) $( '#custom_css_input' ).val( custom_css_ace.getSession().getValue() );
				if($( '#custom_js_input' ).length > 0) $( '#custom_js_input' ).val( custom_js_ace.getSession().getValue() );
				if($( '#google_an_input' ).length > 0) $( '#google_an_input' ).val( google_an_ace.getSession().getValue() );
				if($( '#body_tracking_input' ).length > 0) $( '#body_tracking_input' ).val( body_tracking_ace.getSession().getValue() );
				if($( '#body_tracking_2_input' ).length > 0) $( '#body_tracking_2_input' ).val( body_tracking_2_ace.getSession().getValue() );
				if($( '#page_head_code_input' ).length > 0) $( '#page_head_code_input' ).val( page_head_code_ace.getSession().getValue() );
				if($( '#page_foot_code_input' ).length > 0) $( '#page_foot_code_input' ).val( page_foot_code_ace.getSession().getValue() );
			},
			loadAce = function() {
				if($( '#custom_css_input' ).length > 0) custom_css_ace = ace.edit( 'custom_css_ace' );
				if($( '#custom_js_input' ).length > 0) custom_js_ace = ace.edit( 'custom_js_ace' );
				if($( '#google_an_input' ).length > 0) google_an_ace = ace.edit( 'google_an_ace' );
				if($( '#body_tracking_input' ).length > 0) body_tracking_ace = ace.edit( 'body_tracking_ace' );
				if($( '#body_tracking_2_input' ).length > 0) body_tracking_2_ace = ace.edit( 'body_tracking_2_ace' );
				if($( '#page_head_code_input' ).length > 0) page_head_code_ace = ace.edit( 'page_head_code_ace' );
				if($( '#page_foot_code_input' ).length > 0) page_foot_code_ace = ace.edit( 'page_foot_code_ace' );

				if($( '#custom_css_input' ).length > 0) global.safecss_editor = custom_css_ace;
				if($( '#custom_js_input' ).length > 0) global.safecss_editor = custom_js_ace;
				if($( '#google_an_input' ).length > 0) global.safecss_editor = google_an_ace;
				if($( '#body_tracking_input' ).length > 0) global.safecss_editor = body_tracking_ace;
				if($( '#body_tracking_2_input' ).length > 0) global.safecss_editor = body_tracking_2_ace;
				if($( '#page_head_code_input' ).length > 0) global.safecss_editor = page_head_code_ace;
				if($( '#page_foot_code_input' ).length > 0) global.safecss_editor = page_foot_code_ace;

				if($( '#custom_css_input' ).length > 0) custom_css_ace.getSession().setUseWrapMode( true );
				if($( '#custom_js_input' ).length > 0) custom_js_ace.getSession().setUseWrapMode( true );
				if($( '#google_an_input' ).length > 0) google_an_ace.getSession().setUseWrapMode( true );
				if($( '#body_tracking_input' ).length > 0) body_tracking_ace.getSession().setUseWrapMode( true );
				if($( '#body_tracking_2_input' ).length > 0) body_tracking_2_ace.getSession().setUseWrapMode( true );
				if($( '#page_head_code_input' ).length > 0) page_head_code_ace.getSession().setUseWrapMode( true );
				if($( '#page_foot_code_input' ).length > 0) page_foot_code_ace.getSession().setUseWrapMode( true );

				if($( '#custom_css_input' ).length > 0) custom_css_ace.setShowPrintMargin( false );
				if($( '#custom_js_input' ).length > 0) custom_js_ace.setShowPrintMargin( false );
				if($( '#google_an_input' ).length > 0) google_an_ace.setShowPrintMargin( false );
				if($( '#body_tracking_input' ).length > 0) body_tracking_ace.setShowPrintMargin( false );
				if($( '#body_tracking_2_input' ).length > 0) body_tracking_2_ace.setShowPrintMargin( false );
				if($( '#page_head_code_input' ).length > 0) page_head_code_ace.setShowPrintMargin( false );
				if($( '#page_foot_code_input' ).length > 0) page_foot_code_ace.setShowPrintMargin( false );

				if($( '#custom_css_input' ).length > 0) custom_css_ace.getSession().setValue( $( '#custom_css_input' ).val() );
				if($( '#custom_js_input' ).length > 0) custom_js_ace.getSession().setValue( $( '#custom_js_input' ).val() );
				if($( '#google_an_input' ).length > 0) google_an_ace.getSession().setValue( $( '#google_an_input' ).val() );
				if($( '#body_tracking_input' ).length > 0) body_tracking_ace.getSession().setValue( $( '#body_tracking_input' ).val() );
				if($( '#body_tracking_2_input' ).length > 0) body_tracking_2_ace.getSession().setValue( $( '#body_tracking_2_input' ).val() );
				if($( '#page_head_code_input' ).length > 0) page_head_code_ace.getSession().setValue( $( '#page_head_code_input' ).val() );
				if($( '#page_foot_code_input' ).length > 0) page_foot_code_ace.getSession().setValue( $( '#page_foot_code_input' ).val() );

				if($( '#custom_css_input' ).length > 0) custom_css_ace.getSession().setMode( "ace/mode/css" );
				if($( '#custom_js_input' ).length > 0) custom_js_ace.getSession().setMode( "ace/mode/css" );
				if($( '#google_an_input' ).length > 0) google_an_ace.getSession().setMode( "ace/mode/css" );
				if($( '#body_tracking_input' ).length > 0) body_tracking_ace.getSession().setMode( "ace/mode/css" );
				if($( '#body_tracking_2_input' ).length > 0) body_tracking_2_ace.getSession().setMode( "ace/mode/css" );
				if($( '#page_head_code_input' ).length > 0) page_head_code_ace.getSession().setMode( "ace/mode/css" );
				if($( '#page_foot_code_input' ).length > 0) page_foot_code_ace.getSession().setMode( "ace/mode/css" );

				if($( '#custom_css_input' ).length > 0) jQuery.fn.spin&&$( '#custom_css_ace' ).spin( false );
				if($( '#custom_js_input' ).length > 0) jQuery.fn.spin&&$( '#custom_js_ace' ).spin( false );
				if($( '#google_an_input' ).length > 0) jQuery.fn.spin&&$( '#google_an_ace' ).spin( false );
				if($( '#body_tracking_input' ).length > 0) jQuery.fn.spin&&$( '#body_tracking_ace' ).spin( false );
				if($( '#body_tracking_2_input' ).length > 0) jQuery.fn.spin&&$( '#body_tracking_2_ace' ).spin( false );
				if($( '#page_head_code_input' ).length > 0) jQuery.fn.spin&&$( '#page_head_code_ace' ).spin( false );
				if($( '#page_foot_code_input' ).length > 0) jQuery.fn.spin&&$( '#page_foot_code_ace' ).spin( false );

				if($( '#ism-options-form' ).length > 0) $( '#ism-options-form' ).submit( syncCSS );
				else $( '#post' ).submit( syncCSS );
			};
		$( global ).load( loadAce );
		global.aceSyncCSS = syncCSS;
	}
} )( this, jQuery );