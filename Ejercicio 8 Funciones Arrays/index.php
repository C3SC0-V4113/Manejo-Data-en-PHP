<?php

//Sort normal

$courses=['php','javascript','laravel'];
sort($courses); //rsort() para reversible

echo '<ul>';
foreach ($courses as $key => $curso) {
    echo "<li>$curso</li>";
}
echo '</ul>';

//Sort por llaves

$cursos=[
    10=>'php',
    100=>'javascript',
    1000=>'laravel'
];

ksort($cursos); //krsort(es reversible)

echo '<ul>';
foreach ($cursos as $key => $curso) {
    echo "<li>$curso</li>";
}
echo '</ul>';

/**
 * Usando slice para quitar
 * n cantidad de porciones
 */

echo '<ul>';
foreach (array_slice($cursos,1) as $key => $curso) {
    echo "<li>$curso</li>";
}
echo '</ul>';

/**
 * Usando chunk, este divide el arreglo
 * en n cantidad de arreglos
 */
$personas=['Francisco','Italo','Karla','Cecilia','Juan','Carlos'];
$n=2;
foreach (array_chunk($personas,$n) as $key => $arreglo) {
    echo '<ol>';
    foreach ($arreglo as $key => $value) {
        echo "<li>$value</li>";
    }
    echo '</ol>';
}

/**
 * Practicando distintos metodos más
 * complejos de las arrays
 */