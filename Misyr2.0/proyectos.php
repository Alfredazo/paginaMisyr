<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo22.png" type="image/x-icon">
  <meta name="description" content="Website Builder Description">
  <title>Proyectos</title>
  <link rel="stylesheet" href="assets/ProyectoGaleria/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/tether/tether.min.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/theme/css/style.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/mobirise/css/mbr-additional.css" type="text/css">

</head>
<body>
  <section class="menu cid-qObvTmrP8r" once="menu" id="menu1-2m">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">

                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="https://mobirise.com">MAESTRANZA MISYR</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.com">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.com">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        About Us
                    </a>
                </li></ul>

        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.ws/d">best website software</a></section><section class="cid-qPvO2wrCZk mbr-fullscreen mbr-parallax-background" id="header2-2o">



    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(118, 118, 118);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Proyectos</h1>

                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    Click any text to edit or style it. Select text to insert a link. Click blue "Gear" icon in the top right corner to hide/show buttons, text, title and change the block background. Click red "+" in the bottom right corner to add a new block. Use the top left menu to create new pages, sites and add themes.
                </p>

            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="features3 cid-qPvOKkvF0I" id="features3-2t">
    <div class="container">
      <?php
         require_once 'Datos/jsonProyecto.php';
         $contadorInterno = 1;
         for($i=0; $i < sizeof($arraylistProyecto);$i++) {
           if ($i==0) {
             print_r('<div class="media-container-row">');
           }
           $contadorInterno = $contadorInterno + 1;
           /* REALIZAR MATRIZ PARA VERIFICAR LOS NUMEROS
               0  1 2
               3  4 5
               6  7 8
               Donde la fila izquierda es la empezada del div y la fila derecha es la terminada ejemplo (Inicio:0 - Final:2)
          */
           if ($i==3) {
             $contadorInterno = 1;
             print_r('<div class="media-container-row">');
           }
      ?>
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php print_r($arraylistProyecto[$i]->url_imagen);?>" alt="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            <?php print_r($arraylistProyecto[$i]->nombre_proyecto);?>
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php print_r($arraylistProyecto[$i]->descripcion_breve);?>
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="galeria.php?id=<?php print_r($arraylistProyecto[$i]->id_proyecto);?>" class="btn btn-primary display-4">
                            Saber Más
                        </a>
                    </div>
                </div>
            </div>
        <!-- REALIZAR MATRIZ PARA VERIFICAR LOS NUMEROS
                          0  1 2  1 2 3
                          3  4 5  4 5 6
                          6  7 8  7 8 9
                          Donde la fila izquierda es la empezada del div y la fila derecha es la terminada ejemplo (Inicio:0 - Final:2)
                    -->
          <?php
            $valorPaso = $i+1;
            if ($valorPaso%3==0) {
              print_r('</div>');
            }
          ?>
      <?php } ?>
    </div>
</section>











  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>


</body>
</html>
