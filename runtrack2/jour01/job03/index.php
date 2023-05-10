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
// Création des variables de différents types
$True = true;
$nombreEntier = 42;
$message = "Bonjour, comment allez-vous?";
$prix = 9.99;

// Génération du tableau HTML
echo "<table>";
echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";
echo "<tbody>";
echo "<tr><td>booléen</td><td>estVrai</td>  <td>" . var_export($True, true) . "</td>  </tr>";
echo "<tr><td>entier</td><td>nombreEntier</td>  <td>" . $nombreEntier . "</td>    </tr>";
echo "<tr><td>chaîne de caractères</td><td>message</td> <td>" . $message . "</td>    </tr>";
echo "<tr><td>nombre à virgule flottante</td><td>prix</td>  <td>" . $prix . "</td>    </tr>";
echo "</tbody>";
echo "</table>";
?>
  </body>
</html>