// Gulpfile adapted from: https://github.com/jegtnes/jegtnes-theme with permission under the MIT license

var gulp = require('gulp');
var imagemin = require('gulp-imagemin');
var sass = require('gulp-sass');
var livereload = require('gulp-livereload');
var changed = require('gulp-changed');

var paths = {
  styles: 'scss/**/*.scss',
  images: 'img/**/*'
};

gulp.task('styles', function() {
  return gulp.src(paths.styles)
    .pipe(sass({
      errLogToConsole: true,
      outputStyle: 'expanded'
    }))
    .pipe(gulp.dest('assets/css'));
});

gulp.task('images', function() {
  return gulp.src(paths.images)
    .pipe(imagemin({
      progressive: true,
      interlaced: true,
      optimizationLevel: 9
    }))
    .pipe(gulp.dest('assets/img'));
});

// Rerun the task when a file changes
gulp.task('watch', function() {
  var server = livereload();

  gulp.watch(paths.scripts, ['scripts']);
  gulp.watch(paths.styles, ['styles']);
  gulp.watch(paths.images, ['images']);

  gulp.watch('assets/**').on('change', function(file) {
    server.changed(file.path);
  });
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['styles', 'images']);
