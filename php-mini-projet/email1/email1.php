<?php
if (!empty($_POST)) {
    // affichage des saisies pour être sur de les obtenir avant de les exploiter.
    echo "destinataire : $_POST[destinataire] <br>";
    echo "sujet : $_POST[sujet] <br>";
    echo "message : $_POST[message] <br>";
    echo "expediteur : $_POST[expediteur] <br>";
    // entête email
    $headers = 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=ISO-8859-1' . "\n";
    $headers .= 'Reply-To: ' . $_POST['expediteur'] . "\n";
    $headers .= 'From: "' . ucfirst(substr($_POST['expediteur'], 0, strpos($_POST['expediteur'], '@'))) . '"<' . $_POST['expediteur'] . '>' . "\n";
    $headers .= 'Delivered-to: ' . $_POST['destinataire'] . "\n";
    mail($_POST['destinataire'], $_POST['sujet'], $_POST['message'], $headers);
}
?>
<form method="post" action="">
    <label for="destinataire">Destinataire</label><br>
    <input type="text" name="destinataire" id="destinataire" placeholder="destinataire"><br><br>
    <label for="expediteur">Expediteur</label><br>
    <input type="text" name="expediteur" id="expediteur" placeholder="expediteur"><br><br>
    <label for="sujet">Sujet</label><br>
    <input type="text" name="sujet" id="sujet" placeholder="sujet"><br><br>
    <label for="message">Message</label><br>
    <textarea name="message" placeholder="message"></textarea><br><br>
    <input type="submit" value="envoyer l'email">
</form>


