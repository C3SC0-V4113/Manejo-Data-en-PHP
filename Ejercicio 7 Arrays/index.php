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

/**
 * funciones de array complejo
 */

//Existe cierta llave?
 if (array_key_exists('frontend', $courses)) {
     echo '<p>La llave existe</p>';
 } else {
    echo '<p>La llave no existe</p>';
 }


 //Existe cierto valor?
 if (in_array('javascript', $courses)) {
    echo '<p>El valor existe</p>';
} else {
   echo '<p>El valor no existe</p>';
}

//Que llaves hay?
echo '<ul>';
foreach (array_keys($courses) as $key => $curso) {
    echo "<li>$curso</li>";
}
echo '</ul>';

//Que valores hay?
echo '<ul>';
foreach (array_values($courses) as $key => $curso) {
    echo "<li>$curso</li>";
}
echo '</ul>';

/**
 * Ejercicio con array_walk
 */

 $alumnos=[
     [
         'nombre'=>'Francisco Valle',
         'nota'=>9
     ],
     [
         'nombre'=>'Karla Ramos',
         'nota'=>7
     ],
     [
         'nombre'=>'Linus Torvald',
         'nota'=>4
     ]
 ];

 function Aprobacion($alumnos){
     //Se usan corchetes por tener una capa de complejidad mayor
     if ($alumnos['nota']>=6) {
         echo "<p>El alumno {$alumnos['nombre']} ha aprobado</p>";
     } else {
        echo "<p>El alumno {$alumnos['nombre']} ha reprobado</p>";
     }
 }

 array_walk($alumnos,'Aprobacion');