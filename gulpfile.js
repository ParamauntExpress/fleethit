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

//boot js
elixir(function(mix) {
    mix.scripts(['libs/jquery/dist/jquery.min.js'], 'public/js/boot.js');
});

//middleware js
elixir(function(mix) {
    mix.scripts(['libs/semantic/semantic.min.js'], 'public/js/middleware.js');
});

//middleware css
elixir(function(mix) {
    mix.styles(['semantic/semantic.min.css'], 'public/css/middleware.css');
});

//custom js
elixir(function(mix) {
    mix.scripts(['custom/script.js'], 'public/js/custom.js');
});

//custom css
elixir(function(mix) {
   mix.less(['style.less'], 'public/css/custom.css');
});

//version
elixir(function(mix) {
   mix.version(['js/boot.js', 'js/middleware.js', 'css/middleware.css', 'js/custom.js', 'css/custom.css']) ;
});
