<?php
//--------- BDD
/*
$mysqli = new mysqli("localhost", "root", "", "site");
if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);
*/

try{
    $pdo = new PDO('mysql:host=localhost;dbname=website_1', 'phpmyadminGD', '0000');
} catch (PDOException $e) {
    printf("Échec de la connexion : %s\n", $e->getMessage());
    exit();
}

// $mysqli->set_charset("utf8");
//--------- SESSION
session_start();
//--------- CHEMIN
define("RACINE_SITE", "/php/website_1/");
//--------- VARIABLES
$contenu = '';
//--------- AUTRES INCLUSIONS
require_once("fonction.inc.php");
