<?php
session_start();
if ($_POST) {
    $_SESSION["pseudo"] = $_POST['pseudo'];
}
//--------------------------------------
if (isset($_SESSION['pseudo'])) {
    echo "votre pseudo est: " . $_SESSION['pseudo'] . "<br>";
} else {
    echo ' <form method="post" action="">
<label for="pseudo">Pseudo:</label><br>
<input type="text" name="pseudo" value=""><br>
<input type="submit" value="envoi">
</form>';
}
