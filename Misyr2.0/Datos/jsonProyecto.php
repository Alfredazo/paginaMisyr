<?php
$json = '[
              {
                "id_proyecto":"0",
                "nombre_proyecto":"Proyecto 1",
                "descripcion_breve":"Esto es una breve descripción",
                "descripcion_proyecto":"Esto es una descripcion extensa",
                "url_imagen":"assets/galeria/proyecto1/01.jpg",
                "nombre_carpeta":"proyecto1"
              },
              {
                "id_proyecto":"1",
                "nombre_proyecto":"Proyecto 2",
                "descripcion_breve":"Esto es una breve descripción",
                "descripcion_proyecto":"Esto es una descripcion extensa",
                "url_imagen":"assets/galeria/proyecto1/01.jpg",
                "nombre_carpeta":"proyecto1"
              },
              {
              "id_proyecto":"2",
              "nombre_proyecto":"Proyecto 3",
              "descripcion_breve":"Esto es una breve descripción",
              "descripcion_proyecto":"Esto es una descripcion extensa",
              "url_imagen":"assets/galeria/proyecto1/01.jpg",
              "nombre_carpeta":"proyecto1"
            },{
            "id_proyecto":"3",
            "nombre_proyecto":"Proyecto 4",
            "descripcion_breve":"Esto es una breve descripción",
            "descripcion_proyecto":"Esto es una descripcion extensa",
            "url_imagen":"assets/galeria/proyecto1/01.jpg",
            "nombre_carpeta":"proyecto1"
          },
          {
            "id_proyecto":"4",
            "nombre_proyecto":"Proyecto 5",
            "descripcion_breve":"Esto es una breve descripción",
            "descripcion_proyecto":"Esto es una descripcion extensa",
            "url_imagen":"assets/galeria/proyecto1/01.jpg",
            "nombre_carpeta":"proyecto1"
          },
          {
          "id_proyecto":"5",
          "nombre_proyecto":"Proyecto 6 ",
          "descripcion_breve":"Esto es una breve descripción",
          "descripcion_proyecto":"Esto es una descripcion extensa",
          "url_imagen":"assets/galeria/proyecto1/01.jpg",
          "nombre_carpeta":"proyecto1"
         }
        ]';


  $arraylistProyecto = json_decode($json);
  return $arraylistProyecto;
 ?>
