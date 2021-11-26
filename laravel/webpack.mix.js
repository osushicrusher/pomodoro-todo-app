const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css').js('node_modules/popper.js/dist/popper.js', 'public/js').sourceMaps()
    .purgeCss()
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    });

// mix.sourceMaps().js('node_modules/popper.js/dist/popper.js', 'public/js').sourceMaps();
