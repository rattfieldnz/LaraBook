//Importing necessary modules
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

//Create a task which compiles sass to standard css
gulp.task('css', function(){
	return gulp.src('app/assets/sass/main.scss')
		.pipe(sass())
		.pipe(autoprefixer({browsers:['last 10 versions']}))
		.pipe(gulp.dest('public/css'));
});

//Create a task which monitors changes made to sass files,
//in the specified directory
gulp.task('watch', function(){
	gulp.watch('app/assets/sass/*.scss', ['css']);
});

//Set-up the default task
gulp.task('default', ['watch']);
