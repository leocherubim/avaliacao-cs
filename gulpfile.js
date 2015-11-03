var elixir = require('laravel-elixir');

/*
 * Configuracao de caminhos dos arquivos
 */
var config = {
	assets_path:'./resources/assets',
	build_path:'./public/build'
};

/*
 * Configuracao de caminhos dos arquivos dentro
 * da pasta bower_components
 *
config.bower_path = config.assets_path + '/../bower_components';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
});
