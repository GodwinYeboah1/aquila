var gulp = require('gulp');
var sass = require('gulp-sass');
 
sass.compiler = require('node-sass');
 
gulp.task('sass', function () {
  return gulp.src('./assets/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./assets/dist/css'));
});
 
gulp.task('watch', function () {
  gulp.watch('./assets/sass/**/*.scss', gulp.series(['sass']));
});