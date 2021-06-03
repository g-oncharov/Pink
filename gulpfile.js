let
  gulp                                      = require("gulp"),
  livereload                                = require("gulp-livereload"),
  sass                                      = require("gulp-sass"),
  plumber                                   = require("gulp-plumber"),
  autoprefixer                              = require("gulp-autoprefixer"),
  cleancss                                  = require("gulp-clean-css"),
  rename                                    = require("gulp-rename"),
  concat                                    = require('gulp-concat'),
  uglify                                    = require('gulp-uglify'),
  babel                                     = require("gulp-babel"),
  cssbeautify                               = require("gulp-cssbeautify");

gulp.task("css", async function() {
  gulp.src('./src/scss/*__style.scss')
  .pipe(plumber())
  .pipe(sass().on("error", sass.logError))
  .pipe(cssbeautify({
    indent: '  '
  }))
  .pipe(autoprefixer({
    cascade: false
  }))
  .pipe(gulp.dest("./src/css/"))
  // .pipe(cleancss({compatibility: "ie8"}))
  // .pipe(rename({suffix:".min"}))
  // .pipe(gulp.dest("./src/css/min/"))
  .pipe(livereload());
});

gulp.task("watch", async function() {
  livereload.listen();
  gulp.watch('src/scss/*.scss', gulp.series('css'));
});

gulp.task('default', gulp.series('css', 'watch'))
