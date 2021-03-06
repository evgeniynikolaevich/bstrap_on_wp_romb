const gulp = require('gulp');
 const concat = require('gulp-concat');
 const autoprefixer = require('gulp-autoprefixer');
 let clean_css = require('gulp-clean-css');
 let uglify = require('gulp-uglify');
 let del = require('del');
 var sourcemaps = require('gulp-sourcemaps');
 const browserSync = require('browser-sync').create();
 var gulpif = require('gulp-if');
 const terser = require('gulp-terser');
 const imagemin = require('gulp-imagemin');
 let  fontmin = require('gulp-fontmin');
 const less = require('gulp-less');
 const smart_grid = require('smart-grid');
 const path = require('path');







 let is_dev = true;
 let isProd = !is_dev;


const jsFiles = [
  './assets/src/js/main.js'

];


function watch(done){
  let files = [
    './assets/src/css/*',
    './assets/src/js/*',
    './assets/src/img/*',
    './*.php'
  ];
  // browserSync.init(files,{
//  injectChanges: false,

//   proxy:'http://localhost/wordpress/',

// });

  gulp.watch('./assets/src/css/**/*.less',gulp.series(styles,reload));
 gulp.watch('./assets/src/js/**/*.js',gulp.series(script,reload));
 gulp.watch('./assets/src/img/*',img);
  // gulp.watch('./*', reload);
  // browserSync.watch('./*').on('change', browserSync.reload);

  }

function img(){
  return gulp.src('./assets/src/img/*')
        // .pipe(imagemin())
        .pipe(gulp.dest('./assets/build/img'))
}
 function styles(done){
   return gulp.src('./assets/src/css/styles.less')
                .pipe(gulpif(is_dev,sourcemaps.init()))
                .pipe(less())

                .pipe(autoprefixer({
                     Browserslist :['> 0.01%'],
                     cascade: false

                 }))
                 .pipe(clean_css({compatibility: 'ie8',
                                  level:2}))
                .pipe(gulpif(is_dev,sourcemaps.write('../maps')))
                 .pipe(gulp.dest('./assets/build/css'))

                   .pipe(browserSync.stream())
  }
 function script(done){
   return gulp.src(jsFiles)

                .pipe(concat('script.js'))
                // .pipe(uglify({toplevel:true}))
                .pipe(terser())
                .pipe(gulp.dest('./assets/build/js'))
                 .pipe(browserSync.stream());
                done();

 }

 function clear(){
   return del(['./assets/build'])
 }


  function reload(done) {
    browserSync.reload();
    console.log('reloaded');
    done();
  }


gulp.task('styles',styles);
gulp.task('script',script);
gulp.task('img',img);
gulp.task('watch',watch);
gulp.task('reload',reload)
gulp.task('watch2',gulp.series('watch'))
gulp.task('build', gulp.series(clear, gulp.parallel(styles, script,img)));
gulp.task('watch2',gulp.series('build','watch'))
gulp.task('default',gulp.series('build','watch'))
