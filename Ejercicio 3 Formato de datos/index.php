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
  $factura=str_pad($codigo, 8, "#",STR_PAD_BOTH);

  echo $factura;

  /**
   * Eliminador de tags para
   * proteger paginas de
   * ataques
   */

   $textohtml='<h1>Papu, soy o no soy grande?</h1>';
   echo $textohtml;
   echo strip_tags($textohtml);

   /**
    * Datos de distintos bytes
    */

    $españita="PHP es un lenguaje, año 2021, programación";

    $ESPANIA = strtoupper($españita); //monobyte
    $ESPAÑA = mb_strtoupper($españita); //multibyte

    echo "<p>$ESPANIA</p>";
    echo "<p>$ESPAÑA</p>";