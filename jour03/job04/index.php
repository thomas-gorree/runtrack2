<?php
$str = "Dans l'espace, personne ne vous entend crier";
$count = 0;

for ($i = 0; $i < strlen($str); $i++) {
    $count++;
}

echo "Le nombre de caractères dans la chaîne \"$str\" est : $count";
?>