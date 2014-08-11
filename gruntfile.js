module.exports = function(grunt) {
				grunt.initConfig({
					less: {
							componentes: {/*arquivos que serão alterados quando forem salvos*/
									src: 'less/componentes/*.less',
									dest: 'css/componentes.css',
              },
              geral: {/*arquivos que serão alterados quando forem salvos*/
									src: 'less/freelancer.less',
									dest: 'css/freelancer.css',
              }
						},
						watch: {/*Arquivos que o Grunt vai ficar olhando*/
							files: ["./less/*.less" ,"./less/**/*.less"],
							tasks: ["less"]
						}
				});
				grunt.loadNpmTasks('grunt-contrib-less');
				grunt.loadNpmTasks('grunt-contrib-watch');
     };
