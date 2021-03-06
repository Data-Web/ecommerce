var Elixir = require('laravel-elixir');
var path = require('path');
var elixirTypscript = require('elixir-typescript');

Elixir.extend('bower', function (config, plugins) {
  var self = this;
  var tasks = plugins.map(function (plugin) {
    self.mixins.copy(path.join(config.in, plugin.in), path.join(config.out, plugin.out))
  });
});

Elixir.extend('vue', function (config, plugins) {
  var self = this;
  var tasks = plugins.map(function (plugin) {
    self.mixins.browserify(
      path.join(config.in, plugin.in),
      path.join(config.out, plugin.out)
    )
  });
});

// Elixir.extend('angular', function (config, plugins) {
//   var self = this;
//   var tasks = plugins.map(function (plugin) {
//     self.mixins.typescript(
//       path.join(config.in, plugin.in),
//       path.join(config.out, plugin.out)
//     )
//   });
// });