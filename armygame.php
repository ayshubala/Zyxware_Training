<?php

function gameWithCells($n, $m) {
    $rows = ceil($n / 2);
    $columns = ceil($m / 2);
    return $rows * $columns;


}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$result = gameWithCells($n, $m);

fwrite($fptr, $result . "\n");

fclose($fptr);
?>