<?php

/**
 * Probando la funcion de
 * dividir un string en
 * caracteres
 */

$data='Estudio PHP';

echo $data[0] . '<br>';

/**
 * Probando la opcion de
 * subdividir un
 * string
 */

$post="Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, consectetur? Error est numquam, quis cumque laborum dignissimos voluptatem ex. Praesentium sunt quae facere minima at saepe magnam aperiam debitis perferendis?";

$extraccion=substr($post,0,20);

echo "$extraccion... [ver más]<br>";

/**
 * Creando más ejemplos cuquis
 * dividiendo un string
 * en piezas con un 
 * divisor
 */

 $data='javascript, php, laravel';
 $tags=explode(', ',$data);

 echo '<ul>';
 foreach ($tags as $key => $palabra) {
     # code...
     echo "<li>$palabra</li>";
 }
 echo '</ul>';

 /**
  * Convirtiendo una array
  * en n cantidad de
  * strings
  */

  $cursos=['javascript','php','laravel'];

  $implosion = implode(', ',$cursos);

  echo "<p>$implosion</p>";

  /**
   * Comprobando la funcion trim
   * para eliminar espacios
   * en blanco
   */

   $course="  Curso de PHP   ";
   $course=trim($course);
   echo "<p>Quiero aprender $course, y más</p>";