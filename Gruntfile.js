module.exports = function(grunt) {

	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		watch: {

			javascripts: { files: ['frontend/javascripts/**/*.js'], tasks: ['concat'] },
			stylesheets: { files: ['frontend/stylesheets/**/*.less'], tasks: ['less'] },
			templates: { files: ['frontend/javascripts/templates/**/*.html'], tasks: ['handlebars'] }

		},

		concat: {

			default: {
				src: [
					'frontend/vendor/jquery/jquery.min.js',
					'frontend/vendor/handlebars/handlebars.js',
					'frontend/javascripts/templates/compiled.js',
					'frontend/javascripts/libraries/module.js',
					'frontend/javascripts/extensions/**/*.js',
					'frontend/javascripts/modules/**/*.js',
					'frontend/javascripts/main.js',
				],
				dest: 'public/assets/main.js'
			}

		},

		uglify: {

			options: { preserveComments: false },
			default: { src: 'public/assets/main.js', dest: 'public/assets/main.js' }

		},

		less: {

			default: { src: 'frontend/stylesheets/main.less', dest: 'public/assets/main.css' }

		},

		cssmin: {

			options: { keepSpecialComments: 0 },
			default: { src: 'public/assets/main.css', dest: 'public/assets/main.css' }

		},

		handlebars: {

			options: {
				namespace: 'templates',
				processName: function(fileName) {
					return fileName.replace('frontend/javascripts/templates/', '')
				}
			},
			default: {
				files: {
					'frontend/javascripts/templates/compiled.js' : [
						'frontend/javascripts/templates/**/*.html'
					]
				}
			}

		}

	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-handlebars');

	grunt.registerTask('default', ['handlebars', 'concat', 'less', 'watch']);
	grunt.registerTask('build', ['handlebars', 'concat', 'uglify', 'less', 'cssmin']);

};