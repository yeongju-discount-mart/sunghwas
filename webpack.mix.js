const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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
   .sass('resources/sass/index.scss', 'public/css')
   .options({
     processCssUrls: false,
     postCss: [ tailwindcss('./tailwind.js') ]
   })
   .sass('resources/sass/app.scss', 'public/css')
   .copyDirectory('resources/assets', 'public/assets')
   .copyDirectory('resources/assets', 'public/images');

Mix.listen('configReady', (webpackConfig) => {
  if (Mix.isUsing('hmr')) {
    // Remove leading '/' from entry keys
    webpackConfig.entry = Object.keys(webpackConfig.entry).reduce((entries, entry) => {
    entries[entry.replace(/^\//, '')] = webpackConfig.entry[entry];
      return entries;
    }, {});
    
    // Remove leading '/' from ExtractTextPlugin instances
    webpackConfig.plugins.forEach((plugin) => {
      if (plugin.constructor.name === 'ExtractTextPlugin') {
        plugin.filename = plugin.filename.replace(/^\//, '');
      }
    });
  }
});