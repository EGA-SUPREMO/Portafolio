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
                                    <input class="form-control" id="email" type="email" placeholder="<?php echo $form['email']; ?>" required="required" data-validation-required-message="<?php echo $form['email required']; ?>" />
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
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit"><?php echo $form['send']; ?></button></div>
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
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img class="icon green little" src="assets/svg/times.svg"></img></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Micro CMS</h2>
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <img class="icon dark" src="assets/svg/star.svg"></img>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <a href="https://testtoshowskills.000webhostapp.com/"><img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="" /></a>
                                    <h5 class="mt-1">A blog made from scratch, useful as a template for future projects!</h5>
<p class="mb-2">Fully functional in where you can sign up, log in or forget about password and change the profile picture, create, edit or delete entries and search them by title, author or content.</p>
<p class="mb-2">Made with PHP, Bootstrap 4, Javascript, CSS and MySQL.</p>
                                    <a href="https://github.com/EGA-SUPREMO/Micro-CMS"><button class="btn btn-primary mb-5">More info</button></a>
                                    <br>
                                    <button class="btn btn-primary " data-dismiss="modal">
                                        <img class="icon little" src="assets/svg/times.svg"></img>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img class="icon green little" src="assets/svg/times.svg"></img></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">Gmail Auto replier</h2>
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <img class="icon dark" src="assets/svg/star.svg"></img>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <a href="https://github.com/EGA-SUPREMO/Gmail-Auto-replier"><img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="" /></a>
                                    <h5 class="mt-1">Replies any Gmails depending on their keywords</h5>
                                    <p class="mb-2">Made with Python</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <img class="icon little" src="assets/svg/times.svg"></img>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img class="icon green little" src="assets/svg/times.svg"></img></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Tankoj!</h2>
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <img class="icon dark" src="assets/svg/star.svg"></img>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <a href="https://github.com/EGA-SUPREMO/Tankoj"><img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="" /></a>
                                    <h5 class="mt-1">A relative-complex tanks game</h5>
                                    <p class="mb-2">Everything made from scratch from the graphics engine to the UI and designs except the backgrounds.</p>
                                    <p class="mb-2"><a href="https://github.com/EGA-SUPREMO/RPG-Game-template">RPG Game Template</a> made possible this game.</p>
                                    <p class="mb-2">Similar to <a href="https://store.steampowered.com/app/70640/Worms/">Worms inc.</a>.</p>
                                    <p class="mb-2">Made with Java.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <img class="icon little" src="assets/svg/times.svg"></img>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img class="icon green little" src="assets/svg/times.svg"></img></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">RPG Game template</h2>
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <img class="icon dark" src="assets/svg/star.svg"></img>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <a href="https://github.com/EGA-SUPREMO/RPG-Game-template"><img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="" /></a>
                                    <h5 class="mt-1">Framework that makes building games a breeze!</h5>
                                    <p class="mb-2">It a simple game template where you can run, walk, pick up items, advance levels and have enemies that you can aim and kill, and they will follow you using a dijkstra algorithm in Java.</p>
                                    <p class="mb-2">Used by <a href="https://github.com/EGA-SUPREMO/Tankoj">Tankoj!</a>.</p>
                                    <p class="mb-2">Similar to RPG games from 90's.</p>
                                    <p class="mb-2">Made with Java.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <img class="icon little" src="assets/svg/times.svg"></img>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img class="icon green little" src="assets/svg/times.svg"></img></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Inversiones CryptoMarket</h2>
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <img class="icon dark" src="assets/svg/star.svg"></img>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <a href="https://inversiones-cryptomarket.herokuapp.com"><picture>
                                        <source type="image/webp" srcset="assets/img/portfolio/safe.webp">
                                        <source type="image/jpeg" srcset="assets/img/portfolio/safe.jpg">
                                        <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.jpg" alt=""/>
                                    </picture></a>
                                    <h5 class="mt-1">A sample website about cryptocurrencies</h5>
<p class="mb-2">Made with PHP, Laravel.</p>
                                    <a href="https://github.com/EGA-SUPREMO/Laravel-Template-Website"><button class="btn btn-primary mb-5">More info</button></a>
                                    <br>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <img class="icon little" src="assets/svg/times.svg"></img>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img class="icon green little" src="assets/svg/times.svg"></img></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">Connection Linker</h2>
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <img class="icon dark" src="assets/svg/star.svg"></img>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <a href="https://github.com/EGA-SUPREMO/ConnectionLinker"><picture>
                                        <source type="image/webp" srcset="assets/img/portfolio/submarine.webp">
                                        <source type="image/jpeg" srcset="assets/img/portfolio/submarine.jpg">
                                        <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.jpg" alt=""/>
                                    </picture></a>
                                    <h5 class="mb-1">Get connections faster on LinkedIn</h5>
                                    <p class="mb-2">Semi-automatic bot, it sends custom messages to profiles when a list is provided.</p>
                                    <p class="mb-2">Easy to use and configure!</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <img class="icon little" src="assets/svg/times.svg"></img>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/all.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
