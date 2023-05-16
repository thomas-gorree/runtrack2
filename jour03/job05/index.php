<!DOCTYPE html>
<html>
  <head>
    <title>Tableau de variables</title>
    <style>
      table {
        border-collapse: collapse;
        border: 2px solid black;
        margin: 10px;
      }

      th {
        background-color: lightgray;
        border: 1px solid black;
        padding: 5px;
      }

      td {
        border: 1px solid black;
        padding: 5px;
      }

      tbody tr:nth-child(even) {
        background-color: lightblue;
      }
    </style>
  </head>
  <body>

<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = array("consonnes" => 0, "voyelles" => 0);

$vowels = array("a", "e", "i", "o", "u", "y");
$consonnes = array("b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z");

for ($i = 0; $i < strlen($str); $i++) {
    $letter = strtolower($str[$i]);
    if (in_array($letter, $vowels)) {
        $dic["voyelles"]++;
    } elseif (in_array($letter, $consonnes)) {
        $dic["consonnes"]++;
    }
}

echo "<table>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr></tbody>";
echo "</table>";
?>