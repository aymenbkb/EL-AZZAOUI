import './bootstrap';
const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/assets/js')
   .css('resources/css/app.css', 'public/assets/css');
