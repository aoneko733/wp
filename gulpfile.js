var gulp = require('gulp');
var browserSync = require('browser-sync');
var sass = require('gulp-sass');

gulp.task("sass", function() {
  return gulp.src('./src/scss/*.scss')
    .pipe(sass({
      outputStyle:'expanded'
    }))
    .pipe(gulp.dest('./wordpress/wp-content/themes/wp-test-2018/css'));
});

gulp.task("default", ['sass']);
