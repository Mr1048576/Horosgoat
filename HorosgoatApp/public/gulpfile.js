var gulp = require('gulp');
var livereload = require('gulp-livereload')
var port = process.env.PORT || 4444;

gulp.task('server', function(next) {
  var finalhandler = require('finalhandler');
  var http = require('http');
  var serveStatic = require('serve-static');

  var serve = serveStatic(__dirname, {'index': ['index.html']});

  var server = http.createServer(function(req, res){
    var done = finalhandler(req, res);
    serve(req, res, done);
  });

  server.listen(port, next);
  console.log("Static server running on: " + port);
});

gulp.task('watch', ['server'], function() {
  var server = livereload();
  gulp.watch('./**').on('change', function(file) {
      server.changed(file.path);
  });
});