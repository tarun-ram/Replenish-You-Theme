var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');
var concat = require('gulp-concat');

// COMPILE SASS
gulp.task('sass', function() {
    return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss',  'src/scss/**/*.scss'])
        .pipe(sass({
          'outputStyle' : 'compressed'
          }))
        .pipe(gulp.dest("./"))
        .pipe(browserSync.stream());
});

// COMPILE JS
gulp.task('js', function() {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js'])
        .pipe(gulp.dest("src/js"))
        .pipe(browserSync.stream());
});

// RELOAD BROWSER
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        proxy: "http://localhost/"
    });

    gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/**/*.scss'], ['sass']);
    gulp.watch("./*.php").on('change', browserSync.reload);
});

gulp.task('default', ['js','serve']);