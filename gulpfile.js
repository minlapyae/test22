const gulp = require("gulp");
const postcss = require("gulp-postcss");
const sass = require("gulp-sass")(require("sass"));
const cssnano = require("cssnano");
const rename = require("gulp-rename");

function style() {
  let plugins = [cssnano()];

  return (
    gulp
      .src("./assets/scss/*.scss")
      .pipe(sass())
      .pipe(postcss(plugins))
      // .pipe(rename("style.css"))
      .pipe(gulp.dest("./css"))
  );
}

const devWatch = () => {
  gulp.watch("./assets/scss/*.scss", style);
};

exports.style = style;
exports.devWatch = devWatch;
