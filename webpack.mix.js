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

mix.webpackConfig({
    stats: {
        children: true
    }
});

mix.js('resources/js/app.js', 'public/js/app.js');
mix.js('resources/js/templates/homepage.js', 'public/js/templates/homepage.js');
mix.js('resources/js/templates/projects.js', 'public/js/templates/projects.js');
mix.js('resources/js/templates/board.js', 'public/js/templates/board.js');
mix.js('resources/js/components/project-cards.js', 'public/js/components/project-cards.js')
mix.js('resources/js/components/loader.js', 'public/js/components/loader.js')
mix.js('resources/js/components/burger-menu.js', 'public/js/components/burger-menu.js')

mix.sass('resources/sass/app.scss', 'public/css');

