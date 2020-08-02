<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Alejandro Garcia - PHP Freelancer</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Alejandro Garcia</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <img class="icon" src="assets/svg/bars.svg"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portafolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about"><?php echo $common['about']; ?></a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact"><?php echo $common['contact']; ?></a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/en"><?php echo $common['english']; ?></a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/es"><?php echo $common['spanish']; ?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <picture>
                    <source type="image/webp" srcset="assets/img/avataaars.webp">
                    <source type="image/jpeg" srcset="assets/img/avataaars.png">
                    <img class="img-fluid mb-5" src="assets/img/avataaars.png"/>
                </picture>
                <h1 class="masthead-heading text-uppercase mb-0">Alejandro Garcia</h1>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <img class="icon" src="assets/svg/star.svg"></img>
                    <div class="divider-custom-line"></div>
                </div>
                <p class="masthead-subheading font-weight-light mb-0"><?php echo $common['positions']; ?></p>
            </div>
        </header>
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portafolio</h2>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <img class="icon dark" src="assets/svg/star.svg"></img>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="text-center big"><img class="icon" src="assets/svg/expand.svg"></img></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="" />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="text-center big"><img class="icon" src="assets/svg/expand.svg"></img></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/cake.png" alt="" />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="text-center big"><img class="icon" src="assets/svg/expand.svg"></img></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/circus.png" alt="" />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="text-center big"><img class="icon" src="assets/svg/expand.svg"></img></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/game.png" alt="" />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="text-center big"><img class="icon" src="assets/svg/expand.svg"></img></div>
                            </div>
                            <picture>
                                <source type="image/webp" srcset="assets/img/portfolio/safe.webp">
                                <source type="image/jpeg" srcset="assets/img/portfolio/safe.jpg">
                                <img class="img-fluid" src="assets/img/portfolio/safe.jpg" alt=""/>
                            </picture>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="text-center big"><img class="icon" src="assets/svg/expand.svg"></img></div>
                            </div>
                            <picture>
                                <source type="image/webp" srcset="assets/img/portfolio/submarine.webp">
                                <source type="image/jpeg" srcset="assets/img/portfolio/submarine.jpg">
                                <img class="img-fluid" src="assets/img/portfolio/submarine.jpg" alt=""/>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-white"><?php echo $common['about']; ?></h2>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <img class="icon" src="assets/svg/star.svg"></img>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto"><p class="lead"><?php echo $about['content 1']; ?></p></div>
                    <div class="col-lg-4 mr-auto"><p class="lead"><?php echo $about['content 2']; ?></p></div>
                </div>
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light js-scroll-trigger" href="#contact">
                        <?php echo $about['get in touch']; ?>
                    </a>
                </div>
            </div>
        </section>
        <section class="page-section" id="contact">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><?php echo $common['contact me']; ?></h2>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <img class="icon dark" src="assets/svg/star.svg"></img>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label><?php echo $form['name']; ?></label>
                                    <input class="form-control" id="name" type="text" placeholder="<?php echo $form['name']; ?>" required="required" data-validation-required-message="<?php echo $form['name required']; ?>" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label><?php echo $form['email']; ?></label>
                                    <input class="form-control" id="email" type="email" placeholder="<?php echo $form['email']; ?>" required="required" data-validation-required-message="<?php echo $form['email required']; ?>" data-validation-validemail-message="<?php echo $form['message valid']; ?>"/>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label><?php echo $form['message']; ?></label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="<?php echo $form['message']; ?>" required="required" data-validation-required-message="<?php echo $form['message required']; ?>"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit" validation-failed-message-1="<?php echo $form['failed 1']; ?>" validation-failed-message-2="<?php echo $form['failed 2']; ?>" Validation-successful-message="<?php echo $form['successful']; ?>"><?php echo $form['send']; ?></button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Stack</h4>
                        <p class="lead mb-0">
                            PHP, Laravel, Java, Javascript
                            <br />
                            HTML, CSS, Bootstrap
                        </p>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4"><?php echo $footer['social buttons']; ?></h4>
                        <a class="btn btn-outline-light btn-social mx-1 i" href="https://github.com/EGA-SUPREMO"><img class="icon" src="assets/svg/github.svg"></img></a>
                        <a class="btn btn-outline-light btn-social mx-1 i" href="https://wa.me/584262464450"><img class="icon" src="assets/svg/whatsapp.svg"></img></a>
                        <a class="btn btn-outline-light btn-social mx-1 i" href="https://www.linkedin.com/in/alejandro-gar"><img class="icon" src="assets/svg/linkedin-in.svg"></img></a>
                        <a class="btn btn-outline-light btn-social mx-1 i" href="https://stackoverflow.com/users/7431197/alejandro-garcia"><img class="icon" src="assets/svg/stack-overflow.svg"></img></a>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4"><?php echo $footer['suggest edit']; ?></h4>
                        <p class="lead mb-0"><?php echo $footer['suggest edit content']; ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Alejandro Garcia 2020</small></div>
        </div>
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><img class="icon" src="assets/svg/chevron-up.svg"></img></a>
        </div>
        <?php
        for ($i=0; $i < 6; $i++) { 
            include 'portfolio-item.php';
        }
        ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/all.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
