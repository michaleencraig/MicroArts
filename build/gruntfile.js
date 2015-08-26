module.exports = function( grunt ) {

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.initConfig({
    watch: {
      files: '../ux/sass/**/*.scss',
      tasks: [ 'sass', 'cssmin', 'minified' ]
    },
    sass: require( './custom_modules/sass' ).task,
    cssmin: require( './custom_modules/cssmin' ).task,
    minified: require( './custom_modules/minified' ).task
  });
};
