let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');
let atImport = require('postcss-import');
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
mix.postCss('resources/themes/tailwind/assets/css/app.css', 'public/themes/tailwind/assets/css/app.css',[
   atImport(),
   tailwindcss('./tailwind.config.js'),
 ]);

if (mix.inProduction()) {
   mix.version();
}
