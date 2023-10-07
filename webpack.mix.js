const mix = require('laravel-mix')

mix
  .copy(
    'resources/images',
    'public/images',
  )
  .js("resources/js/app.js", "public/js")
  .postCss("resources/css/app.css", "public/css", [
    require("tailwindcss"),
  ]);


if (mix.inProduction) {
  mix.version();
}