var gulp = require('gulp');
var shell = require('gulp-shell');
var notify       = require('gulp-notify'); // Sends message notification to you
var browserSync  = require('browser-sync').create(); // Reloads browser and injects CSS. Time-saving synchronised browser testing.
var reload       = browserSync.reload; // For manual browser reload.
var projectPHPWatchFiles = './**/*.php'; // Path to all PHP files.
var sassWatchFiles      = './assets/scss/**/*.scss'; // Path to all *.scss files inside css folder and inside them.
var JSWatchFiles   = './assets/js/*.js'; // Path to all vendors JS files.
var projectURL           = 'localhost'; // Project URL. Could be something like localhost:8888.

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

gulp.task('webpack', shell.task([
  'webpack',
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
 		injectChanges: true,

 		// Use a specific port (instead of the one auto-detected by Browsersync).
 		port: 3000,

 	} );
 });


gulp.task('default',  ['webpack','browser-sync'],function() {
 	gulp.src("./dist/bundle.js").pipe(notify("Found file: <%= file.relative %>!"));
 	gulp.src("./dist/bundle.css").pipe(notify("Found file: <%= file.relative %>!"));
 	gulp.watch( projectPHPWatchFiles, reload); // Reload on PHP file changes.
 	gulp.watch( JSWatchFiles, [ 'webpack', reload ]  );
	gulp.watch( sassWatchFiles, [ 'webpack' , reload ] ); // Reload on SCSS file changes.

});





