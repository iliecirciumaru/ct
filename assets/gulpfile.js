var gulp = require('gulp');
var minify = require('gulp-minify-css');
var concat = require('gulp-concat');

gulp.task('default', function() {
  var files = ['owl.carousel', 'owl.theme', 'main', 'theme', 'custom', 'cities'];
  files = files.map(function(file) {
    return './css/' + file + '.css';
  });

  
  gulp.src(files)
      .pipe(minify())
      .pipe(concat('bundle.css'))
      .pipe(gulp.dest('./css/'));
  
  console.log(files, " are assembled in css/bundles.css");
});
