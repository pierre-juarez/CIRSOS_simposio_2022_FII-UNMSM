<!DOCTYPE html>
<html lang="es">
   <?php require('./helpers/helpers.php'); ?> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="CODITEX, UNMSM, FII, UEI">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Pierre Juarez U.">
    <title> <?= getSiglasEvento(); ?> </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
    <!-- CSS Personalizado -->    
    <link rel="stylesheet" href="css/personalized.css?v=<?php echo rand(); ?>" type="text/css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/logo-unmsm.png" type="image/x-icon">

  </head>
  <body>

    <!-- Header Section Start -->
    <header id="inicio" data-stellar-background-ratio="0.5">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo h-100px">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a class="navbar-brand"><img class="img-fulid img_logo" src="img/logo_cirsos.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#inicio">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#nosotros">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#ejes">Ejes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#ponentes">Ponentes</a>
              </li>
              <li class="nav-item">
                <a href="#programa" class="nav-link page-scroll">Programa</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#trabajos">Trabajos</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#precios">Precios</a>
              </li>
              
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#actividades">Actividades</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contacto">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#">Inscripciones</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="#inicio">Inicio</a>
            </li>
            <li>
              <a class="page-scroll" href="#nosotros">Nosotros</a>
            </li>
            <li>
              <a class="page-scroll" href="#ejes">Ejes</a>
            </li>            
            <!-- <li>
              <a class="page-scroll" href="#trabajos">Trabajos</a>
            </li> -->
            <li>
              <a class="page-scroll" href="#precios">Precios</a>
            </li>
            <li>
              <a class="page-scroll" href="#ponentes">Ponentes</a>
            </li>
            <li>
              <a class="page-scroll" href="#programa">Programa</a>
            </li>
            <!-- <li >
              <a class="page-scroll" href="#actividades">Actividades</a>
            </li> -->
            <li>
              <a class="page-scroll" href="#contacto">Contacto</a>
            </li>
            <li>
              <a class="page-scroll" href="#">Inscripciones</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s"> <span class="subtitle_event"><?= onlyEvent(); ?></span> <br> <?= getNombreSistema(); ?> </h1>              
              <a href="#" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Inscripciones</a>
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End --> 

    <!------ ------- Counter Start ------- ------> 

    <section id="contador_panel" class="video-promo section-padding text-center" style="background: url(carpeta_index/assets/img/img_bg_3.jpg);background-size: cover;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <h2 style="color: #fff;" class="mb-4 mt-5">¡Ya falta poco...!</h2>
            <div id="contador"></div>             
          </div>
        </div>
      </div>
    </section>

    <!------ ------- Counter End ------- ------> 

    <!-- Timer Section Start -->

    <section id="timer">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <h2 style="color: #fff;">¡Hemos iniciado!</h2>
                <h5>El evento ya inició...</h5><p></p>
                <a href="#" class="btn btn-common" rel="nofollow">Ingresar ahora</a>
            </div>
        </div>
      </div>
    </section>

    <!-- Timer Section End -->

    <!-- nosotros Section Start -->
    <section id="nosotros" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Nosotros</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">La competitividad global y la dinámica empresarial dependen de una eficiente gestión de la cadena de suministro, por lo que es preocupación tanto de la academia como de la industria el encontrar y difundir prácticas que permitan su mejor desempeño bajo el enfoque de la economía circular y sostenibilidad, la cual comprende aristas como la económica, social, ambiental y tecnológica; es bajo esta premisa que la Unidad de Postgrado de la Facultad de Ingeniería Industrial así como el Grupo de Investigación Producción más Limpia se proponen brindar un evento que permita difundir dicho conocimiento integrando tanto a académicos, profesionales, empresarios y estudiantes.</p>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lnr lnr-hand"></i>
              </div>
              <h4>Misión</h4>
              <p>Ser un evento reconocido a nivel nacional e  internacional  como impulsor y difusor de conocimiento y buenas prácticas en la gestión de la cadena de suministro bajo cánones de la economía circular y sostenibilidad,  producto de investigaciones y experiencias provenientes de académicos, profesionales, empresarios y estudiantes.</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon">
                <i class="lnr lnr-eye"></i>
              </div>
              <h4>Visión</h4>
              <p>Promover la gestión eficiente y eficaz de la cadena de suministro bajo un enfoque de economía circular y sostenibilidad a través de un evento que impulse la investigación y las buenas prácticas de gestión y procesos las cuales serán de beneficio para los académicos, profesionales, empresarios y estudiantes.</p>
            </div>
          </div>         
        </div>
      </div>
    </section>
    <!-- nosotros Section End -->

    <!-- ejes Section Start -->
    <section id="ejes" class="section" data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Ejes temáticos</h2>
          <hr class="lines">        
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="container">
              <div class="row">
                 <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-rocket"></i>
                    </span>
                    <div class="text">
                      <h4>Cadena de Suministro Circular y Sostenible bajo la perspectiva Ambiental y Social.</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-rocket"></i>
                    </span>
                    <div class="text">
                      <h4>Cadena de Suministro Circular y Sostenible bajo la perspectiva Tecnológica e Innovación.</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                  </div>                  
              </div>
            </div>
          </div>        
        </div>
      </div>
    </section>
    <!-- ejes Section End -->    

     <!-- Ponentes Section Start -->
    <section id="ponentes" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Nuestros ponentes</h2>
          <hr class="lines">
          <p class="section-subtitle">Contamos con la presencia de reconocidos ponentes del ámbito profesional y académico con vasta experiencia en la Gestión de las Cadenas de Suministros</p>
        </div>
        <div class="row my-5">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/ponentes/ponente1.png" alt="Ponente 1">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Dra. Alejandra Efrón</h4>
                  <p>Cconsultora Internacional Trilingüe</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-envelope"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
            <img src="img/ponentes/ponente2.png" alt="Ponente 2">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Prof. Edgar Rodriguez</h4>
                  <p>Prof. Asociado Universidad de Colombia</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-envelope"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
            <img src="img/ponentes/ponente3.png" alt="Ponente 3">
              <div class="team-details">
                <div class="team-inner">                  
                  <h4 class="team-title">Dr. Mario <br> Chong</h4>
                  <p>Miembro del Centro de Investigación (CUIP)</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-envelope"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
            <img src="img/ponentes/ponente4.png" alt="Ponente 4">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Ing. Rodolfo <br> Lopez</h4>
                  <p>Mg. Ingeniería <br> Industrial</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-envelope"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        
        </div>
        <div class="row my-5">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/ponentes/ponente5.png" alt="Ponente 5">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Ing. Paulo Laguardia</h4>
                  <p>Ingeniero Ambiental <br> (PUCP)</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-envelope"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
            <img src="img/ponentes/ponente6.png" alt="Ponente 6">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Ing. Brian <br> Dwye</h4>
                  <p>Consultor <br> Internacional</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-envelope"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
            <img src="img/ponentes/ponente7.png" alt="Ponente 7">
              <div class="team-details">
                <div class="team-inner">                  
                  <h4 class="team-title">Ing. Caroline Rodrigues</h4>
                  <p> Líder del Grupo de Investigación "SINERGIA"</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-envelope"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
            <img src="img/ponentes/ponente8.png" alt="Ponente 8">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Ing. Jorge <br> Heyne</h4>
                  <p>Socio – Director <br> de Synqos</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="mailto:jheyne@synqos.com"><i class="fa fa-envelope"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>
    </section>
    <!-- Ponentes Section End -->

    <!-- Programa Section Start -->
    <section id="programa" class="section">
      <div class="container wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

        <div class="section-header text-center mt-5">
          <h2  class="section-title wow fadeInDown" data-wow-delay="0.3s">Programa de Eventos</h2>
          <p class="text-black">Programa tentativo del SIMPOSIO 2022 <br> <span>(Sujeto a variaciones)</span></p>
          
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active show" href="#day-1" role="tab" data-toggle="tab" aria-selected="false">03/06</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#day-2" role="tab" data-toggle="tab" aria-selected="false">04/06</a>
            </li>        
        </ul>

        <div class="tab-content row justify-content-center">

          <!-- Day 1 -->

          <div role="tabpanel" class="col-lg-9 tab-pane fade active show" id="day-1">

            <div class="row programa-item">
              <div class="col-md-2"><time>09:00 a.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4 style="text-align: justify;">Inauguración del Simposio <br> <span>[ Autoridades de la Facultad ]</span> </h4>
              </div>
            </div>
            
            <div class="row programa-item">
              <div class="col-md-2"><time>09:30 a.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "(cargando...)"<br><span><a href="">[ Demostenes Perez ]</a></span></h4>
              </div>
            </div>   

            <div class="row programa-item">
              <div class="col-md-2"><time>10:00 a.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "Gestión de la Cadena de Suministro y Estándares Internacionales de Sostenibilidad en la Industria del Café"<br><span><a href="#">[ Prof. Edgar Guillermo Rodríguez Guevara  ]</a></span></h4>
              </div>
            </div>   

            <div class="row programa-item">
              <div class="col-md-2"><time>10:30 a.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "Una vía rápida para la circularidad: Digitalización"<br><span><a href="#">[ Ing. Paulo Laguardia ]</a></span></h4>
              </div>
            </div>   

            <div class="row programa-item">
              <div class="col-md-2"><time>11:00 a.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "(cargando...)"<br><span><a href="#">[ Kim Hua Tan ]</a></span></h4>
              </div>
            </div>   

            <div class="row programa-item">
              <div class="col-md-2"><time>12:00 p.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Almuerzo</span></h4>
              </div>
            </div>

            <div class="row programa-item">
              <div class="col-md-2"><time>2:00 p.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "(cargando...)"<br><span><a href="ponentes/alfredo-temoche.php" target="_blank">[ Jorge Ueyonara ]</a></span></h4>
              </div>
            </div>

            <div class="row programa-item">
              <div class="col-md-2"><time>2:30 p.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "(cargando...)"<br><span><a href="ponentes/alfredo-temoche.php" target="_blank">[ Jorge Ueyonara ]</a></span></h4>
              </div>
            </div>

            <div class="row programa-item">
              <div class="col-md-2"><time>3:00 p.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "(cargando...)"<br><span><a href="ponentes/alfredo-temoche.php" target="_blank">[ Jorge Ueyonara ]</a></span></h4>
              </div>
            </div>

            <div class="row programa-item">
              <div class="col-md-2"><time>3:30 p.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Break</span></h4>
              </div>
            </div>

            <div class="row programa-item">
              <div class="col-md-2"><time>4:00 p.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "La economía circular, la cadena de suministro y el mundo actual." <br><span><a href="" >[ Ing. Rodolfo Lopez Cerdan ]</a></span></h4>
              </div>
            </div>

            <div class="row programa-item">
              <div class="col-md-2"><time>4:30 p.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4 style="text-align: justify;">Ponencia: "(cargando...)"<br><span><a href="ponentes/catherine-herrera.php" target="_blank">[ Mauro Sampaio ]</a></span></h4>                               
              </div>
            </div>

            <div class="row programa-item">
              <div class="col-md-2"><time>5:00 p.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4 style="text-align: justify;">Ponencia: "Oportunidades para las pequeñas unidades productoras de papa frente a los desafíos de la reactivación económica en el contexto de la COVID-19." <br><span><a href="#">[ Dr. Mario Chong ]</a></span></h4><br>                              
              </div>
            </div>

            <div class="row programa-item">
              <div class="col-md-2"><time>5:30 p.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Cierre</span></h4>
              </div>
            </div>
            
          </div>

          <div role="tabpanel" class="col-lg-9 tab-pane fade" id="day-2">

            <div class="row programa-item">
              <div class="col-md-2"><time>09:45 a.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4 style="text-align: justify;">Apertura <br> <span>[ Autoridades de la Facultad ]</span> </h4>
              </div>
            </div>
            
            <div class="row programa-item">
              <div class="col-md-2"><time>10:00 a.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "Economía Circular y la Gestión de las Relaciones la Cadena de Abastecimiento: uso de la Metodología de Respuesta Segmentada por Comportamiento"<br><span><a href="">[ Dra. Alejandra Efrón ]</a></span></h4>
              </div>
            </div>   

            <div class="row programa-item">
              <div class="col-md-2"><time>10:30 a.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "Modelo para universidades para realizar diagnósticos de eficiencia energética y descarbonización para PyMEs en Perú"<br><span><a href="#">[ Ing. Bryan Dwyer ]</a></span></h4>
              </div>
            </div>   

            <div class="row programa-item">
              <div class="col-md-2"><time>11:30 a.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "(cargando...)"<br><span><a href="#">[ Ing. Caroline Rodrigues Vaz ]</a></span></h4>
              </div>
            </div>   

            <div class="row programa-item">
              <div class="col-md-2"><time>11:00 a.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "(cargando...)"<br><span><a href="#">[ Ing. Jorge Heyne Anton ]</a></span></h4>
              </div>
            </div>   

            <div class="row programa-item">
              <div class="col-md-2"><time>12:00 p.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Almuerzo</span></h4>
              </div>
            </div>

            <div class="row programa-item">
              <div class="col-md-2"><time>2:00 p.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "(cargando...)"<br><span><a href="ponentes/alfredo-temoche.php" target="_blank">[ Julio Gamboa Escurra ]</a></span></h4>
              </div>
            </div>

            <div class="row programa-item">
              <div class="col-md-2"><time>2:30 p.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "(cargando...)"<br><span><a href="ponentes/alfredo-temoche.php" target="_blank">[ --------- ]</a></span></h4>
              </div>
            </div>

            <div class="row programa-item">
              <div class="col-md-2"><time>3:00 p.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Ponencia: "(cargando...)"<br><span><a href="ponentes/alfredo-temoche.php" target="_blank">[ Gyanendra Singh Sisodia ]</a></span></h4>
              </div>
            </div>      

            <div class="row programa-item">
              <div class="col-md-2"><time>3:30 p.m.</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo_unmsm_img.jpg">
                </div>
                <h4>Cierre</span></h4>
              </div>
            </div>
                       
          </div>

        </div>

      </div><!------ ------- end panel ------- ------> 
    </section>
    <!-- Programa Section End -->

    <!-- Portfolio Section -->
    <!-- <section id="trabajos" class="section">
     
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Portfolio</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">          
          <div class="col-md-12">
        
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                All 
              </a>
              <a class="filter btn btn-common" data-filter=".design">
                Design 
              </a>
              <a class="filter btn btn-common" data-filter=".development">
                Development
              </a>
              <a class="filter btn btn-common" data-filter=".print">
                Print 
              </a>
            </div>
            
          </div>

          
          <div id="portfolio" class="row">
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img1.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img1.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img2.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img2.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img3.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img3.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img4.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img4.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img5.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img5.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix print design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img6.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img6.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section> -->
    <!-- Portfolio Section Ends --> 

    <!-- Start Video promo Section -->
    <!-- <section class="video-promo section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="video-promo-content text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Watch Our Intro video</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci.</p>
                <a href="https://www.youtube.com/watch?v=IXoMDwh4Cq8" class="video-popup wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a>
              </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Video Promo Section -->

    <!-- Start precios Table Section -->
    <div id="precios" class="section precios-section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Tabla de Precios</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>

        <div class="row precios-tables">

        <div class="col-md-2 col-sm-6 col-xs-12"></div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="precios-table">
              <div class="precios-details">
                <h2>Gratuito</h2>
                <span>S/.0.00</span> 
                <ul class="ul-responsive">
                  <li> Acceso a la visualización de las ponencias vía Facebook Live</li>  <br><br>                 
                </ul>
              </div>
              <div class="plan-button">
                <a href="https://www.facebook.com/Industrial.UNMSM.Oficial" target="_blank" class="btn btn-common">Visitar</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="precios-table">
              <div class="precios-details">
                <h2>Pagado</h2>
                <span>S/. 50.00</span>
                <ul>
                  <li>Acceso a sala de conferencias</li>
                  <li>Preguntas al ponente</li>
                  <li>Repetición de las transmisiones</li>
                  <li>Certificado del Simposio</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Comprar ahora</a>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-6 col-xs-12"></div>

        </div>
      </div>
    </div>
    <!-- End precios Table Section -->

    <!-- Counter Section Start -->
    <div class="counters section" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row"> 
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="facts-item">   
              <div class="icon">
                <i class="lnr lnr-clock"></i>
              </div>             
              <div class="fact-count">
                <h3><span class="counter">143</span></h3>
                <h4>Horas Laborales</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="facts-item">   
              <div class="icon">
                <i class="lnr lnr-briefcase"></i>
              </div>            
              <div class="fact-count">
                <h3><span class="counter">237</span></h3>
                <h4>Proyectos completados</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="facts-item"> 
              <div class="icon">
                <i class="lnr lnr-user"></i>
              </div>              
              <div class="fact-count">
                <h3><span class="counter">450</span></h3>
                <h4>N° Clientes</h4>
              </div>
            </div>
          </div>         
        </div>
      </div>
    </div>
    <!-- Counter Section End -->

    <!-- testimonial Section Start -->
    <div id="testimonial" class="section" data-stellar-background-ratio="0.1">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="touch-slider owl-carousel owl-theme">
              <div class="testimonial-item">
                <img src="img/testimonial/customer1.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                  <h3>Jone Deam</h3>
                  <span>Fondor of Jalmori</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="img/testimonial/customer2.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                  <h3>Oidila Matik</h3>
                  <span>President Lexo Inc</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="img/testimonial/customer3.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                  <h3>Alex Dattilo</h3>
                  <span>CEO Optima Inc</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="img/testimonial/customer4.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                  <h3>Paul Kowalsy</h3>
                  <span>CEO & Founder</span>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>
    <!-- testimonial Section Start -->

    <!-- actividades Section -->
    <!-- <section id="actividades" class="section">
      
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Nuestras actividades</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 actividades-item">
            
            <div class="actividades-item-wrapper">
              <div class="actividades-item-img">
                <a href="#">
                  <img src="img/blog/img1.jpg" alt="">
                </a>                
              </div>
              <div class="actividades-item-text">                 
                <h3>
                  <a href="#">Exposiciones por parte de académicos y profesionales</a>
                </h3>              
              </div>
            </div>
            
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 actividades-item">
            
            <div class="actividades-item-wrapper">
              <div class="actividades-item-img">
                <a href="#">
                  <img src="img/blog/img2.jpg" alt="">
                </a>                
              </div>
              <div class="actividades-item-text">                 
                <h3>
                  <a href="#">Mesas de diálogo.</a>
                </h3>              
              </div>
            </div>
            
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 actividades-item">
            
            <div class="actividades-item-wrapper">
              <div class="actividades-item-img">
                <a href="#">
                  <img src="img/blog/img3.jpg" alt="">
                </a>                
              </div>
              <div class="actividades-item-text">                 
                <h3>
                  <a href="#">Publicación de Memorias del Simposio</a>
                </h3>              
              </div>
            </div>
            
          </div>

        </div>
      </div>
    </section> -->
    <!-- actividades Section End -->

    <!-- Contact Section Start -->
    <section id="contacto" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-us">
                <h3>Contáctanos</h3>
                <div class="contact-address">
                  <p>Calle Germán Amézaga N° 375 - Lima.</p>
                  <p class="phone">Phone: <span>(+94 123 456 789)</span></p>
                  <p class="email">E-mail: <br> <span>cirsos.fii@unmsm.edu.pe <br> informes_cirsos.fii@unmsm.edu.pe <br>finanzas_cirsos.fii@unmsm.edu.pe</span></p>
                </div>
                <div class="social-icons">
                  <ul>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-envelope"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-block">
                <form id="contactForm">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Pierre Juarez" required data-error="Por favor, ingrese un nombre">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="pierrejuarez@unmsm.edu.pe" id="email" class="form-control" name="name" required data-error="Por favor, ingrese un correo electrónico">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Requiero información" rows="8" data-error="Por favor, escriba un mensaje" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button text-center">
                        <button class="btn btn-common" id="submit" type="submit">Contactar</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>           
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>          
      <div class="container">
        <div class="row">
          <!-- Footer Links -->
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <ul class="footer-links">
              <li>
                <a href="#inicio">Inicio</a>
              </li>
              <li>
                <a href="#nosotros">Nosotros</a>
              </li>
              <li>
                <a href="#ejes">Ejes</a>
              </li>
              <li>
                <a href="#contacto">Contacto</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
              <p>Todos los derechos reservados &copy; 2022 - Desarrollado por <a rel="nofollow" target="_blank" href="http://industrial.unmsm.edu.pe/">UEI - FII</a></p>
            </div>
          </div>  
        </div>
      </div>
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
    
    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>     

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>    
    <script src="js/smoothscroll.js"></script>    
    <script src="js/jquery.slicknav.js"></script>     
    <script src="js/wow.js"></script>   
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script>
    <script src="js/simplyCountdown.min.js"></script>
    <script src="js/timer.js"></script>

  </body>
</html>