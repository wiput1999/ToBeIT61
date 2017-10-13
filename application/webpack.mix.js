let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.options({
    processCssUrls: false
});

// mix.js('resources/assets/js/app.js', 'public/js');
mix.sass("resources/assets/sass/backend.scss", "public/css");
mix.sass("resources/assets/sass/app.scss", "public/css");
mix.js("resources/assets/js/landing.js", "public/js");
mix.js("resources/assets/js/scroll.js", "public/js");

mix.copy("node_modules/jquery/dist/jquery.min.js", 'public/js');
mix.copy("node_modules/bootstrap/dist/js/bootstrap.min.js", "public/js");
mix.copy("node_modules/popper.js/dist/umd/popper.min.js", "public/js");
mix.copy("node_modules/list.js/dist/list.min.js", "public/js");
mix.copy("resources/assets/js/kube.min.js", "public/js");
mix.copy("resources/assets/js/jquery-ui.js", "public/js");