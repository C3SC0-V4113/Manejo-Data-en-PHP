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