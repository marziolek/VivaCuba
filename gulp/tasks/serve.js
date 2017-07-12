'use strict';

var path = require('path');

var serveTask = function (gulp, plugins, config, helpers, generator_config) {
  
  var startTasks = ['styles-watch', 'assets-watch'];
  
  gulp.task('serve', startTasks, function() {
    
    var name = generator_config.nameSlug;
    var browserSyncConfig = {
      proxy: {
        target: generator_config.proxyTarget || name+'.dev',
        reqHeaders: {
          'x-chisel-proxy': '1'
        }
      },
      ghostMode: false,
      online: true
    }
    
    plugins.browserSync.init(browserSyncConfig);

    gulp.watch(path.join(config.src.base, config.src.styles), ['styles-watch']);
    
    gulp.watch(path.join(config.src.base, config.src.assets), ['assets-watch']);
    
    gulp.watch('**/*.{php,twig}').on('change', plugins.browserSync.reload);
    
  });
};

module.exports = serveTask;
