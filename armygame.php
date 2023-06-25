<?php

function gameWithCells($n, $m) 
{
    if($n % 2 == 0)
    {
        $rows = $n/2;
    }
    else
    {
        $rows = ($n+1)/2;
    }
    if($m % 2 == 0)
    {
        $columns = $m/2;
    }
    else
    {
        $columns = ($m+1)/2;

    }
    return $rows * $columns;


}
$n = int()readline("Enter the rows:");
$m = int()readline("Enter the column:");
$games = gameWithCells($n, $m);
echo $games;

?>
