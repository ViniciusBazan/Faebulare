/*

***********************************************************************************************************
Código na Versão 3 (depreciate)
***********************************************************************************************************

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function(){
    return gulp.src(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'])
    .pipe(sass()) // converter o sass em CSS
    .pipe(gulp.dest('src/css'));
});

gulp.task('watch', function() {
    gulp.watch(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'], ['sass']);
});

gulp.task('default', ['sass', 'watch']);

*/

// Abaixo com a versão Gulp 4


var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', gulp.series( function() {
    return gulp.src(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'])
    .pipe(sass()) // converter o Sass em CSS
    .pipe(gulp.dest('src/css'));
}));

gulp.task('watch', gulp.series( function() {
    gulp.watch(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'], gulp.parallel( ['sass'] ));
}));

gulp.task('default', gulp.series( ['sass', 'watch'] ));

// gulp.series()  -> função que deve ser executada
// gulp.parallel()-> função a ser executada em paralelo