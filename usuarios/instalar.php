<?php

$config = include 'conexion.php';

try {
  $conexion = new PDO('mysql:bzahw6mgdcofk8jxymty-postgresql.services.clever-cloud.com=' . $config['bzahw6mgdcofk8jxymty']['bzahw6mgdcofk8jxymty-postgresql.services.clever-cloud.com'], $config['bzahw6mgdcofk8jxymty']['uis8nrtriax7jkp7tmp4'], $config['bzahw6mgdcofk8jxymty']['2h08wkUqs9aRpdEcQlBT'], $config['bzahw6mgdcofk8jxymty']['options']);
  $sql = file_get_contents("data/prueba.sql");
  
  $conexion->exec($sql);

  echo "La base de datos y la tabla de alumnos se han creado con éxito.";
} catch(PDOException $error) {
  echo $error->getMessage();
}