<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'phpmyadminGD');
define('DB_PASSWORD', '0000');
define('DB_NAME', 'registration');

// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Vérifier la connexion
if ($conn === false) {
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
