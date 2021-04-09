var gulp = require('gulp');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();

function copy(done){
gulp.src('./scss/**/*.scss')
.pipe(sourcemaps.init())
.pipe(sass({
	errorLogToConsole: true,
}))
.on('error', console.error.bind(console))
.pipe(autoprefixer({
	browers: ['last 4 versions'],
	cascade: false
}))
.pipe(rename({suffix:'.min'}))
.pipe(sourcemaps.write('./'))
.pipe(gulp.dest('./css'))
.pipe(browserSync.stream());
done();
}

function sync(done) {
	browserSync.init({
		proxy: "localhost"
	});
	done();
}

function reload(done) {
	browserSync.reload();
	done();
}

function watchAll() {
	gulp.watch("./scss/**/*", copy);
	gulp.watch("./**/*.html", reload);
	gulp.watch("./**/*.js", reload);
	gulp.watch("./**/*.php", reload);
	gulp.watch("./**/*.css", reload);
}

gulp.task('default', gulp.parallel(watchAll, sync));
gulp.task(sync);