
<?php include('header.php');?>
<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span classm-6s="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Eduardo Alvarez</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Sobre</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#conhecimento">Conhecimento</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#curso">Cursos</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#portfolio">Projetos</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <header >
        <div class="container">
            <div class="row">
                <div class='col-sm-6'>
                    <h3>Resumo</h3>
                    <p>
                        Programador Pleno com <?php echo (date(Y)-2011 )?> anos de experiência na área de desenvolvimento de sistemas WEB (PHP/Jquery) e 1 ano com desenvolvimento Mobile(Cordova/JqueryMobile). 
												Facilidade de trabalhar em equipe, dedicado, autodidata e proativo. 
												Facilidade para análises problemas e buscar as melhores soluções. 
												Boa sintaxe, códigos comentados e indentados.
                    <!--<hr class="star-light">
                        <span class="skills">Desenvolvedor Web</span>-->
                </div>
                <div class='col-sm-6'>
                    <img class="img-responsive img-centered" src="img/profile.png" alt="">
                    <div class="intro-text">
                        
                        
                    </div>
                </div>

            </div>
        </div>
    </header>

    

    <!-- About Section -->
    <section  id="about">
        <div class="container">
            <div class="row">
                <div class='col-sm-6'>
                    <div class='col-sm-6'>
                      <h3>Vive em</h3>
                      <img class="img-responsive img-centered" src="img/profile.png" alt="">
                      <p class='text-center'> São Paulo</p>
                    </div>
                  </div>
                  <div class='col-sm-6'>
                    <h3>Hobbies</h3>
                    <img class="img-responsive img-centered" src="img/profile.png" alt="">
                    <p class='text-center'>Filmes e series</p>
                  </div>
                </div>
            </div>
             
        </div>
    </section>
    <!-- About Section -->
    <section  class="success" id="conhecimento">
        <div class="container">
          <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Conhecimento</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                    <div width='50%' class='bagdes'>
                      <img class="img-responsive img-centered" src="img/profile.png" alt="">
                      <img class="img-responsive img-centered" src="img/profile.png" alt="">
                    </div>
                </div>
            </div>
             
        </div>
    </section>

    <!-- About Section -->
    <section  id="curso">
        <div class="container">
           <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Cursos</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-6'>
                    <img class="img-responsive img-centered" src="img/profile.png" alt="">
                </div>
                <div class='col-sm-6'>
                      <h4>HTML5</h4>
                      <h4>CafeLearn</h4>
                      <p>10Horas</p>
                      <p>Novas Tags do Html 5, semantica com HTML5, MetasTags </p>
                      <a href='#certificado_html'>Certificado</a>
                </div>
            </div>
        </div>
    </section>



<!-- Portfolio Grid Section -->
    <section class="success" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">   
                <div class="col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive " alt="">
                    </a>
                </div>
                <div class="col-sm-6 portfolio-item">
                    <p><h4>Senac Eventos</h4></p>
                    <p>
                     é faiz elementum girarzis, nisi eros vermeio, 
                     in elementis mé pra quem é amistosis quis leo. 
                     Manduma pindureta quium dia nois paga. Sapien in 
                     monti palavris qui num significa nadis i pareci 
                     latim. Interessantiss quisso pudia ce receita de 
                     bolis, mais bolis eu n
                    </p>
                    <p><b>Participação</b></p> 
                    <div class="progress">
                      <div class="progress-bar progress-bar-success " style="width: 50%">
                        <div>Programação</div>
                      </div>
                      <div class="progress-bar progress-bar-warning " style="width: 25%">
                        <div>Design</div>
                      </div>
                      <div class="progress-bar progress-bar-danger " style="width: 25%">
                        <div>Banco de dados</div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/circus.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-6 portfolio-item">
                    <p><h4>Senac Eventos</h4></p>
                    <p>
                     é faiz elementum girarzis, nisi eros vermeio, 
                     in elementis mé pra quem é amistosis quis leo. 
                     Manduma pindureta quium dia nois paga. Sapien in 
                     monti palavris qui num significa nadis i pareci 
                     latim. Interessantiss quisso pudia ce receita de 
                     bolis, mais bolis eu n
                    </p>
                    <p><b>Participação</b></p> 
                    <div class="progress">
                      <div class="progress-bar progress-bar-success " style="width: 10%">
                        <div>Programação</div>
                      </div>
                      <div class="progress-bar progress-bar-warning " style="width: 40%">
                        <div>Design</div>
                      </div>
                      <div class="progress-bar progress-bar-danger " style="width: 50%">
                        <div>Banco de dados</div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/safe.png" class="img-responsive" alt="">
                    </a>
                </div>
                 <div class="col-sm-6 portfolio-item">
                    <p><h4>Senac Eventos</h4></p>
                    <p>
                     é faiz elementum girarzis, nisi eros vermeio, 
                     in elementis mé pra quem é amistosis quis leo. 
                     Manduma pindureta quium dia nois paga. Sapien in 
                     monti palavris qui num significa nadis i pareci 
                     latim. Interessantiss quisso pudia ce receita de 
                     bolis, mais bolis eu n
                    </p>
                    <p><b>Participação</b></p> 
                    <div class="progress">
                      <div class="progress-bar progress-bar-success " style="width: 30%">
                        <div>Programação</div>
                      </div>
                      <div class="progress-bar progress-bar-warning " style="width: 35%">
                        <div>Design</div>
                      </div>
                      <div class="progress-bar progress-bar-danger " style="width: 35%">
                        <div>Banco de dados</div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Entre em contato</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <!--label>Nome</label-->
                                <input type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <!--label>Email</label-->
                                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <!--label>Phone Number</label-->
                                <input type="tel" class="form-control" placeholder="Celular" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <!--label>Message</label-->
                                <textarea rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-sm-6">
                        <h3>Me encontre na web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/Eduardo.Alvarez0" class="btn-social btn-outline">
                                <i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/u/0/+EduardoAlvarez1/posts" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/eduperezalvarez" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="http://www.linkedin.com/in/eduardoalvarez1" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://github.com/EduardoAlvarez" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col  col-sm-6">
                        <h3>Contato direto</h3>
                        <ul class="list-unstyled">
                            <li><b>Celular:</b> (11)965383150 </li>
                            <li><b>Email:</b> eduardoperezalvarez@hotmail.com</li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Eduardo Alvarez <?php echo date(Y)?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes_js.php')?>

</body>
</html>
