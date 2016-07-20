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
        
        $('.masthead .button.rent-modal').on('click', function() {
            $('.ui.modal.regform').modal('show');
        });
        
        $('.ui.modal.regform .ui.gray.button').on('click', function() {
            $('.ui.modal.regform').modal('hide');
        });
        
        $('.regform form').form({
            on: 'blur',
            inline: true,
            fields: {
                first: {
                    identifier: 'first',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter a First name'
                        }
                    ]
                },
                last: {
                    identifier: 'last',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter a Last name'
                        }
                    ]
                },
                age: {
                    identifier: 'age',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please check the Age'
                        }
                    ]
                },
                phone: {
                    identifier: 'phone',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter a Phone number'
                        }
                    ]
                },
                address: {
                    identifier: 'address',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter a Home address'
                        }
                    ]
                },
                zip: {
                    identifier: 'zip',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter a Zip-code'
                        }
                    ]
                },
                license: {
                    identifier: 'license',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter a Driver license number'
                        }
                    ]
                },
                social: {
                    identifier: 'social',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter a Social security number"'
                        }
                    ]
                },
                bank: {
                    identifier: 'bank',
                    rules: [
                        {
                            type: 'creditCard',
                            prompt: 'Please enter a Bank account number'
                        }
                    ]
                },
                image: {
                    identifier: 'image',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please upload a Driver license photo'
                        }
                    ]
                },
                agree: {
                    identifier: 'agree',
                    rules: [
                        {
                            type   : 'checked',
                            prompt : 'Please accept Terms and Conditions'
                        }
                    ]
                }
            }
        });
        
        $('.ui .checkbox').checkbox();
        
        $('.ui.dropdown').dropdown();
        
        $('.ui.embed').embed();
        
        $('.ui.accordion').accordion();
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
//# sourceMappingURL=custom.js.map
