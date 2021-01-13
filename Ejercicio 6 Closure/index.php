<?php

/**
 * Funcion anonima, se usa
 * en variables que
 * requieren logica
 */
$saludar=function($name){
    return "Hola, $name";
};

echo $saludar('Cesco');

/**
 * Funcion regular combinada con
 * anonima
 */
function greet(Closure $lang, $name){
    return $lang($name);
}

$es=function($name){
    return "Hola, $name";
};

$en=function($name){
    return "Hello, $name";
};

echo greet($es, 'Cecy');
echo greet($en,'Olinda');