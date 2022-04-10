<?php
// Partie connexion à la BDD et initialisation
$pdo = new PDO('mysql:host=localhost;dbname=dialogue', 'phpmyadminGD', '0000');
$contenu = '';

//---------------------------------------------------------------------------------------------
// Partie enregistrement
if ($_POST) {

    echo "pseudo posté: $_POST[pseudo] <br>";
    echo "message posté: $_POST[message] <br>";
    $_POST['pseudo'] = addslashes($_POST['pseudo']);
    $_POST['message'] = addslashes($_POST['message']);
    echo "pseudo posté: $_POST[pseudo] <br>";
    echo "message posté: $_POST[message] <br>";
    if (!empty($_POST['pseudo']) && !empty($_POST['message'])) {
        $result = $pdo->exec("INSERT INTO commentaire (pseudo, message, date_enregistrement) VALUES ('$_POST[pseudo]', '$_POST[message]', NOW())") or die(print_r($pdo->errorInfo()));
        echo '<div class="validation">Votre message a bien été enregistré.</div>';
    } else {
        echo '<div class="erreur">Afin de déposer un commentaire, veuillez svp remplir tous les champs du formulaire.</div>';
    }
}


//---------------------------------------------------------------------------------------------
// Partie affichage des commentaires
$result = $pdo->query("SELECT pseudo, message, DATE_FORMAT(date_enregistrement, '%d/%m/%Y') AS datefr, DATE_FORMAT(date_enregistrement, '%H:%i:%s') AS heurefr FROM commentaire ORDER BY date_enregistrement DESC");
$contenu .= '<h2>' . $result->rowCount() . ' commentaire(s) </h2>';
while ($commentaire = $result->fetch(PDO::FETCH_ASSOC)) {
    $contenu .= '<div class="message">';
    $contenu .= '<div class="titre">Par: ' . $commentaire['pseudo'] . ', le ' . $commentaire['datefr'] . ' à ' . $commentaire['heurefr'] . '</div>';
    $contenu .= '<div class="contenu">' . $commentaire['message'] . '</div>';
    $contenu .= '</div>';
}

//---------------------------------------------------------------------------------------------
// Partie formulaire d'envoi de commentaire
?>

<!Doctype html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="commentaire"><?php echo $contenu; ?></div>
    <form method="post" action="">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" maxlength="20" pattern="[a-zA-Z0-9.-_]+" title="caractère autorisés : a-zA-Z0-9.-_"><br>
        <label for="message">Message</label><br>
        <textarea id="message" name="message" cols="50" rows="7"></textarea><br>
        <input type="submit" value="Envoyer le message">
    </form>
</body>

</html>