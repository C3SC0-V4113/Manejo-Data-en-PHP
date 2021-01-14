<?php

//Sort normal

echo '<h1>Sort normal</h1>';

$courses=['php','javascript','laravel'];
sort($courses); //rsort() para reversible

echo '<ul>';
foreach ($courses as $key => $curso) {
    echo "<li>$curso</li>";
}
echo '</ul>';

//Sort por llaves

echo '<h1>Sort por llaves</h1>';

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

echo '<h1>Usando Slice</h1>';

echo '<ul>';
foreach (array_slice($cursos,1) as $key => $curso) {
    echo "<li>$curso</li>";
}
echo '</ul>';

/**
 * Usando chunk, este divide el arreglo
 * en n cantidad de arreglos
 */

echo '<h1>Usando Chunk</h1>';

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

 /**
  * array_shift para eliminar solo
  * el primer elemento de
  * un array
  */

echo '<h1>Usando Shift</h1>';
array_shift($personas);
echo '<ul>';
foreach ($personas as $key => $persona) {
    echo "<li>$persona</li>";
}
echo '</ul>';

/**
 * Utilizando Pop para eliminar
 * el ultimo elemento
 */

echo '<h1>Usando Pop</h1>';

$personas=['Francisco','Italo','Karla','Cecilia','Juan','Carlos'];
array_pop($personas);
echo '<ul>';
foreach ($personas as $key => $persona) {
    echo "<li>$persona</li>";
}
echo '</ul>';

/**
 * utilizando unshift para
 * agregar elementos
 * al principio de
 * un arreglo
 */

echo '<h1>Usando unshift</h1>';

$personas=['Francisco','Italo','Karla','Cecilia','Juan','Carlos'];
array_unshift($personas,'Olinda','Carolina');
echo '<ul>';
foreach ($personas as $key => $persona) {
    echo "<li>$persona</li>";
}
echo '</ul>';

/**
 * Utilizando push para agregar
 * elementos al final de
 * un arreglo
 */

echo '<h1>Usando push</h1>';

$personas=['Francisco','Italo','Karla','Cecilia','Juan','Carlos'];
array_push($personas,'Olinda','Carolina');
echo '<ul>';
foreach ($personas as $key => $persona) {
    echo "<li>$persona</li>";
}
echo '</ul>';

/**
 * Utilizando flip para intercambiar
 * valores por las llaves
 */

echo '<h1>Usando flip</h1>';

 $persons=[
     'Valle'=>'Francisco',
     'Valle'=>'Karla',
     'Morales'=>'Italo',
     'Ramos'=>'Cecilia'
];

echo '<ul>';
foreach ($persons as $key => $persona) {
    echo "<li>$persona</li>";
}
echo '</ul>';

echo '<ul>';
foreach (array_flip($persons) as $key => $persona) {
    echo "<li>$persona</li>";
}
echo '</ul>';