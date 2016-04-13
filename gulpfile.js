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
    mix.styles(['bootstrap.css',
                'font-awesome.css',
                'main.css',
                'custom-style.css'], 'public/css/main.css')
       .scripts(['jquery/jquery-2.1.0.js',
                 'bootstrap/bootstrap.js',
                 'plugins/modernizr/modernizr.js',
                 'king-common.js',
                 'plugins/parsley-validation/parsley.js'], 'public/js/main.js')
       .scripts(['plugins/dropzone/dropzone.js',
                 'plugins/wizard/wizard.min.js'], 'public/js/create-leadlist.js');
});
