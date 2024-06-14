'use strict';
 (function($){
    $(function(){
		$('textarea.code-mirror').each(function(){
			var textarea = $(this),
				mode = textarea.data('mode'),
				ajax = textarea.data('ajax'),
				editorSettings = wp.codeEditor.defaultSettings ? _.clone( wp.codeEditor.defaultSettings ) : {};
            editorSettings.codemirror = _.extend(
                {},
                editorSettings.codemirror,
                {
                    indentUnit: 2,
                    tabSize: 2,
                    mode: mode, 
					theme: 'twilight'
                }
            );
            var editor = wp.codeEditor.initialize( textarea, editorSettings );
			if(ajax){
				wp.data.subscribe(function () {
					// Obtain the CodeMirror instance
					var cm = textarea.next('.CodeMirror').get(0).CodeMirror;
					cm.save(); // copy the content of the editor into the textarea.
				});
			}
		});
    });
 })(jQuery);