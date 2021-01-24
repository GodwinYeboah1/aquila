var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
sass.compiler = require('node-sass');
 
gulp.task('sass', function () {
  return gulp.src('./assets/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./assets/dist/css'))
    .pipe(browserSync.stream());
});
 
gulp.task('watch', function () {
  browserSync.init({
    server: {
        baseDir: './'
    }
  });
  gulp.watch('./**/*.php').on('change', browserSync.reload)
  gulp.watch('./assets/sass/**/*.scss', gulp.series(['sass']));
});