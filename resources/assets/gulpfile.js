var gulp = require('gulp'),
    webpack = require('webpack-stream'),
    babel = require('gulp-babel'),
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

gulp.task('babel', function() {
  return gulp.src('./js/*.js')
  .pipe(babel({
      presets: ['es2015']
  }))
  .pipe(gulp.dest('../../public/js'));
});

// JS task.
/*gulp.task('js', function() {
  return gulp.src('./js/*.js')
  .pipe(webpack())
  .pipe(concat('app.js'))
  .pipe(uglify())
  .pipe(gulp.dest('../../public/js'));
});*/

// Watch task.
gulp.task('watch', function() {
  gulp.watch('./sass/**/*', ['sass']);
  gulp.watch('./js/*.js', ['babel']);
});

// Default task.
gulp.task('default', ['watch', 'sass', 'babel']);