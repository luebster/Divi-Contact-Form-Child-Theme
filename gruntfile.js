module.exports = function (grunt) {
  // Define a zip task
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    zip: {
      'location/to/zip/files.zip': ['file/to/zip.js', 'another/file.css']
    }
  });

  // Load in `grunt-zip`
  grunt.loadNpmTasks('grunt-zip');
};