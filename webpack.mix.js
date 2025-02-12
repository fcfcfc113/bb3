const mix = require('laravel-mix');

// Biên dịch SASS/SCSS thành CSS
mix.sass('resources/sass/app.scss', 'public/css');

// Biên dịch JavaScript
mix.js('resources/js/app.js', 'public/js');

// Copy font vào thư mục public
mix.copyDirectory('resources/fonts', 'public/fonts');

// Copy ảnh vào thư mục public
mix.copyDirectory('resources/images', 'public/images');

mix.version();
