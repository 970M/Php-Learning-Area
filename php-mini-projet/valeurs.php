<?php
    // configuration
    ini_set("register_globals","off");
    // le tableau des valeurs
    $valeurs=array("un","deux","trois","quatre","cinq","six","sept","huit","neuf","dix");
    // on récupère l'éventuel choix de l'utilisateur
    $choix=$_POST["cmbValeurs"];
    // on calcule la liste des valeurs à afficher
    $HTMLvaleurs="";
    for($i=0;$i<count($valeurs);$i++){
    // si option courante est égale au choix, on la sélectionne
    if (isset($choix) && $choix==$valeurs[$i])
        $HTMLvaleurs.="<option selected>$valeurs[$i]</option>\n";
    else 
        $HTMLvaleurs.="<option>$valeurs[$i]</option>\n";
    }//for
    // on calcule la seconde partie de la page
    $HTMLpart2="";
    if(isset($choix)){
        $HTMLpart2="<hr>\n";
        $HTMLpart2.="<h3>Vous avez choisi le nombre $choix</h3>\n";
    }//if
    // on affiche la réponse
    include "valeurs-p1.php";
?>