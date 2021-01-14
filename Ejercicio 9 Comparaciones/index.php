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

/**
 * UNIONES
 */

echo '<h1>UNIONES</h1>';

echo '<h1>Union por suma</h1>';

/**
 * Para que no se sobreescriban elementos
 * con la misma clave, estas se
 * cambian manualmente
 */

$frontend=[
    'frontend'=>'javascript'
];
$backend=[
    'backend'=>'php',
    'framework'=>'laravel'
];

/**
 * Usando una suma de arreglos
 */

echo '<ul>';
foreach (($frontend+$backend) as $key => $value) {
    echo "<li>$value</li>";
}
echo '</ul>';

echo '<h1>Union por Merge</h1>';

/**
 * Otro tipo de Union
 */
$frontend=['javascript'];
$backend=['php','laravel'];

echo '<ul>';
foreach (array_merge($frontend,$backend) as $key => $value) {
    echo "<li>$value</li>";
}
echo '</ul>';

/**
 * Llaves pero son string
 */

 /**
 * Otro tipo de Union
 */
$frontend=['javascript'];
$backend=['php','laravel'];

echo '<ol>';
foreach (array_merge_recursive($frontend,$backend) as $key => $arreglo) {
    foreach ($arreglo as $key => $value) {
        echo "<li>$value</li>";
    }
}
echo '</ol>';