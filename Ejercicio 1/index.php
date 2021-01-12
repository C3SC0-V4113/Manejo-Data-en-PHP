<?php

echo 'Un texto de una linea
varias lineas
comillas simples \' backslash \\ continuar con más texto 
$variable';

$name='CESCO';

/*
*Usando las comillas dobles puedes
*insertar variables
directamente
*/

echo "<br>Mi nombre es $name<br>";

$cursos=[
    'backend'=>[
        'PHP','Laravel'
    ]
];

/*
*Asi se escribe entre corchetes
*la busqueda de datos
*más complejos
*/

echo "{$cursos['backend'][1]}<br>";

/**
 * Veamos con las clases
 * es más complejo
 */

 class Usuario{
     public $name = 'Franciso José';
 }

 $user= new Usuario;

 echo "$user->name quiere aprender {$cursos['backend'][1]}";