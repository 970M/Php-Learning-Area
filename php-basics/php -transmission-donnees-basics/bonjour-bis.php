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
    <form action="" method="get">
        <ul>
            <li>
                <label for="name">Name&nbsp;:</label>
                <input type="text" id="name" name="prenom" value="Bernard" />
            </li>
            <li>
                <label for="type">Cochez pour un bonjour plus familier</label>
                <input type="checkbox" id="type" name="hello" value="true">
            </li>

            </br>
            <ul>
                <li>
                    <label for="mr">Monsieur</label>
                    <input type="radio" checked id="mr" name="titre" value="Monsieur">
                </li>
                <li>
                    <label for="mme">Madame</label>
                    <input type="radio" id="mme" name="titre" value="Madame">
                </li>
                <li>
                    <label for="mlle">Mademoiselle</label>
                    <input type="radio" id="mlle" name="titre" value="Mademoiselle">
                </li>
            </ul>
            </br>
            <li class="button">
                <button type="submit">Dire Bonjour</button>
            </li>


        </ul>
    </form>


    <?php

    var_dump($_GET);
    $genre = "";
    $style = "Bonjour";
    if (isset($_GET['prenom']) && !empty($_GET['prenom'])) {

        if (isset($_GET['hello'])) {
            $style = "Salut";
        }

        echo '<h3>' . $style . " " . $_GET["titre"] . " " . $_GET['prenom'] . '</h3>';
    } else {
        echo 'Aucun identifiant fourni !<br>';
    }
    ?>


</body>

</html>