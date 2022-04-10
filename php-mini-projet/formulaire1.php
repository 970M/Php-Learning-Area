<?php
echo 'ville : ' . $_POST['ville'] . '<br>';
echo 'cp : ' . $_POST['cp'] . '<br>';
echo 'adresse : ' . $_POST['adresse'] . '<br>';
?>

<form method="post" action="">
    <label for="ville">ville</label><br>
    <input type="text" name="ville" id="ville" placeholder="saisir 1 ville"><br><br>
    <label for="cp">cp</label><br>
    <input type="text" name="cp" id="cp" placeholder="saisir 1 code postal"><br><br>
    <label for="adresse">adresse</label><br>
    <textarea name="adresse" id="adresse" placeholder="saisir 1 adresse"></textarea><br><br>
    <input type="submit">
</form>