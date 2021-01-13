<?php

$courses=['php','javascript','laravel'];
sort($courses); //rsort() para reversible

echo '<ul>';
foreach ($courses as $key => $curso) {
    echo "<li>$curso</li>";
}
echo '</ul>';

$cursos=[
    10=>'php',
    100=>'javascript',
    1000=>'laravel'
];

ksort($cursos);

echo '<ul>';
foreach ($cursos as $key => $curso) {
    echo "<li>$curso</li>";
}
echo '</ul>';