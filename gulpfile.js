var elixir = require('laravel-elixir');

require('laravel-materialize');
require('laravel-elixir-vue-2');
require('laravel-elixir-webpack-official');

elixir(function(mix) {
  mix.sass('home.sass')
     .materialize()
     .webpack('app.js');
});
