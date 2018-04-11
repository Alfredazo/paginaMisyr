<?php
  /*Variable Array*/

$json = '[
          {
            "titulo":"Soy el titulo1",
            "mensaje":"Soy el mensaje1"
          },
          {
            "titulo":"Soy el titulo2",
            "mensaje":"Soy el mensaje2"
          }
        ]';


  $arraylistServicios = json_decode($json);
  return $arraylistServicios;
 ?>
