<?php

    $n = intval(fgets(STDIN));
    $sticks = array_map('intval', explode(' ', fgets(STDIN)));
    sort($sticks);
    $remaining = $n;
    $current_length = $sticks[0];
    echo $remaining . "\n";
    for ($i = 1; $i < $n; $i++)
    {
        if ($sticks[$i] > $current_length) 
        {
            $current_length = $sticks[$i];
            $remaining = $n - $i;
            echo $remaining . "\n";
        }
    }

?>
