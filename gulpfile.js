// Define dependencies
var gulp = require('gulp'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	elixir = require('laravel-elixir'),
	css = 'public/css',
	js = 'public/js';




gulp.task('components', function() {
	gulp.src('node_modules/jquery/dist/jquery.min.js')
		.pipe(gulp.dest(js));
});

gulp.task('styles', function() {
	gulp.src('resources/assets/sass/app.scss')
		.pipe(sass()).on('error', function(error) {console.log('ERROR ' + error.message + '\n\n');})
		.pipe(autoprefixer({browsers: ['last 2 versions']}))
		.pipe(gulp.dest('public/css'));
});

gulp.task('scripts', ['styles'], function() {
	gulp.src(['resources/assets/js/script.js'])
		.pipe(gulp.dest('public/js'));
});

elixir(function(mix) {
	
	mix.task('components');
	mix.task('styles', 'resources/assets/sass/*.scss');
	mix.task('scripts', 'resources/assets/js/*.js');
	mix.browserSync({
		files: ['resources']
	});
});