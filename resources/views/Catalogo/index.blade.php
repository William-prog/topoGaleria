<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Link tags -->
    <link media="screen" rel="stylesheet" href="css/appCustomStyles.css">
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FF781F" />
    <meta name="description" content="Servicios y equipos de mineria con más de 30 años de experiencia. Reparación y mantenimiento, contamos con cabina de pintura, shotblast, mano de obra minera.">
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <title>Contratista minera | Servicios y Equipos TOPO S.A. de C.V.</title>
</head>

<body>
    <header>
        <!-- Mobile navigation -->
        <nav id="mobile-nav" class="flex flex-jc-sb flex-ai-c hide-desktop">
            <a href="/">
                <img id="mobile-logo" src="img/logo.png" alt="Servicios y Equipos Topo S.A. de C.V." class="logo">
            </a>
            <a>
                <img id="mobile-menu" class="burger-menu" src="img/menu-white.png" onclick="openNav()" alt="menu" class="menu">
            </a>
        </nav>

        <!-- Desktop navigation -->
        <nav id="desktop-nav" class="col-4 flex-jc-sb flex-ai-c flex-jc-sa hide-mobile">
            <div class="logo-desktop">
                <a href="https://serviciosyequipostopo.com.mx/">
                    <img src="img/topo.png" alt="" class="">
                    <!--<img id="desktop-logo" src="img/logo.png" alt="" class="">-->
                </a>
            </div>
            <div>
                <a class="nav-anchor" href="https://serviciosyequipostopo.com.mx/">Inicio</a>
            </div>
            <div>
                <a class="nav-anchor" href="https://serviciosyequipostopo.com.mx/careers" target="_blank">Empleos</a>
            </div>
            <div>
                <a class="nav-anchor" href="https://serviciosyequipostopo.com.mx/contact" target="_blank">Contácto</a>
            </div>

        </nav>
    </header>

    <!-- Side nav for mobile version -->
    <div id="mySidenav" class="sidenav hide-desktop">
        <a class="closebtn" onclick="closeNav()">&times;</a>
        <a href="https://serviciosyequipostopo.com.mx/">Inicio</a>
        <a href="https://serviciosyequipostopo.com.mx/careers" target="noopener">Empleos</a>
        <a href="https://serviciosyequipostopo.com.mx/contact" target="noopener">Contacto</a>
    </div>

    <!-- Open side navigation script -->
    <script src="js/open-side-navigation.js"></script>


    <main>
        <section id="hero-section" class="hero-section">
            <div class="hero-overlay">
                <div class="title-container">
                    <!-- <h1 class="white-text">Venta y servicios a equipos <span class="orange-text">utilitarios</span> en la industria minera en toda la república mexicana</h1>
                    <div class="call-to-action-container">
                        <a href="/index-job-posts" class="button-white service-button mt-xxs">Empleos disponibles</a>
                        <a href="/contact" class="button-orange mt-xxs">Información de contácto</a>
                    </div> -->

                    <style>
                        .container_all {
                            position: relative;
                            right: 0;
                            transition: all 300ms;
                        }

                        .container__card {
                            max-width: 1200px;
                            padding: 20px;
                            padding-bottom: 40px;
                            margin: auto;
                            display: flex;
                            flex-wrap: wrap;
                            justify-content: center
                        }
                    </style>
                    <div class="col-12">
                        <div class="container_all">
                            <style>
                                .card__father {
                                    margin: 20px;
                                    perspective: 1000px;
                                }

                                .card__father:hover .card {
                                    transform: rotateY(180deg);
                                }


                                .card {
                                    width: 350px;
                                    height: 400px;
                                    position: relative;
                                    transform-style: preserve-3d;
                                    transition: all 600ms;
                                }

                                .card__front {
                                    background-size: cover;
                                    background-position: center;
                                }


                                .card__front,
                                .card__back {
                                    width: 100%;
                                    height: 100%;
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    backface-visibility: hidden;
                                    transform-style: preserve-3d;
                                    border-radius: 20px;
                                }

                                .card__back {
                                    transform: rotateY(180deg);
                                    background: white;
                                }

                                .body__card_front {
                                    width: 100%;
                                    height: 100%;
                                    text-align: center;
                                    padding-top: 30%;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    color: #fff;
                                    transform: translateZ(60px);
                                }

                                .bg {
                                    width: 100%;
                                    height: 100%;
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    background: rgba(0, 0, 0, 0.4);
                                    border-radius: 20px;
                                }

                                .body__card_back {
                                    padding: 40px;
                                    text-align: center;
                                    transform: translateZ(60px);
                                }

                                .body__card_back p {
                                    margin-top: 30px;
                                    text-align: justify;
                                    font-size: 18px;
                                }

                                .body__card_back input {
                                    padding: 10px 40px;
                                    margin-top: 30px;
                                    font-size: 16px;
                                    cursor: pointer;
                                    border: none;
                                    color: white;
                                    background: #58B0F6;
                                    box-shadow: 1px 1px 30px -5px #58B0F6;
                                    border-radius: 10px;
                                    transition: box-shadow 600ms;
                                }

                                .body__card_back input:hover {
                                    box-shadow: 1px 1px 30px 0px #449de6;
                                }
                            </style>

                            <div class="container__card">

                                <div class="card__father">
                                    <div class="card">
                                        <div class="card__front" style="background-image: url(img/icon-bolts.png);">
                                            <div class="bg"></div>
                                            <div class="body__card_front">
                                                <h1>Venta de refacciones</h1>
                                            </div>
                                        </div>
                                        <div class="card__back">
                                            <div class="body__card_back">
                                                <h1>Venta de refacciones</h1>
                                                <p>Nuestro almacén ofrece un amplio <strong>stock</strong> de refacciones para equipos utilitarios subterraneos, a disponibilidad inmediata y listas para ser instaladas.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card__father">
                                    <div class="card">
                                        <div class="card__front" style="background-image: url(img/icon-engineer.png);">
                                            <div class="bg"></div>
                                            <div class="body__card_front">
                                                <h1>Equipos Utilitarios</h1>
                                            </div>
                                        </div>
                                        <div class="card__back">
                                            <div class="body__card_back">
                                                <h1>Equipos Utilitarios</h1>
                                                <p>Contamos con un amplio catálogo de equipos utilitarios y herramientas de perforación para minería subterránea, diseñados para atender todas tus necesidades y cumplir tus objetivos.</p>
                                                <br>
                                                <br>
                                                <br>
                                                <a href="https://serviciosyequipostopo.com.mx/utilityEquipment" class="button-orange mt-xxs">Ver Fichas Técnicas</a>
                                                <!--<a type="button-orange mt-xxs" href="https://serviciosyequipostopo.com.mx/utilityEquipment"> Ver Fichas Técnicas</a>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card__father">
                                    <div class="card">
                                        <div class="card__front" style="background-image: url(img/icon-fix.png);">
                                            <div class="bg"></div>
                                            <div class="body__card_front">
                                                <h1>Mano de obra minera</h1>
                                            </div>
                                        </div>
                                        <div class="card__back">
                                            <div class="body__card_back">
                                                <h1>Mano de obra minera</h1>
                                                <p>Nuestro personal técnico especializado está en constante capacitación con el único objetivo de ofrecer el mejor servicio de calidad y hacer realidad cualquier proyecto subterráneo y/o de construcción.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <video class="hero-video" src="video/compressed.m4v" autoplay muted loop width="100%" height="100%"></video>
            </div>
        </section>

        <div class="">
            <!--<section id="service-section" class="service-section text-center wrapper">-->
            <!--    <div class="service-container pb-xxs">-->
            <!--        <h2 class="hi pb-xs">-->
            <!--            Nuestros servicios-->
            <!--        </h2>-->
            <!--        <div class="col-3">-->
            <!--            <div class="service-item">                -->
            <!--                <img src="img/icon-bolts.svg" alt="Topo services section nuts and bolts icon">-->
            <!--                <div class="service-description">-->
            <!--                    <h4>Venta de refacciones</h4>-->
            <!--                    <p>Contamos con un almacén preparado con todo tipo de herramientas listas para ser instaladas</p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="service-item">                -->
            <!--                <img src="img/icon-fix.svg" alt="Topo services section fixing icon">-->
            <!--                <div class="service-description">-->
            <!--                    <h4>Reparación de equipos</h4>-->
            <!--                    <p>Nuestro taller cuenta con cabina de shot blast, cabina de pintura y diagnóstico de daños para equipo utilitario de interior mina</p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="service-item">                -->
            <!--                <img src="img/icon-engineer.svg" alt="Topo services section engineer icon">-->
            <!--                <div class="service-description">-->
            <!--                    <h4>Mano de obra minera</h4>-->
            <!--                    <p>Nuestro personal es altamente capacitado para hacer realidad proyectos subterraneos y de contrucción</p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</section>-->
            <section id="service-section" class="service-section text-center wrapper">
                <div class="service-container pb-xxs">
                    <!-- <h2 class="hi pb-xs">
                        Nuestros servicios
                    </h2> -->
                    <style>
                        .container_all {
                            position: relative;
                            right: 0;
                            transition: all 300ms;
                        }

                        .container__card {
                            max-width: 1200px;
                            padding: 20px;
                            padding-bottom: 40px;
                            margin: auto;
                            display: flex;
                            flex-wrap: wrap;
                            justify-content: center
                        }
                    </style>
                    <div class="col-12">
                        <div class="container_all">
                            <style>
                                .card__father {
                                    margin: 20px;
                                    perspective: 1000px;
                                }

                                .card__father:hover .card {
                                    transform: rotateY(180deg);
                                }


                                .card {
                                    width: 350px;
                                    height: 400px;
                                    position: relative;
                                    transform-style: preserve-3d;
                                    transition: all 600ms;
                                }

                                .card__front {
                                    background-size: cover;
                                    background-position: center;
                                }


                                .card__front,
                                .card__back {
                                    width: 100%;
                                    height: 100%;
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    backface-visibility: hidden;
                                    transform-style: preserve-3d;
                                    border-radius: 20px;
                                }

                                .card__back {
                                    transform: rotateY(180deg);
                                    background: white;
                                }

                                .body__card_front {
                                    width: 100%;
                                    height: 100%;
                                    text-align: center;
                                    padding-top: 30%;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    color: #fff;
                                    transform: translateZ(60px);
                                }

                                .bg {
                                    width: 100%;
                                    height: 100%;
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    background: rgba(0, 0, 0, 0.4);
                                    border-radius: 20px;
                                }

                                .body__card_back {
                                    padding: 40px;
                                    text-align: center;
                                    transform: translateZ(60px);
                                }

                                .body__card_back p {
                                    margin-top: 30px;
                                    text-align: justify;
                                    font-size: 18px;
                                }

                                .body__card_back input {
                                    padding: 10px 40px;
                                    margin-top: 30px;
                                    font-size: 16px;
                                    cursor: pointer;
                                    border: none;
                                    color: white;
                                    background: #58B0F6;
                                    box-shadow: 1px 1px 30px -5px #58B0F6;
                                    border-radius: 10px;
                                    transition: box-shadow 600ms;
                                }

                                .body__card_back input:hover {
                                    box-shadow: 1px 1px 30px 0px #449de6;
                                }
                            </style>

                            <div class="container__card">

                                <div class="card__father">
                                    <div class="card">
                                        <div class="card__front" style="background-image: url(img/icon-bolts.png);">
                                            <div class="bg"></div>
                                            <div class="body__card_front">
                                                <h1>Venta de refacciones</h1>
                                            </div>
                                        </div>
                                        <div class="card__back">
                                            <div class="body__card_back">
                                                <h1>Venta de refacciones</h1>
                                                <p>Nuestro almacén ofrece un amplio <strong>stock</strong> de refacciones para equipos utilitarios subterraneos, a disponibilidad inmediata y listas para ser instaladas.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card__father">
                                    <div class="card">
                                        <div class="card__front" style="background-image: url(img/icon-engineer.png);">
                                            <div class="bg"></div>
                                            <div class="body__card_front">
                                                <h1>Equipos Utilitarios</h1>
                                            </div>
                                        </div>
                                        <div class="card__back">
                                            <div class="body__card_back">
                                                <h1>Equipos Utilitarios</h1>
                                                <p>Contamos con un amplio catálogo de equipos utilitarios y herramientas de perforación para minería subterránea, diseñados para atender todas tus necesidades y cumplir tus objetivos.</p>
                                                <br>
                                                <br>
                                                <br>
                                                <a href="https://serviciosyequipostopo.com.mx/utilityEquipment" class="button-orange mt-xxs">Ver Fichas Técnicas</a>
                                                <!--<a type="button-orange mt-xxs" href="https://serviciosyequipostopo.com.mx/utilityEquipment"> Ver Fichas Técnicas</a>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card__father">
                                    <div class="card">
                                        <div class="card__front" style="background-image: url(img/icon-fix.png);">
                                            <div class="bg"></div>
                                            <div class="body__card_front">
                                                <h1>Mano de obra minera</h1>
                                            </div>
                                        </div>
                                        <div class="card__back">
                                            <div class="body__card_back">
                                                <h1>Mano de obra minera</h1>
                                                <p>Nuestro personal técnico especializado está en constante capacitación con el único objetivo de ofrecer el mejor servicio de calidad y hacer realidad cualquier proyecto subterráneo y/o de construcción.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="gallery-section pt-s pb-xxs">
                <div class="gallery-grid">
                    <div class="reveal-holder" data-aos="reveal-item">
                        <div class="reveal-block right" data-aos="reveal-right"></div>
                        <img width="100%" src="img/topo-interior-mina.webp" alt="Servicios y Equipos Topo S.A. de C.V. interior mina">
                    </div>
                    <div data-aos="fade-down" data-aos-duration="750" class="gallery-text text-box black-bg-gradient">
                        <h2 class="pr-xxs pl-xxs">Más de <span class="orange-text">30 años</span> de experiencia en la industria minera</h2>
                        <div class="">
                            <div class="text-left flex goal-container">
                                <i class="fas fa-flag"></i>
                                <p>
                                    Topo Machinery Inc. se formó en 1985 para representar a "The Robbins Company" en México
                                </p>
                            </div>
                            <div class="text-left flex pt-xxs goal-container">
                                <i class="fas fa-warehouse"></i>
                                <p>
                                    En el año 2003 se funda Servicios y Equipos Topo S.A. de C.V. para dar mantenimiento y servicio técnico a maquinaria minera
                                </p>
                            </div>
                            <div class="text-left flex pt-xxs goal-container">
                                <i class="fas fa-hard-hat"></i>
                                <p>
                                    Originalmente fundada en 1987, Servicios y Equipos Topo está posicionada entre una las contratistas mineras de mayor renombre de la repúlica mexicana.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="gallery-section pt-s pb-xs">
                <div class="gallery-grid grid-reverse">
                    <div data-aos="fade-down" data-aos-duration="750" class="gallery-text text-box black-bg-gradient">
                        <div class="">
                            <h2 class="pr-xxs pb-xs pl-xxs text-center">Nos especializamos en proyectos de subterraneos para la <span class="orange-text">industria minera</span>.</h2>
                            <p class="pr-xxs pl-xxs">
                                Destacamos por ser pioneros en la implementación de proyectos subterráneos de última generación. <a class="orange-text" href="https://www.youtube.com/watch?v=mgFopWaf220">Mostrar mas...</a>
                            </p>
                        </div>
                    </div>
                    <div class="reveal-holder" data-aos="reveal-item">
                        <div class="reveal-block right" data-aos="reveal-right"></div>
                        <img width="100%" src="img/topo-worker.webp" alt="Servicios y Equipos Topo S.A. de C.V. maquinaria en interior mina">
                    </div>
                </div>
            </section>

            <section id="partners-section" class="partners-section pt-m text-center">
                <div class="partners-container">
                    <div class="partners-img radius-20">
                        <div class="partners-overlay radius-20">
                            <h1 class=" white-text pt-xs pb-xs">Representantes</h1>
                            <!--                              
                            <div  data-aos="fade-down" data-aos-duration="750" class="black-bg-gradient shadow container map-container radius-20  white-text">                                                                
                                <img src="img/map.webp" alt="mapa de la república mexicana" class="pt-xs map-img">
                                <div class="state-info">
                                    <h2>Hemos <span class="orange-text"> visitado: </span> </h2>                                                    
                                    <div class="slide-maps state-name slide-wrapper pt-xxs pb-xxs">                                    
                                        <div class="slider-city">
                                            <div class="slider-city-text1">Aguascalientes</div>
                                            <div class="slider-city-text2">Coahuila</div>
                                            <div class="slider-city-text3">Durango</div>
                                            <div class="slider-city-text4">D.F.</div>
                                            <div class="slider-city-text5">Guanajuato</div>
                                            <div class="slider-city-text6">Hidalgo</div>
                                            <div class="slider-city-text7">San Luis Potosí</div>
                                            <div class="slider-city-text8">Zacatecas</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             -->

                            <div data-aos="fade-right" data-aos-duration="750" class="gray-text white-bg container mt-s radius-20 partners-box shadow">
                                <!--
                                <h2 class="pt-xs pb-xs">Socios</h2>
                                 -->
                                <style>
                                    .two-column {
                                        align-items: end;
                                        display: grid;
                                        grid-template-columns: 1fr 1fr;
                                    }

                                    .one-column {
                                        grid-template-columns: 1fr 1fr;
                                    }

                                    .slide {
                                        padding-top: 80px;
                                    }

                                    .slideOne {
                                        padding-top: 80px;
                                        padding-bottom: 80px;
                                    }

                                    .partners-section .partners-img .container {
                                        height: 100% !important;
                                    }
                                </style>
                                <div class="">
                                    <div class="two-column">
                                        <div class="slide">
                                            <a href="https://www.therobbinscompany.com/es/" target="noopener">
                                                <img src="img/partners/robbins-logo.webp" alt="logo de logo de The Robbins Company" />
                                            </a>
                                        </div>
                                        <div class="slide">
                                            <a href="https://www.micon-drilling.de/MD/en/index.php" target="noopener">
                                                <img src="img/partners/micon-logo.webp" width="195px" alt="Logo de Micon Drilling" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="one-column">
                                        <div class="slideOne">
                                            <a href="https://timberlandequipment.com/" target="noopener">
                                                <img src="img/partners/Timberland.webp" width="250px" alt="Logo de Timberland" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    @include('footer')
</body>

</html>
<!-- Change header style when scrolling -->
<script async src="js/scroll.js" defer></script>
<!-- Jump to section when clicking anchor -->
<script async src="js/jump-section.js" defer></script>
<!-- Aos style library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156772003-2" defer></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-156772003-2');
</script>