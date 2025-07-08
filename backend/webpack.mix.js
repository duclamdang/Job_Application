const mix = require('laravel-mix');

/*
MIX admin
*/
mix
  .js('resources/js/app.js', 'public/js/admin.min.js')
  .sass('resources/css/app.css', 'public/css/admin.min.css');

/*
MIX user
*/
// mix
//   .js('resources/js/user/app.js', 'public/js/hrnk-user.min.js')
//   .sass('resources/sass/user/app.scss', 'public/css/hrnk-user.min.css');
