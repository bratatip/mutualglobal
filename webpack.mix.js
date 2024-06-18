const mix = require("laravel-mix");

mix.copyDirectory("resources/assets", "public/assets")
    .copy("resources/images", "public/images")
    .js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .sass('resources/sass/data_table.scss', 'public/css/data_table.css')
    .sass('resources/sass/dt.scss', 'public/css/dt.css')
    .sass("resources/sass/style.scss", "public/css/style.css")
    .scripts(["node_modules/jquery/dist/jquery.min.js"], "public/js/jquery.js")
    .postCss("resources/css/app.css", "public/css", [require("tailwindcss")]);

mix.copy("node_modules/toastr/build/toastr.min.js", "public/js")
    .copy("node_modules/toastr/build/toastr.min.css", "public/css")
    .copy(
        "node_modules/datatables.net-dt/css/dataTables.dataTables.css",
        "public/css/vendor/datatables/"
    )
    .copy(
        "node_modules/datatables.net/js/dataTables.min.js",
        "public/js/vendor/datatables/"
    );

// Custome files
mix.copy("node_modules/scrollreveal/dist/scrollreveal.min.js", "public/js");

mix.copy(
    "node_modules/select2/dist/js/select2.min.js",
    "public/js/vendor/select2/"
).copy(
    "node_modules/select2/dist/css/select2.min.css",
    "public/css/vendor/select2/"
);

mix.css("resources/css/atom-spinner.css", "public/css/atom-spinner.css")
    .sass("resources/sass/select2.scss", "public/css/select2.css")
    .copy(
        "resources/files/import_uhid_sample.csv",
        "public/files/csv/import_uhid_sample.csv"
    )
    .copy(
        "resources/files/delete_uhid_sample.csv",
        "public/files/csv/delete_uhid_sample.csv"
    );

if (mix.inProduction) {
    mix.version();
}
