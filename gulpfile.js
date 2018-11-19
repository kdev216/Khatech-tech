// gulp-rename: Để viết lại tên của file dest.
// gulp-cssnano: Để minify css.
// gulp-livereload: Để auto reload web.
// gulp-concat: Để nối nội dung các file.
// gulp-sass: Để biên dịch sass-scss sang css.
// gulp-uglify: Minify javascript với UglifyJS2.

var gulp = require('gulp');
var sass = require('gulp-sass');
var livereload = require('gulp-livereload');

gulp.task('style', function(){
	gulp.src('style.scss') // file nguồn của
	.pipe(sass())
	.pipe(gulp.dest(''))// file đích
});
gulp.task('watch', function(){
	livereload.listen();
	gulp.watch(['style']);
})
gulp.task('start',['style', 'watch']);
// // Include gulp
// var gulp = require('gulp');

// // Include Our Plugins
// var sass = require('gulp-sass');
// var concat = require('gulp-concat');
// var rename = require('gulp-rename');
// var livereload = require('gulp-livereload');
// var minifyCss = require('gulp-cssnano');

// // Compile Our Sass
// gulp.task('sass', function () {
//     return gulp.src('assets/sass/style.scss')
//         .pipe(sass())
//         .pipe(minifyCss())
//         .pipe(rename('style.min.css'))
//         .pipe(gulp.dest('assets/css'))
//         .pipe(livereload());
// });

// // Watch Files For Changes
// gulp.task('watch', function () {
//     livereload.listen();
//     gulp.watch(['assets/sass/**/*'], ['sass']);
// });

// // Default Task
// gulp.task('default', ['sass', 'watch']);