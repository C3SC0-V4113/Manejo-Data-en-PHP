<?php

$courses=['javascript','php'];
$wishes=['php','laravel','javascript','vuejs'];

echo '<h1>Diferencia entre arrays</h1>';

echo '<ul>';
foreach (array_diff($wishes,$courses) as $key => $value) {
    echo "<li>$value</li>";
}
echo '</ul>';

/**
 * Diferencia de arrays númericas
 */

echo '<h1>Diferencia entre arrays numericas</h1>';
$arrayA=[1,2,3,4,5];
$arrayB=[3,4,5,6,7];

echo '<ul>';
foreach (array_diff($arrayA,$arrayB) as $key => $value) {
    echo "<li>$value</li>";
}
echo '</ul>';


/**
 * Diferencias usando array_diff_assoc
 * para los valores y claves
 */

echo '<h1>Diferencia entre arrays y sus claves</h1>';

$colores1=[
    'a'=>'amarillo',
    'v'=>'verde',
    'az'=>'azul',
    'r'=>'rojo'
];

$colores2=[
    'a'=>'anaranjado',
    'v'=>'verde',
    'b'=>'blanco',
    'o'=>'rojo',
    'n'=>'negro'
];

echo '<ul>';
foreach (array_diff_assoc($colores2,$colores1) as $key => $value) {
    echo "<li>$value</li>";
}
echo '</ul>';