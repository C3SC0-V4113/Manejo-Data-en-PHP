<?php

/**
 * Funcion anonima, se usa
 * en variables que
 * requieren logica
 */
$saludar=function($name){
    return "Hola, $name";
};

echo '<p>'.$saludar('Cesco').'<p>';

/**
 * Funcion regular combinada con
 * anonima, Closure siginifa
 * que recibira una funcion
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

echo '<p>'.greet($es, 'Cecy').'<p>';
echo '<p>'.greet($en,'Olinda').'<p>';