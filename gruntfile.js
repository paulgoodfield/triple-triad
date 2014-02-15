/*
* triple-triad
* http://<%= projectUrl %>
*
* Copyright (c) 2013 Bluegg.co.uk
*/

/*global module:false*/
module.exports = function(grunt)
{
	var path = require('path');

	// Project configuration.
	grunt.initConfig(
	{
		pkg: grunt.file.readJSON('package.json'),

		/**
		* Sass watch task
		*/

		watch: {
			sass: {
				files: ['public/styles/sass/**/*.scss'],
				tasks: ['sass:dist']
			},
			css: {
				files: ['public/styles/*.css']
			},
			livereload: {
				files: ['app/**/*.php',
				'public/scripts/**/*.{js,json}',
				'public/styles/*.css',
				'public/images/**/*.{png,jpg,jpeg,gif,webp,svg}'],
				options: {
					livereload: true
				}
			}
		},
		sass: {
			dist: {
				files: {
					'public/styles/base.css': 'public/styles/sass/base.scss',
					//'public/styles/old-ie.css': 'public/styles/sass/old-ie.scss'
				},
				options: {
					sourcemap: 'true',
					quiet: true
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['watch']);
};