var gulp = require('gulp');
var less = require('gulp-less');

var sourcemaps = require('gulp-sourcemaps');

var path = require('path');

var paths = {
  styles: {
    src: 'src/styles/**/*.less',
    dest: './'
  },
  scripts: {
    src: 'src/scripts/**/*.js',
    dest: 'assets/scripts/'
  }
};

gulp.task('less', function () {
  return gulp.src('./assets/less/style.less')
    .pipe(sourcemaps.init())
    .pipe(less())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./'));
});