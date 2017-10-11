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

// mix.js('resources/assets/js/app.js', 'public/js');
mix.sass("resources/assets/sass/backend.scss", "public/css");

mix.copy("node_modules/jquery/dist/jquery.min.js", 'public/js');
mix.copy("node_modules/bootstrap/dist/js/bootstrap.min.js", "public/js");
mix.copy("node_modules/popper.js/dist/umd/popper.min.js", "public/js");
mix.copy("node_modules/list.js/dist/list.min.js", "public/js");