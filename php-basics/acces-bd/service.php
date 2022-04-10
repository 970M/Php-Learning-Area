<?php
try {
    // Connexion à la BD
    $bdd = new PDO("mysql:host=localhost;dbname=personnel;charset=utf8", "personnel_util", "secret",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // Définition de la requête SQL
    $requete = "SELECT * FROM service ORDER By DesiServ";
    // Exécution de la requête SQL et récupération de ses résultats
    $resultat = $bdd->query($requete);
}
catch (Exception $e) {
    die('Erreur fatale : ' . $e->getMessage());
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Sélection du service</title>
</head>
<body>
    <h1>Choix d'un service</h1>
    <form class="formulaire" action="employesService.php" method="post">
        <label for="champService">Service :</label>
        <select name="service" id="champService">
            <?php
            // Récupération de tous les résultats de la requête dans un tableau
            $donnees = $resultat->fetchAll();
            foreach ($donnees as $ligne) {
                $code = $ligne['CodeServ'];
                $designation = $ligne['DesiServ'];
                echo "<option value=$code>$designation</option>";
            }
            ?>
        </select>
        <p><input type="submit" value="Afficher les employés"></p>
    </form>
</body>
</html>
