var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    bower = require('gulp-bower'),
    browserify = require('browserify'),
    clean = require('gulp-clean'),
    CombinedStream = require('combined-stream'),
    concat = require('gulp-concat'),
    cssmin = require('gulp-cssmin'),
    jshint = require('gulp-jshint'),
    jshintStylish = require('jshint-stylish'),
    sass = require('gulp-sass'),
    rename = require("gulp-rename"),
    sourcemaps = require('gulp-sourcemaps'),
    uglify = require('gulp-uglify');

// Remove all contents from this directory
gulp.task('clean', function() {
    return gulp.src('./wp-content/themes/jt/css', {read: false})
        .pipe(clean());
});

//Compiles all other sass files
// Compile sass and make a sourcemap too
gulp.task('sass', ['clean'], function () {

    var compile = gulp.src('./wp-content/themes/jt/sass/_compile.scss')
        .pipe(rename({
            basename: "main",
            extname: ".css"
        }))
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./wp-content/themes/jt/css'));

    return (compile);
});

// Lint our Javascript
// If you want to relax a rule add it to the .jshintrc file
// See http://www.jshint.com/docs/options/
gulp.task('lint', function() {
    return gulp.src([
        './wp-content/themes/jt/js/**/*.js',
        '!./wp-content/themes/jt/js/vendor/**' // Were not linting our vendor files (note the ! at the start)
    ])
        .pipe(jshint())
        .pipe(jshint.reporter(jshintStylish));
});

// Watch files for changes and run specific task if they do
gulp.task('watch', function() {

    // Watch all .scss files in the ./public/assets/sass/ folder.
    // Recusivly check /**/ any subfolders for .sass files as well
    gulp.watch('./wp-content/themes/interbrand/sass/**/*.scss', ['sass']);
    gulp.watch('./wp-content/themes/**/*.scss', ['sass']);
    gulp.watch('./wp-content/themes/jt/js/**/*.js', ['lint']);
});

// Specifies what (default) tasks get run when you type 'gulp' into the command line
gulp.task('default', ['sass', 'lint', 'watch']);


// Remove all contents from this directory
gulp.task('bin_clean', function() {
    return gulp.src('./wp-content/themes/jt/_bin', {read: false})
        .pipe(clean());
});

gulp.task('css_bin', ['bin_clean'], function () {
    return gulp.src('./wp-content/themes/jt/sass/_compile.scss')
        .pipe(rename({
            basename: "main",
            extname: ".css"
        }))
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssmin())
        .pipe(sourcemaps.write('./'))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./wp-content/themes/jt/css'));
});

gulp.task('js_bin', ['bin_clean'], function () {
    var combinedStream = CombinedStream.create();

    combinedStream.append(gulp.src([
        './wp-content/themes/jt/js/vendor/jquery.min.js',
        './wp-content/themes/jt/js/vendor/isotope.pkgd.min.js',
        './wp-content/themes/jt/js/vendor/twitter-text-1.9.4.min.js'
    ]));

    combinedStream.append(gulp.src([
        './wp-content/themes/jt/js/jquery.fitvids_bgb.js',
        './wp-content/themes/jt/js/main.js',
        './wp-content/themes/jt/js/filter_list.js'
    ])
        .pipe(uglify()));


    return combinedStream
        .pipe(concat('main.min.js'))
        .pipe(gulp.dest('./wp-content/themes/jt/js'));
});

gulp.task('bin', ['css_bin', 'js_bin']);

//execute "gulp bower" - command builds vendor dependencies
//installs to a vendor folder within ./public/assets/vendor
gulp.task('bower', function() {
    return bower()
        .pipe(gulp.dest('./wp-content/themes/jt/vendor/'))
});

