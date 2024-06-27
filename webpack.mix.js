const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/js/app.js', 'public/js', [
        //
    ]);

mix.browserSync({
    proxy: 'localhost:8000'
});