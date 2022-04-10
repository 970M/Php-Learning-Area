<?php
$pdo = new PDO('mysql:host=localhost;dbname=securite', 'phpmyadminGD', '0000');

if ($_POST) {

    /*
    echo "pseudo posté: $_POST[pseudo] <br>";
    echo "mdp posté: $_POST[mdp] <br>";
    $req = "SELECT * FROM membre WHERE pseudo='$_POST[pseudo]' AND mdp='$_POST[mdp]'";
    $result = $pdo->query($req);
    echo 'requete debug : ' . $req . '';
    $membre = $result->fetch(PDO::FETCH_ASSOC);
    */

    // Methode de contre attaque par injection SQL
    $_POST['pseudo'] = htmlentities($_POST['pseudo'], ENT_QUOTES);
    $_POST['mdp'] = htmlentities($_POST['mdp'], ENT_QUOTES);
    $req = "SELECT * FROM membre WHERE pseudo='$_POST[pseudo]' AND mdp='$_POST[mdp]'";
    $result = $pdo->query($req);
    echo 'requete debug : ' . $req . '';
    $membre = $result->fetch(PDO::FETCH_ASSOC);


    if (!empty($membre)) {
        echo '<div class="validation"><h1>Vous êtes bien reconnu par le site web pour vous connecter...</h1></div>';
        echo "votre id est : " . $membre['id_membre'] . "<br>";
        echo "votre pseudo est : " . $membre['pseudo'] . "<br>";
        echo "votre mdp est : " . $membre['mdp'] . "<br>";
        echo "votre nom est : " . $membre['nom'] . "<br>";
        echo "votre prenom est : " . $membre['mdp'] . "<br>";
        echo "votre email est : " . $membre['email'] . "<br>";
    } else {
        echo '<div class="erreur"><h1>Erreur d\'identification</h1></div>';
    }
}
?>

<hr>
<form method="post" action="">
    <label for="pseudo">Pseudo</label><br>

    <input type="text" id="pseudo" name="pseudo"><br>
    <label for="mdp">mdp</label><br>
    <input type="text" id="mdp" name="mdp"><br>
    <input type="submit" value="Se connecter">
</form>