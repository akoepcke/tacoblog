let mix = require('laravel-mix');
var tailwindcss = require('tailwindcss');
var fontawesome = require('@fortawesome/fontawesome-free');
let build = require('./tasks/build.js');
require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss']),
    ]
});

mix.js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css/main.css')
    .sass('node_modules/@fortawesome/fontawesome-free/scss/fontawesome.scss', 'css/fa.css')
    .copy('node_modules/@fortawesome/fontawesome-free/webfonts/', 'source/assets/webfonts')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.js')],
    })
    .purgeCss({
        folders: ['source'],
    })
    .version();