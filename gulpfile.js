var gulp = require('gulp'),
browserSync = require('browser-sync'),
autoprefixer = require('gulp-autoprefixer'),
sass = require('gulp-sass');

gulp.task("sass", function() {
  return gulp.src('./src/scss/*.scss')
    .pipe(sass({
      outputStyle:'expanded'
    }))
    .pipe(autoprefixer({
      browsers: ['last 2 version', 'iOS >= 8.1', 'Android >= 4.4'],
      cascade: false
    }))
    .pipe(gulp.dest('./wordpress/wp-content/themes/aonekocafe/'));
});

gulp.task("default", ['sass']);
gulp.task('watch', function(){
  gulp.watch('./src/scss/*.scss', ['sass']);
});
