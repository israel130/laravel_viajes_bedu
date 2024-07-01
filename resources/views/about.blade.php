<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Viajes</title>
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
                            <a class="navbar-brand" href="{{ url('index') }}">
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
                                            <a class="nav-link" href="{{ url('index') }}">Home </a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{ url('about') }}"> sobre nsotros</a>
                                        </li>
                                        <li class="nav-item">
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

    <section class="about_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Sobre Nosotros
                </h2>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="img/viejs_fondo.png" alt="">
                </div>
                <div class="detail-box">
                    <p>
                        En VIAJES, entendemos que viajar no se trata solo de llegar a un destino,
                        sino de vivir una experiencia transformadora. Desde nuestros inicios,
                        nos hemos dedicado apasionadamente a diseñar viajes excepcionales que
                        capturan la esencia de cada destino y enriquecen la vida de nuestros viajeros.
                    </p>
                    <div>
                        <a href="#" onclick="event.preventDefault(); ">
                            SABER MAS
                        </a>
                    </div>
                </div>
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