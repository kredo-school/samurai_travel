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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/common.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/top.scss', 'public/css')
    .ts('resources/ts/map.ts', 'public/js')
    .sass('resources/sass/search.scss', 'public/css')
    .sass('resources/sass/suggest-plans.scss', 'public/css')
    .sass('resources/sass/plan-details.scss', 'public/css')
    .sass('resources/sass/place-details.scss', 'public/css')
    .sass('resources/sass/my-page.scss', 'public/css')
    .sass('resources/sass/social-login.scss', 'public/css')
    .ts('resources/ts/plan-details.ts', 'public/js')
    .sourceMaps();
mix.version();
