const mix = require('laravel-mix');

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

//mix.js('resources/js/app.js', 'public/js')
//   .sass('resources/sass/app.scss', 'public/css');

mix

    .sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/site/bootstrap.css')

    //1º param: Onde está o arquivo? | 2º param: Para onde esse arquivo deve ir (ele PRECISA ser acessível através da web)?
    .scripts('node_modules/jquery/dist/jquery.js', 'public/site/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/site/bootstrap.js');
