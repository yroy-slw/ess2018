var gulp = require('gulp'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    cleanCss = require('gulp-clean-css'),
    autoprefixer = require('gulp-autoprefixer'),
    jshint = require('gulp-jshint'),
    watch = require('gulp-watch'),
    gutil = require( 'gulp-util' ),
    ftp = require( 'vinyl-ftp' ),
    themeName = "es";

var sass_paths = [
  themeName + '/css/src/reset.sass',
  themeName + '/css/src/variables.sass',
  themeName + '/css/src/fonts.sass',
  themeName + '/css/src/general.sass',
  themeName + '/css/src/mediaqueries.sass',
  themeName + '/css/src/global.sass'
];

gulp.task('sass', function () {
  gulp.src(sass_paths)
    	.pipe(sass())
      .pipe(autoprefixer({
        browsers: ['last 6 versions'],
        cascade: false
      }))
      .pipe(concat('global.css'))
      .pipe(cleanCss({
        aggressiveMerging: false
      }))
    	.pipe(gulp.dest(themeName + '/css'));
});

gulp.task('js', function () {
	gulp.src(themeName + '/js/src/*.js')
		.pipe(jshint())
		.pipe(concat('global.js'))
		.pipe(gulp.dest(themeName + '/js'));
});

var user = ''; 
var password = '';
var host = '';  
var port = 21;  
var localFilesGlob = [themeName + '/**/*'];
var remoteFolder = '/wp-content/themes/'
function getFtpConnection() {  
    return ftp.create({
        host: host,
        port: port,
        user: user,
        password: password,
        parallel: 10,
        log: gutil.log
    });
}

gulp.task('ftp-deploy', function() {
    var conn = getFtpConnection();
    return gulp.src(localFilesGlob, { base: '.', buffer: false })
        .pipe( conn.newer( remoteFolder ) ) // only upload newer files 
        .pipe( conn.dest( remoteFolder ) )
    ;
});

gulp.task('ftp-deploy-watch', function() {
    var conn = getFtpConnection();
    gulp.watch(localFilesGlob)
    .on('change', function(event) {
      console.log('Changes detected! Uploading file "' + event.path + '", ' + event.type);
      return gulp.src( [event.path], { base: '.', buffer: false } )
        .pipe( conn.newer( remoteFolder ) ) // only upload newer files 
        .pipe( conn.dest( remoteFolder ) )
      ;
    });
});

gulp.task('default', ['sass', 'js'],function(){
    gulp.watch(sass_paths, ['sass']);
    gulp.watch(themeName + '/js/src/*.js', ['js']);
});