<?php


echo '<h2>Détail sur un employé:</h2>';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    echo '<p>Son identifiant est ' . $_GET['id'] . '</p><br>';
} else {
    echo 'Aucun identifiant fourni !<br>';
}

// if () {
//     echo $_GET['nom'] . '<br>';
// }

var_dump($_SERVER);

// foreach ($GLOBALS as $key => $value) {
//     echo $key . ' => ';
//     var_dump($value);
//     echo '</br>';
// }
