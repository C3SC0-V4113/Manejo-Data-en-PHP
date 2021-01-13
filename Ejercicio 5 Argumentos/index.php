<?php

//Valores
function saludo($nombre){
    return "Hola, $nombre";
}

echo '<p>'.saludo('Cesco').'</p>';


//Referencias

/**
 * De no ser por el ampersand(&)
 * el segundo echo fuera de la
 * funcion, diria la variable
 * original (PHP)
 */
$cursos='PHP';
function path(&$cursos){
    $cursos='Laravel';
    echo '<p>'.$cursos.'</p>'; //Laravel
}

path($cursos);
echo '<p>'.$cursos.'</p>'; //Laravel

//Predeterminado

/**
 * Es buena practica usar
 * return y mala practica
 * usar exit() pues
 * termina la
 * ejecucion
 */

function holi($name='Cesco'){
    return "Holi, $name";
}

echo '<p>'.holi().'</p>';
echo '<p>'.holi("Karla").'</p>';
