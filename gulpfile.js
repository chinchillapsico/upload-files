var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var minifyCSS = require('gulp-minify-css');
var watch = require('gulp-watch');


gulp.task('style',function(){
	gulp.src(['main.scss'])
	.pipe(sass().on('error',sass.logError))
	.pipe(minifyCSS())
	.pipe(concat('main.min.css'))
	.pipe(gulp.dest('archivo_min/'));
});

gulp.task('watch', function() {
	gulp.watch('main.scss', ['style']);
});

gulp.task('default',['style','watch']);