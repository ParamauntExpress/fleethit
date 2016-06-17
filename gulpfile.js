var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
        .less([
                'style.less'
            ], 'public/css/all.css')
            
        .scripts([
                'jquery/dist/jquery.min.js'
            ], 'public/js/all.js')
            
        .version([
                'css/all.css',
                'js/all.js'
            ]);
})