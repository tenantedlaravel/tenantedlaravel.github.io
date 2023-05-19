const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.js('source/_assets/js/main.js', 'js')
   .sass('source/_assets/sass/main.scss', 'css/main.css')
   .jigsaw({
       watch: [
           'config.php',
           'source/**/*.md',
           'source/**/*.php',
           'source/**/*.svg',
           'source/**/*.scss',
       ],
   })
   .options({
       processCssUrls: false,
       postCss: [
           require('tailwindcss'),
       ],
   })
   .browserSync({
       server: 'build_local',
       files: ['build_local/**'],
   })
   .sourceMaps()
   .version();
