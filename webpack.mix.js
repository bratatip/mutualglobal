const mix = require('laravel-mix')

mix
  .copyDirectory('resources/assets', 'public/assets')
  .copy('resources/images', 'public/images')
  .copy('resources/files', 'public/files')
  .js("resources/js/app.js", "public/js")
  .postCss("resources/css/app.css", "public/css", [
    require("tailwindcss"),
  ]);


if (mix.inProduction) {
  mix.version();
}