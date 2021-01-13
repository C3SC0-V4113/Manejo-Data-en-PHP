<?php

echo "<h1>Arrays</h1>";

echo "<h2>Arrays Simples</h2>";

/**
 * Arrays Simples
 */

$cursos=['javascript','laravel','php','vuejs'];

echo '<ul>';
foreach ($cursos as $key => $curso) {
    echo "<li>[$key]$curso</li>";
}
echo '</ul>';

/*
echo '<ul>';
for ($i=0; $i < count($cursos); $i++) { 
    echo "<li>[$i]$cursos[$i]</li>";
}
echo '</ul>';
*/

/**
 * Arrays Dobles
 */
echo "<h2>Arrays Dobles</h2>";

$courses=[
    'frontend'=>'javascript',
    'framework'=>'laravel',
    'backend'=>'php'
];

echo '<ul>';
foreach ($courses as $key => $curso) {
    echo "<li>[$key]$curso</li>";
}
echo '</ul>';

/**
 * Usando array_walk con el
 * objetivo de iterar
 */

function upper($curso, $llave){
    echo '<li>'.strtoupper($curso).": $llave".'</li>';
}

echo '<ul>';
array_walk($courses,'upper');
echo '</ul>';