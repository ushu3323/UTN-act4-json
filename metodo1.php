<?php
  $json = <<<EOD
  [
    {
      "id": 1,
      "nombre": "Damita",
      "apellido": "Nisius",
      "estudios": [
        "Manhattanville College",
        "Pyongtaek University ",
        "Oregon College of Arts and Crafts"
      ]
    }, {
      "id": 2,
      "nombre": "Luz",
      "apellido": "Gateley",
      "estudios": [
        "Ave Maria University",
        "Bethlehem University",
        "Ashland University"
      ]
    }, {
      "id": 3,
      "nombre": "Heida",
      "apellido": "Folling",
      "estudios": [
        "Corporación Universitaria Tecnológica de Bolivar",
        "Izmir Institute of Technology",
        "Universidad Nacional de Lanus"
      ]
    }, {
      "id": 4,
      "nombre": "Linus",
      "apellido": "Pentlow",
      "estudios": [
        "The Corcoran College of Art",
        "Universidad Autónoma Metropolitana",
        "University of Connecticut"
      ]
    }
  ]
  EOD;


  $data = json_decode($json); // Parsear el contenido del JSON a un objeto equivalente en PHP


  /* ---------- LISTAR PERSONAS --------- */

  echo "<h1>Listado de personas: Metodo 1</h1>";
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