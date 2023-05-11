<?php
for ($i = 2; $i <= 1000; $i++) {
    $True = true;
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
            $True = false;
            break;
        }
    }
    if ($True) {
        echo $i . "<br />";
    }
}
?>