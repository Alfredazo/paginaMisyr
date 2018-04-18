<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Proyectos</title>
  </head>
  <body>
    <div class="row">
      <?php
       $directorio = opendir("assets/images/fotosServicios");
       while($foto = readdir($directorio)){
            if($foto!="." && $foto!=".."){
               $ruta = "visor.php?src=assets/images/fotosServicios/".$foto;
               $ruta_grande = "assets/images/fotosServicios/".$foto;
      ?>
      <div class="col l4 gallery">
      <a href="<?php echo  $ruta_grande?>" data-lightbox="roadtrip"><img src="<?php echo $ruta?>"/></a>
      </div>
      <?php
       }
       }
      ?>
    </div>
  </body>
</html>
