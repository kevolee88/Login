process.title = 'chug';

var gulp = require('gulp');

//require plugins
var jshint = require('gulp-jshint'),
    less = require('gulp-less'),
    minifyCSS = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    pump = require('pump'),
    notify = require('gulp-notify'),
    plumber = require('gulp-plumber'),
    livereload = require('gulp-livereload'),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require('gulp-rename'),
    importJS = require('gulp-importjs');

//paths
var srcDir  = '/source/',
    destDir = '/assets/',
    importJsDir = destDir;

function errorLog(error) {
  console.error.bind(error);
  this.emit('end');
}

gulp.task('less', function() {
  gulp.src('source/*.less')
      .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
      .pipe(less())
      .pipe(minifyCSS({keepSpecialComments: 1}))
      .pipe(gulp.dest('assets/css'))
      .pipe(notify("<%= file.relative %> reloaded"))
      .pipe(livereload());
});

gulp.task('minify-js', function (cb) {
  pump([
        gulp.src('source/*.jsrc'),
        plumber({errorHandler: notify.onError("Error: <%= error.message %>")}),
        rename({extname: '.js'}),
        jshint(),
        jshint.reporter('default'),
        uglify({
          comments: true
        }),
        notify("<%= file.relative %> reloaded"),
        gulp.dest('assets/js/')
    ],
    cb
  )
  .pipe(livereload());
});

gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('source/*.jsrc', ['minify-js']);
  gulp.watch('source/*.less', ['less']);
  gulp.watch('source/*.php', livereload());
});

gulp.task('default', ['watch']);
