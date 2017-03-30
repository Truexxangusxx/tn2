'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var refresh = require('gulp-refresh');

gulp.task('sass', function () {
    return gulp.src('resources/assets/sass/*.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(gulp.dest('public/css'));
});

gulp.task('sass:watch', function () {
    refresh.listen();
    gulp.watch('resources/assets/sass/*.scss', ['sass']);
});