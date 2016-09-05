var gulp = require('gulp');

var minify = require('gulp-minify');
var cssmin = require('gulp-cssmin');
var concat = require('gulp-concat');

//unit of common js files
gulp.task('min-js', function() {
  gulp.src('resources/assets/js/common/*.js')
      .pipe(concat('common.js'))
      .pipe(minify({
            noSource:'*.js'
      }))
      .pipe(gulp.dest('public/assets/js'))
});

//unit of common css files
gulp.task('min-css', function () {
    gulp.src('resources/assets/css/common/*.css')
        .pipe(concat('common.min.css'))
        .pipe(cssmin())
        .pipe(gulp.dest('public/assets/css'));
});

gulp.task('default', ['min-css', 'min-js']);


