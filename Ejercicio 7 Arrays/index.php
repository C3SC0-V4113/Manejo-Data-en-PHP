<?php

$cursos=['javascript','laravel','php','vuejs'];

echo '<ul>';
foreach ($cursos as $key => $curso) {
    echo "<li>[$key]$curso</li>";
}
echo '</ul>';

echo '<ul>';
for ($i=0; $i < count($cursos); $i++) { 
    echo "<li>[$i]$cursos[$i]</li>";
}
echo '</ul>';