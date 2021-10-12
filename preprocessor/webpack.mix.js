const mix  = require('laravel-mix');
mix.setPublicPath('../resources/views/admin');

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

mix.js('js/client.js', 'v_1/js/client.js')
	.js('js/authorized_client.js', 'v_1/js/authorized_client.js')
	.js('js/personal_access_token.js', 'v_1/js/personal_access_token.js');