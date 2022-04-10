<?php

// affiche les variables liées au serveur web
// on envoie du texte simple
header("Content-type: text/plain");
// parcours du tableau associatif $_SERVER
reset($_SERVER);
while (list($clé,$valeur)=each($_SERVER)){
echo "$clé : $valeur\n";


}//while

echo 'Votre adresse IP est : '.$_SERVER['REMOTE_ADDR'];
?>
