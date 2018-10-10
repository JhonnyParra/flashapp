var gulp = require('gulp');
var sass = require('gulp-sass');
var notify = require('gulp-notify');

// Css
gulp.task('sass', function() {
  return gulp.src('./sass/**/*.scss')
  .pipe(sass().on('error', sass.logError))
  .pipe(gulp.dest('../../public/css'))
  .pipe(notify('Tarea terminada!!'));
});

gulp.task('watch', function() {
  gulp.watch('./sass/**/*', ['sass']);
});

gulp.task('default', ['watch', 'sass']);