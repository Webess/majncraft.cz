const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .extract(["vue"])
    .js("resources/js/admin.js", "public/js")
    //sass
    .sass("resources/sass/app.scss", "public/css")
    //files
    .copyDirectory("resources/images", "public/images")
    //settings
    .version()
    .browserSync("majnnew.test");
