'use strict';

var path = require('path');

var lintTask = function (gulp, plugins, config) {
  gulp.task('validate-html', function() {
    return gulp.src(config.dest.base + '/**/*.html')
      .pipe(plugins.htmlhint('.htmlhintrc'))
      .pipe(plugins.htmlhint.reporter())
  });
};

module.exports = lintTask;
