'use strict';

var buildTask = function (gulp, plugins, config) {

  gulp.task('clean', function() {
    return plugins.del([config.dest.base]);
  });


  gulp.task('build', plugins.sequence('styles-build', 'scripts-build'))

};

module.exports = buildTask;
