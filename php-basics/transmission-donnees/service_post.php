<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>


    <?php

    var_dump($_POST);


    /**
     * Nettoie une valeur insérée dans une page HTML
     * Doit être utilisée à chaque insertion de données dynamique dans une page HTML
     * Permet d'éviter les problèmes d'exécution de code indésirable (XSS)
     * @param string $valeur Valeur à nettoyer
     * @return string Valeur nettoyée
     */
    function escape($valeur)
    {
        // Convertit les caractères spéciaux en entités HTML
        return htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8', false);
    }


    $code_services = array("Administration" => "s01", "Commercial" => "s02", "Emballage" => "s03", "Fabrication" => "s04");

    if (isset($_POST['service-name']) && !empty($_POST['service-name'])) {

        //echo '<h3>Le code service choisi est: ' . $code_services[$_POST["service-name"]] . '</h3>';
        echo '<h3>Le code service choisi est: ' . escape($_POST["service-name"]) . '</h3>';
    } else {
        echo '</br>Aucun service fourni !<br>';
    }
    ?>


    <!--“Administration” (code : s01)
“Commercial” (code: s02)
“Emballage” (code : s03)
“Fabrication” (code : s04) -->




</body>

</html>