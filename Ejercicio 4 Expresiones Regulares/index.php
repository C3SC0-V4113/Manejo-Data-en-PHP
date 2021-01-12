<?php

$password='123456';
/**
 * Esta expresion regular
 * exige caracteres
 * desde el 0 al 9
 * y que tenga una
 * longuitud de 6
 * a 9 caracteres
 */
$expreg='/^[0-9]{6,9}$/';

echo preg_match($expreg,$password);