var gulp = require('gulp');
var notify       = require('gulp-notify'); // Sends message notification to you
var browserSync  = require('browser-sync').create(); // Reloads browser and injects CSS. Time-saving synchronised browser testing.
var reload       = browserSync.reload; // For manual browser reload.
// Browsers you care about for autoprefixing.
// Browserlist https://github.com/ai/browserslist
const AUTOPREFIXER_BROWSERS = [
    'last 2 version',
    '> 1%',
    'ie >= 9',
    'ie_mob >= 10',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4',
    'bb >= 10'
  ];








gulp.task('default', function() {
  return gulp.src('src/entry.js')
    .pipe(webpack())
    .pipe(gulp.dest('dist/'));
});

gulp.task('shorthand', shell.task([
  'echo hello',
  'echo world'
]));



 gulp.task( 'browser-sync', function() {
 	browserSync.init( {

 		// For more options
 		// @link http://www.browsersync.io/docs/options/

 		// Project URL.
 		proxy: projectURL,

 		// Stop the browser from automatically opening.
 		open: true,

 		// Inject CSS changes.
 		// Commnet it to reload browser for every CSS change.
 		// injectChanges: true,

 		// Use a specific port (instead of the one auto-detected by Browsersync).
 		// port: 7000,

 	} );
 });
