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

 /**
  * array_shift para eliminar solo
  * el primer elemento de
  * un array
  */
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