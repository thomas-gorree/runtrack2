<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$vowels = array("a", "e", "i", "o", "u", "y");

for ($i = 0; $i < strlen($str); $i++) {
    $letter = strtolower($str[$i]);
    if (in_array($letter, $vowels)) {
        echo $letter;
    }
}
?>