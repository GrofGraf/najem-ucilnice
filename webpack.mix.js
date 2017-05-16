const { mix } = require('laravel-mix');

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

 mix.styles([
   'resources/assets/css/bootstrap.css',
   'resources/assets/css/fullcalendar.css',
   'resources/assets/css/main.css'
 ], 'public/static/css/main.css');

 mix.scripts([
   'resources/assets/js/jquery.js',
   'resources/assets/js/bootstrap.js',
   'resources/assets/js/moment.js',
   //'resources/assets/js/sl.js',
   'resources/assets/js/fullcalendar.js',
   'resources/assets/js/gcal.js',
   'resources/assets/js/main.js'
 ], 'public/static/js/main.js');
