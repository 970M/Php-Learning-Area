<?php
if (!empty($_POST)) {
    echo 'Recuperation des données saisies : <br>';
    echo 'pseudo : ' . $_POST['pseudo'] . '<br>';
    echo 'email : ' . $_POST['email'] . '<br>';

    if (!$f = fopen("sauvegarde.txt", "a")) {
        echo "Echec de l'ouverture du fichier";
        exit;
    } else {
        fwrite($f, $_POST['pseudo'] . " - ");
        fwrite($f, $_POST['email'] . "\n");
        $f = fclose($f);
    }
}


