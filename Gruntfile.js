module.exports = function(grunt) {
    grunt.initConfig({
        karma: {
            options: {
                configFile: 'karma.conf.js'
            },
            unit: {
                singleRun: true
            },
            continuous: {
                // keep karma running in the background
                background: true
            }
        },
        watch: {
            karma: {
                // run these tasks when these files change
                files: ['jasmine-test/src/**/*.js', 'jasmine-test/specs/src/**/*.js'],
                tasks: ['karma:continuous:run'] // note the :run flag
            }
        }
    });

    grunt.loadNpmTasks('grunt-karma');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('unit-test', ['karma:continuous:start', 'watch:karma']);
};