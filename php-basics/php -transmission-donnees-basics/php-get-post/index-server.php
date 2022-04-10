<?php

echo '<pre>';
print_r($_SERVER);
echo '</pre>';
echo '<br>';
echo '<br>';

# GET
echo '<h1> GET </h1>';
print_r($_GET);
echo '<br>';
if (isset($_GET['nom']) && isset($_GET['fonction'])) {
    // on affiche nos résultats
    echo 'Votre nom est ' . $_GET['nom'] . ' et votre fonction est ' . $_GET['fonction'] . '<br>';
}

if (!empty($_GET['nom'])) {
    echo $_GET['nom'] . '<br>';
}

# POST
echo '<h1> POST </h1>';
print_r($_POST);
echo '<br>';
if (isset($_POST['nom']) && isset($_POST['fonction'])) {
    // on affiche nos résultats
    echo 'Votre nom est ' . $_POST['nom'] . ' et votre fonction est ' . $_POST['fonction'] . '<br>';
}

if (!empty($_POST['nom'])) {
    echo $_POST['nom'] . '<br>';
}
