const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

/*
 mix.js(出力元、出力先（出力名は元のが引き継がれる）

 app.jsにまとめたい場合、resources/js/app.jsにて import "hoge.js"を記載
*/

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/dropify.js', 'public/js')
    .js('resources/js/dropify.min.js', 'public/js')
    .styles([
        'resources/css/mywv.css',
        'resources/css/mywv_phone.css'
    ], 'public/css/all.css')
    .autoload({
        "jquery": ['$', 'window.jQuery']
      })
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
