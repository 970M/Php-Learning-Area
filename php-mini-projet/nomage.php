<?php
// a-t-on les paramètres attendus ?
$post = isset($_POST["txtNom"]) && isset($_POST["txtAge"]);
if ($post) {
    // on récupère les paramètres txtNom et txtAge "postés" par le client
    $nom = $_POST["txtNom"];
    $age = $_POST["txtAge"];
} else {
    $nom = "";
    $age = "";
} //if

// affichage de la page
include "nomage-p1.php";
