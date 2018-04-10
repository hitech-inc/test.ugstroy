var gulp = require('gulp'),
  	sass = require('gulp-sass'),
  	plumber = require('gulp-plumber'),
  	uglify = require('gulp-uglify'),
    livereload = require('gulp-livereload'),
    concat = require('gulp-concat');

// Styles Task
// SASS
gulp.task('sass', function () {
  	gulp.src('resources/assets/sass/**/*.scss')
  	.pipe(plumber())
    .pipe(sass())
    .pipe(gulp.dest('public/css'))
    .pipe(livereload());
});

// Scripts Task
// JS
gulp.task('scripts', function () {
  	gulp.src(['resources/assets/js/*.js','node_modules/dropzone/dist/dropzone.js'])
    .pipe(plumber())
  	.pipe(uglify())
    .pipe(gulp.dest('public/js'));
});

// Watch Task
// Sass + JS
gulp.task('watch', function () {
  var server = livereload();
	gulp.watch('resources/assets/js/*.js', ['scripts']);
	gulp.watch('resources/assets/sass/**/*.scss', ['sass']);
});


// Default Task
gulp.task('default', ['sass','scripts']);