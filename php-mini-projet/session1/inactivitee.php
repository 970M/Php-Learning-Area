<?php
session_start();
echo 'Temps Actuel : ' . time() . '<br>';
print "<pre>";
print_r($_SESSION);
print "</pre>";
if (isset($_SESSION['temps'])) {
    if (time() > ($_SESSION['limite'] + $_SESSION['temps'])) {
        session_destroy();
        echo "déconnexion";
    } else {
        $_SESSION['temps'] = time();
        echo "connexion mise à jour";
    }
} else {
    echo "connexion";
    $_SESSION['limite'] = 20;
    $_SESSION['temps'] = time();
}
