(function() {
    'use strict';
    
    //semantic
    $(document).ready(function() {
        $('.ui.sidebar').sidebar('attach events', '.toc.item');
        
        $('.dashboard .tabular.menu .item').tab();
        
        $('.bg.banner .introduction').transition({
            animation: 'fade left',
            duration: '2s',
            onComplete: function() {
                //
            }
        });
        
        $('.bg.pattern .introduction').transition({
            animation: 'fade left',
            duration: '2s',
            onComplete: function() {
                //
            }
        });
        
        $('.message .close').on('click', function() {
            $(this).closest('.message').transition('fade');
        });
        
        $('.regform form').form({
            on: 'blur',
            fields: {
                first: {
                    identifier: 'first',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter a value'
                        }
                    ]
                },
                last: {
                    identifier: 'last',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter a value'
                        }
                    ]
                },
                license: {
                    identifier: 'license',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter a value'
                        }
                    ]
                },
                image: {
                    identifier: 'image',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter a value'
                        }
                    ]
                },
                agree: {
                    identifier: 'agree',
                    rules: [
                        {
                            type   : 'checked',
                            prompt : 'Please check the checkbox'
                        }
                    ]
                }
            }
        });
        
        $('.ui .checkbox').checkbox();
        
        $('.ui.dropdown').dropdown();
    });
    
    //custom functions
    $(document).ready(function() {
        $('input:text, .ui.button', '.ui.action.input').on('click', function(e) {
        	$('input:file', $(e.target).parents()).click();
    	});
        
        $('input:file', '.ui.action.input').on('change', function(e) {
        	var name = e.target.files[0].name;
        	$('input:text', $(e.target).parent()).val(name);
    	});
    });
    
})('jQuery');