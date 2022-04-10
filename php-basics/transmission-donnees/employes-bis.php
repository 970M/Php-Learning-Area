<?php


if (isset($_GET['nombre']) && !empty($_GET['nombre'])) {

    echo '<h2>Liste des employés:</h2>';
    echo '<ul>';
    for ($i = 1; $i <= $_GET["nombre"]; $i++) {
        echo '<li>Employé ' . $i . ': <a href="employe.php?id=' . $i . '">détail</a>';
    }
    echo '</ul>';
} else {
    echo 'Aucun identifiant fourni !<br>';
}
