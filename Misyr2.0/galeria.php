<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo22.png" type="image/x-icon">
  <meta name="description" content="Site Maker Description">
  <title>Proyectos Especificos</title>
  <link rel="stylesheet" href="assets/ProyectoGaleria/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/tether/tether.min.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/theme/css/style.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/gallery/style.css">
  <link rel="stylesheet" href="assets/ProyectoGaleria/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/mobirise/css/estilos.css" type="text/css">




</head>
<body>

<section class="menu cid-qObvTmrP8r" once="menu" id="menu1-2n">
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

<section class="engine"><a href="https://mobirise.ws/f">easy site maker</a></section><section class="header9 cid-qPvQMMeYL5 mbr-fullscreen" id="header9-2w">
  <?php
        require_once 'Datos/jsonProyecto.php';
        if (isset($_GET['id'])==false) {
           $numeroServicio = 0;
        }else{
          $numeroServicio = $_GET['id'];
        }
        if ($numeroServicio < 0 || $numeroServicio > sizeOf($arraylistProyecto)) {
            $numeroServicio = 0;
        }
        if (is_numeric($numeroServicio) ==false) {
            $numeroServicio = 0;
        }
         //print_r("<h1>".$arraylistProyecto[$numeroServicio]->id_proyecto."</h1>");
  ?>
    <div class="container">
        <div class="media-container-column mbr-white col-md-8">
            <h1 class="mbr-section-title align-left mbr-bold pb-3 mbr-fonts-style display-1">
                <?php print_r($arraylistProyecto[$numeroServicio]->nombre_proyecto); ?>
            </h1>
            <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-2">
               <?php print_r($arraylistProyecto[$numeroServicio]->direccion); ?>
            </h3>
            <p class="mbr-text align-left pb-3 mbr-fonts-style display-5">
              <?php print_r($arraylistProyecto[$numeroServicio]->descripcion_proyecto); ?>
            </p>

        </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="mbr-section article content10 cid-qPvQTYg9yT" id="content10-2y">
    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 100%;">
            <div class="section-text align-center mbr-white mbr-fonts-style display-2">
                    GALERIA</div>
            <hr class="line" style="width: 100%;">
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-qPvQPIAQPi" id="gallery3-2x">
    <?php for ($i=0; $i < 3; $i++) {
      print_r("<br>");
    } ?>
   <div>
        <div class="align-center">
          <div class="mbr-gallery-row">
            <div class="mbr-gallery-layout-default">
                  <?php
                     $directorio = opendir("assets/galeria/".$arraylistProyecto[$numeroServicio]->nombre_carpeta);
                     $contadorFotos = 0;
                     while($foto = readdir($directorio)){
                     if($foto!="." && $foto!=".."){
                   ?>
                    <div class="mbr-gallery-item mbr-gallery-item--p1">
                      <div href="#lb-gallery3-2x" data-slide-to="<?php print_r($contadorFotos)?>" data-toggle="modal">
                        <img src="<?php print_r("visor.php?src=assets/galeria/".$arraylistProyecto[$numeroServicio]->nombre_carpeta."/".$foto);?>" alt="">
                        <span class="icon-focus"></span>
                      </div>
                    </div>
                  <?php
                   $contadorFotos = $contadorFotos+1;
                     }

                     }
                  ?>
              </div>
            </div>
            <div class="clearfix">
            </div>
          </div>
          <!-- Lightbox -->
          <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide align-center" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-2x">
            <div class="modal-dialog">
              <div class="modal-content ">
                <div class="modal-body">
                  <div class="carousel-inner">
                    <?php
                        $directorio = opendir("assets/galeria/".$arraylistProyecto[$numeroServicio]->nombre_carpeta);
                        $contadorFotos2 = 0;
                        while($foto = readdir($directorio)){
                        if($foto!="." && $foto!=".."){
                         if($contadorFotos2==0){
                           print_r("<div class='carousel-item active'>");
                         }else{
                           print_r("<div class='carousel-item'>");
                         }
                     ?>
                          <img src="<?php print_r("assets/galeria/".$arraylistProyecto[$numeroServicio]->nombre_carpeta."/".$foto);?>" alt="">
                        </div>
                    <?php
                       $contadorFotos2 = $contadorFotos2 +1;
                      }
                    }
                    ?>


                  </div>
                  <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery3-2x">
                    <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                    <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery3-2x">
                      <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                    <a class="close" href="#" role="button" data-dismiss="modal">
                      <span class="sr-only">Close</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

</section>




  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/gallery/player.min.js"></script>
  <script src="assets/gallery/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>


</body>
</html>
