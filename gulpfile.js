const autoprefixer = require("autoprefixer");
const browsersync = require("browser-sync").create();
const cp = require("child_process");
const cssnano = require("cssnano");
const del = require("del");
const gulp = require("gulp");
const imagemin = require("gulp-imagemin");
const newer = require("gulp-newer");
const plumber = require("gulp-plumber");
const postcss = require("gulp-postcss");
const rename = require("gulp-rename");
const sass = require("gulp-sass");

// BrowserSync
function browserSync(done) {
  browsersync.init({
    server: {
      baseDir: "./_site/"
    },
    port: 3000
  });
  done();
}

// BrowserSync Reload
function browserSyncReload(done) {
  browsersync.reload();
  done();
}

// Clean assets
function clean() {
  return del(["./_site/assets/"]);
}

// Optimize Images
function images() {
  return gulp
    .src("./assets/images/**/*")
    .pipe(
      imagemin([
        imagemin.gifsicle({ interlaced: true }),
        imagemin.mozjpeg({quality: 75, progressive: true}),
        imagemin.optipng({ optimizationLevel: 5 }),
      ])
    )
    .pipe(gulp.dest("./_site/assets/images"));
}

// CSS task
function css() {
  return gulp
    .src("./assets/scss/**/*.scss")
    .pipe(plumber())
    .pipe(sass({ outputStyle: "compact" }))
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(gulp.dest("./assets/css/"))
    .pipe(browsersync.reload({ stream: true }));
}

// Transpile, concatenate and minify scripts
function scripts() {
  return (
    gulp
      .src(["./assets/js/*"])
      .pipe(plumber())
      // folder only, filename is specified in webpack config
      .pipe(gulp.dest("./_site/assets/js/"))
      .pipe(browsersync.stream())
  );
}

// Jekyll
function jekyll() {
  return cp.spawn("bundle", ["exec", "jekyll", "build"], { stdio: "inherit" });
}

// Watch files
function watchFiles() {
  gulp.watch("./assets/scss/**/*", css);
  gulp.watch("./assets/js/**/*", scripts);
  gulp.watch(
    [
      "./*.html",
      "./business-*/*.html",
      "./privacy-policy/*.html",
      "./_includes/*",
      "./_layouts/*",
      "./_pages/**/*",
      "./_posts/**/*",
      "./_projects/**/*"
    ],
    gulp.series(jekyll, browserSyncReload)
  );
  gulp.watch("./assets/images/**/*", images);
}

// define complex tasks
const js = gulp.series(scripts);
const build = gulp.series(clean, gulp.parallel(css, jekyll, js));
const watch = gulp.parallel(browserSync, watchFiles);

// export tasks
exports.images = images;
exports.css = css;
exports.js = js;
exports.jekyll = jekyll;
exports.clean = clean;
exports.build = build;
exports.watch = watch;
exports.default = build;
