module.exports = function( grunt ) {

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-postcss');

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
           banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' + '<%= grunt.template.today("yyyy-mm-dd") %> */'
      },
      build: {
        src: '../ux/script_src/**/*.js',
        dest: '../ux/js/scripts.min.js'
      }
    },
    watch: {
      css: {
        files: '../ux/sass/**/*.scss',
        tasks: [ 'sass', 'cssmin', 'postcss', 'uglify' ]
      },
    },
    postcss: {
        options: {
            map: true,
            processors: [
                require('autoprefixer-core')({
                    browsers: ['last 2 versions']
                })
            ]
        },
        dist: {
            src: '../ux/css/main.css'
        }
    },
    sass: require( './custom_modules/sass' ).task,
    cssmin: require( './custom_modules/cssmin' ).task
  });
};
