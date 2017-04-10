var gulp = require('gulp');
	gutil = require('gulp-util');
var browserSync = require('browser-sync');
var reload = browserSync.reload;


gulp.task('default', function() {
  return gutil.log('Gulp is running');
});

// watch files for changes and reload
gulp.task('serve', function() {
  browserSync({
    server: {
      baseDir: 'app'
    }
  });

  gulp.watch(['*.html', 'styles/**/*.css', 'scripts/**/*.js'], {cwd: 'app'}, reload);
});