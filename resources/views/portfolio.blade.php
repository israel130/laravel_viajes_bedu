<!DOCTYPE html>
<html lang="es">

    <head>
        
        <title>Viajes</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/responsive.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body class="sub_page">

        <div class="hero_area">
            <header class="header_section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-11 offset-lg-1">
                            <nav class="navbar navbar-expand-lg custom_nav-container ">
                                <a class="navbar-brand"  href="{{ url('index') }}">
                                    <i class="fas fa-map-marked-alt m-2 color-icon"></i> 
                                    <span>
                                        Viajes
                                    </span>
                                </a>
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                                        <ul class="navbar-nav  ">
                                            <li class="nav-item ">
                                                <a class="nav-link" href="{{ url('index') }}">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('about') }}"> sobre nsotros</a>
                                            </li>
                                            <li class="nav-item active">
                                                <a class="nav-link" href="{{ url('portfolio') }}"> portafolio </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('contact') }}">contactanos</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        </div>


        <section class="portfolio_section layout_padding">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        Nuestro Portafolio
                    </h2>
                    <p>
                        Explora nuestro portafolio de experiencias únicas alrededor del mundo. Desde emocionantes aventuras
                        en destinos exóticos hasta escapadas relajantes en paraísos naturales, cada viaje en nuestro
                        portafolio está diseñado para inspirar y enriquecer tu vida con momentos inolvidables. Descubre cómo
                        hemos transformado los sueños de nuestros viajeros en realidades fascinantes.
                    </p>
                </div>

                <div class="card-deck">
                    <div class="card">
                        <img src="img/PAIS1.jpeg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Torre de Pisa en Italia</h5>
                            <p class="card-text">un viaje lleno de historia y maravillas arquitectónicas.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">SABER MAS</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/PAIS2.jpeg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Castillo de Tinum en Yucatán</h5>
                            <p class="card-text">una aventura llena de cultura y antigüedad.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">SABER MAS</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/PAIS3.jpeg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">crópolis de Grecia</h5>
                            <p class="card-text">umérgete en la cuna de la civilización occidental.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">SABER MAS</small>
                        </div>
                    </div>
                </div>
                <div class="see_btn">
                    <a href="#" onclick="event.preventDefault(); ">
                        See More
                    </a>
                </div>
            </div>

        </section>

        <section class="info_section ">
            <div class="container">
                <div class="info_container">
                    <div class="info_social">
                        <div class="d-flex justify-content-center">
                            <h4 class="">
                                SIGUENOS
                            </h4>
                        </div>
                        <div class="social_box">
                            <a href="#" onclick="event.preventDefault(); ">
                                <img src="img/fb.png" alt="">
                            </a>
                            <a href="#" onclick="event.preventDefault(); ">
                                <img src="img/twitter.png" alt="">
                            </a>
                            <a href="#" onclick="event.preventDefault(); ">
                                <img src="img/instagram.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid footer_section">
            <div class="container">
                <p> &copy; 2024 VIAJES </p>
            </div>
        </section>

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

    </body>

</html>