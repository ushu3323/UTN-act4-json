<?php

  /* ------- LEER CONTENIDO DE UN ARCHIVO JSON -------- */

  $filename = "data.json"; // Nombre del archivo JSON
  
  // Se obtiene la longitud del contenido del archivo, utilizado en la linea linea 14
  $file_length = filesize($filename);

  // El segundo parametro "r" indica que se desea abrir el archivo en modo "solo lectura"
  $file = fopen($filename, "r");

  // Se lee el contenido del archivo JSON
  $json = fread($file, $file_length);


  // Desde aqui, se utiliza el mismo codigo que en el metodo 1
  /* ---------- LISTAR PERSONAS --------- */

  $data = json_decode($json);

  echo "<h1>Listado de personas: Metodo 2</h1>";
  echo "<a href='index.php'>Volver</a>";

  echo "<ul>";
  for ($i=0; $i < count($data); $i++) { 
    $p = $data[$i];
    
    /*
      $p es un Object que representa a una persona tiene los siguientes campos:
      id
      nombre
      apellido
      estudios
    */
    
    echo "<li><strong>Nombre:</strong> ".$p->id."</li>";
    echo "<li><strong>Nombre:</strong> ".$p->nombre."</li>";
    echo "<li><strong>Edad:</strong> ".$p->apellido."</li>";

    // Listar los estudios de $p
    echo "<li><strong>Estudios:</strong></li>";
    // Lista anidada
    echo "<ul>";
    for ($j=0; $j < count($p->estudios); $j++) {
      echo "<li>".$p->estudios[$j]."</li>";
    }
    echo "</ul>";

    echo "<hr>"; // Linea divisoria
  }
  echo "</ul>";
?>