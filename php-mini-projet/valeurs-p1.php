<html>

<head>
    <title>Génération de formulaire</title>
</head>

<body>
    <h2>Choisissez un nombre</h2>
    <hr>
    <form name="frmvaleurs" method="post" action="valeurs.php">
        <select name="cmbValeurs" size="5">
            <?php
            // affichage liste de valeurs
            echo $HTMLvaleurs;
            ?>
        </select>
        <input type="submit" value="Envoyer" name="cmdEnvoyer">
    </form>
    <?php
    // affichage partie 2
    echo $HTMLpart2;

    

    ?>
</body>

</html>