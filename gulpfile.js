var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles(["all-clean.css"])
        .version("css/all.css");

    //mix.less('app.less')
    //    .copy('public/css/app.css', 'resources/css/app.css')
    //    .styles([
    //        'app.css',
    //        'magnific-popup.css'
    //    ])
    //    .version("css/all.css");
});
