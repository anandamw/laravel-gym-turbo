const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [
        //
    ]
);

if (process.env.npm_lifecycle_event === "hot") {
    mix.browserSync("http://localhost:8000");
}
