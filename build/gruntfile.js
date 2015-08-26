module.exports = function( grunt ) {

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');

  grunt.initConfig({
    uglify: {
      my_target: {
        files: {
          '../ux/js/scripts.min.js': ['../ux/js/**/*.js']
        }
      }
    },
    watch: {
      css: {
        files: '../ux/sass/**/*.scss',
        tasks: [ 'sass', 'cssmin' ]
      },
    },
    sass: require( './custom_modules/sass' ).task,
    cssmin: require( './custom_modules/cssmin' ).task
  });
};
