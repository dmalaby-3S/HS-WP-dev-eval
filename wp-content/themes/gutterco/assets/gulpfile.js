const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');

gulp.task('styles', function() {
    return gulp.src('./scss/style.scss')
        .pipe(sass().on('error', sass.logError)) // Compile SCSS to CSS
        .pipe(autoprefixer()) // Add vendor prefixes
        .pipe(cleanCSS()) // Minify CSS
        .pipe(rename({ suffix: '.min' })) // Rename to style.min.css
        .pipe(gulp.dest('./css/')); // Output to the theme root
});

// Watch task
gulp.task('watch', function() {
    gulp.watch('./scss/**/*.scss', gulp.series('styles')); // Watch for changes
});

// Default task
gulp.task('default', gulp.series('styles', 'watch'));