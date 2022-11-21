const mix = require('laravel-mix');

const VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin');

var webpackConfig = {
    plugins: [
        new VuetifyLoaderPlugin()
    ]
}

mix.webpackConfig(webpackConfig);

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
    .sass('resources/sass/app.scss', 'public/css');


/*
 |--------------------------------------------------------------------------
 | B A S E   C S S   ( T E M P L A T E )
 |--------------------------------------------------------------------------
 |
 |
 */
mix.styles([
    'resources/template/assets/css/vendor.min.css',
    'resources/template/assets/css/style.css',
], 'public/css/base.css');

/*
|--------------------------------------------------------------------------
| B A S E   J S   ( T E M P L A T E )
|--------------------------------------------------------------------------
|
|
*/
mix.scripts([
    'resources/template/assets/js/vendor/jquery-3.6.0.min.js',
    'resources/template/assets/js/vendor.min.js',
    'resources/template/assets/js/functions.js',
], 'public/js/base.js');

/*
|--------------------------------------------------------------------------
| S I M P A N   P I N J A M   J S   ( A D D I T I O N A L )
|--------------------------------------------------------------------------
|
|
*/
mix.scripts([
    'resources/template/assets/js/vendor/datatables-1.12.1.min.js',
    'resources/template/assets/js/vendor/jquery.mask-1.14.16.js',
    'resources/template/assets/js/vendor/sweetalert.2.1.2.min.js',
], 'public/js/simpan-pinjam.js');
