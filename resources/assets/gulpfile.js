var gulp = require('gulp'),
    sass = require('gulp-sass'),
    notify = require('gulp-notify'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify-es').default;

// CSS task.
gulp.task('sass', function() {
  return gulp.src('./sass/**/*.scss')
  .pipe(sass().on('error', sass.logError))
  .pipe(gulp.dest('../../public/css'))
  .pipe(notify('Tarea terminada!!'));
});

// JS task.
gulp.task('js', function() {
  return gulp.src('./js/app.js')
  .pipe(concat('app.js'))
  .pipe(uglify())
  .pipe(gulp.dest('../../public/js'));
});

// Watch task.
gulp.task('watch', function() {
  gulp.watch('./sass/**/*', ['sass']);
  gulp.watch('./js/app.js', ['js']);
});

// Default task.
gulp.task('default', ['watch', 'sass', 'js']);