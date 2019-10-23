const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
  plugins: [
    build.jigsaw,
    build.browserSync(),
    build.watch([
      'source/**/*.md',
      'source/**/*.php',
      'source/**/*.scss',
      'source/**/*.html',
      '!source/**/_tmp/*',
    ]),
  ],
});

mix
  .js('source/_assets/js/main.js', 'js')
  .sass('source/_assets/sass/main.scss', 'css')
  .options({
    processCssUrls: false,
    postCss: [tailwindcss('./tailwind.config.js')],
  })
  .version();
