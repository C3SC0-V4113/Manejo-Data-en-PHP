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

var_dump(array_chunk($courses,3));

//Elimina el primer elemento y lo retorna
array_shift($courses);