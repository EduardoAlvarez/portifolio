module.exports = function(grunt) {
				grunt.initConfig({
					less: {
						development: {
                options: {
                    paths: ["./less"],
                    yuicompress: true
                },
                files: {
                    "./css/style.css": "./less/componemtes/header.less"
                }
              }
						},
						watch: {
							files: "./less/*",
							tasks: ["less"]
						}
				});
				grunt.loadNpmTasks('grunt-contrib-less');
				grunt.loadNpmTasks('grunt-contrib-watch');
     };
