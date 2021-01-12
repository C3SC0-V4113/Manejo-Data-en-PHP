<?php

/**
 * Alterando cadenas de texto
 */
$texto="PHP es UN LENGUAJE";

echo $texto;

$minuscula=strtolower($texto);
$mayuscula=strtoupper($texto);
$primerelementomayuscula=ucfirst($minuscula);
$primerelementominuscula=lcfirst($mayuscula);

echo "<p>$minuscula</p>";
echo "<p>$mayuscula</p>";
echo "<p>$primerelementomayuscula</p>";
echo "<p>$primerelementominuscula</p>";

/**
 * Reemplazando caracteres en
 * cadenas de texto
 */

 $slug=str_replace(' ','-',$minuscula);     //los slug van en minusculas

 echo "<p>$slug</p>";

 /**
  * Modificacion de cadenas
  * de texto
  */

  $codigo=39;
  $factura=str_pad($codigo, 8, "#");

  echo $codigo;