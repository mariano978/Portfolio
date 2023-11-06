import gulp from "gulp";
const { src, dest, watch, parallel } = gulp;

// CSS
import postcss from "gulp-postcss";
import autoprefixer from "autoprefixer";
import cssnano from "cssnano";
import sourcemaps from "gulp-sourcemaps";
import concat from "gulp-concat";
import gulpSass from 'gulp-sass';
import dartSass from 'sass';

const sass = gulpSass(dartSass);

// Imagenes
// import cache from "gulp-cache";
// import imagemin from "gulp-imagemin";
// import webp from "gulp-webp";
// import avif from "gulp-avif";

//WebPack
import webpack from "webpack-stream";
import webpackConfig from "./webpack.config.js";

const paths = {
  sass: "src/sass/**/*.sass",
  js: "src/js/*.js",
  // imagenes: "src/img/**/*",
};

function compileSass() {
  return src(paths.sass)
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(concat("style.css"))
    .pipe(sourcemaps.write("."))
    .pipe(dest("../"));
}

function compileJavascript() {
  return src(paths.js)
    .pipe(webpack(webpackConfig))
    .pipe(dest("../js"));
}

// function imagenes() {
//   return src(paths.imagenes)
//     .pipe(cache(imagemin({ optimizationLevel: 3 })))
//     .pipe(dest("public/img"));
// }

// function versionWebp(done) {
//   const opciones = {
//     quality: 50,
//   };
//   src("src/img/**/*.{png,jpg}").pipe(webp(opciones)).pipe(dest("public/img"));
//   done();
// }

// function versionAvif(done) {
//   const opciones = {
//     quality: 50,
//   };
//   src("src/img/**/*.{png,jpg}").pipe(avif(opciones)).pipe(dest("public/img"));
//   done();
// }

function watchs(done) {
  watch(paths.sass, compileSass);
  watch(paths.js, compileJavascript);
  //   watch(paths.imagenes, imagenes);
  //   watch(paths.imagenes, versionWebp);
  // watch(paths.imagenes, versionAvif);
  done();
}

const dev = parallel(compileSass, compileJavascript, watchs);

export { compileSass, compileJavascript, dev };
