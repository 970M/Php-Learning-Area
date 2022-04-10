<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <center>
        <h3>Un formulaire Web</h3>
        <h4>Récupération des valeurs des champs d'un formulaire</h4>
        <hr>
        <form name="frmPersonne" method="post">
            <table>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" value="<?php echo $nom ?>" name="txtNom" size="20"></td>
                    <td>Age</td>
                    <td><input type="text" value="<?php echo $age ?>" name="txtAge" size="3"></td>
                <tr>
            </table>
            <input type="submit" name="cmdEffacer" value="Envoyer">
        </form>
    </center>
    <hr>
    <?php
    // y-at-il eu des valeurs postées ?
    if ($post) {
    ?>
        <h4>Valeurs récupérées</h4>
        <table border="1">
            <tr>
                <td>Nom</td>
                <td><?php echo $nom ?></td>
                <td width="10"></td>
                <td>Age</td>
                <td><?php echo $age ?></td>
            <tr>
        </table>
    <?php } ?>

</body>

</html>