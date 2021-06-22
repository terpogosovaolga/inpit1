var glp = require('gulp');
var rename = require('gulp-rename');
var sass = require('gulp-sass');

function cssStyles(done) {

  //pipe синхронно добавляет команду
  glp.src('./scss/style.scss')
    .pipe( sass({
      errorLogToConsole: true,
      outputStyle: 'compressed'
    }) )
    .on('error', console.error.bind(console))
    .pipe( rename({suffix: '.min'}) )
    .pipe( glp.dest('./css/') );
  done();
}

function defaultTask(done) {
  console.log("All is working!");
  done();
}

function printHello(done) {
  console.log("Hello");
  done();
}

exports.default = defaultTask;
exports.printHello = printHello;
exports.cssStyles = cssStyles;
