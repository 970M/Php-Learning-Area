<?php

if (!empty($_GET)) {
    $pays = $_GET['pays'];
}
else {
    if (isset($_COOKIE['pays'])) {

        $pays = $_COOKIE['pays'];
    }
    else {
        $pays = 'fr';
    }
}

$expiration = 365 * 24 * 3600;
setCookie("pays", $pays, time() + $expiration);
echo "<br>";
print_r($_COOKIE);

echo "<br>foreach: <br>";

foreach ($_COOKIE as $cle => $valeur) {
    echo "$cle - $valeur <br>";
}



$valeurs = array("fr", "en", "it", "es");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langues</title>
</head>
<body>
    

<h1> GET </h1>
<form name="frmlangue" method="get" action="langue.php">
    
    <?php
            
        $nb=count($valeurs);
        //echo $nb;
        echo "<select name='pays' size=$nb>";
        foreach ($valeurs as $v) {
            if (isset($pays) && $pays == $v) {
                echo "<option selected>$v</option>";
            } 
            else {
                echo "<option>$v</option>";
            }
        }
      
    echo "</select>";
    echo "<input type='submit' value='Envoyer' name='language'>";
    
    switch ($pays) {
        case 'fr':
            echo '<p>Bonjour, <br> Vous visiter actuellement le site en français <br>Effectivement, la sauvegarde du cookie permet de retenir la langue avec laquelle vous naviguer sur le site pour vos prochaines visites. <br>A bientôt.</p>';
            break;
        case 'es':
            echo '<p>¡Hola <br>En este momento está visitando el sitio en español <br>De hecho, la cookie permite la copia de seguridad de conservar el idioma que utilice el sitio para futuras visitas. <br>Pronto.</p>';
            break;
        case 'en':
            echo '<p>Hello <br>You are currently visiting the site in English <br>Indeed, the cookie allows the backup to retain the language that you use the site for future visits. <br>Soon.</p>';
            break;
        case 'it':
            echo '<p>Ciao <br>Si sta attualmente visitando il sito in Italiano <br>Infatti, il cookie consente il backup di mantenere la lingua che si usa il sito per visite future. <br>Presto.</p>';
            break;
    }    
    ?>

</form>



</body>
</html>