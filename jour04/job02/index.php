<?php
echo "<table><thead><tr><th>Argument</th><th>Valeur</th></tr></thead><tbody>";
foreach ($_GET as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</tbody></table>";
?>