const { series, watch, parallel } = require('gulp')
const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');

//Converting Scss into css and minifying it
async function Scss(){
    return gulp.src('./Style/Scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer('last 2 versions'))
    .pipe(gulp.dest('./Style/Css'))
}


//Gulp automatically run when certain things are saved
function WatchTask(){
    gulp.watch('./Style/Scss/**/*.scss',
    series(Scss))
}

exports.default = series(
    parallel(Scss),
    WatchTask
)