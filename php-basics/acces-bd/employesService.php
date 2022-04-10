<?php
try {
    // Connexion à la BD
    $bdd = new PDO("mysql:host=localhost;dbname=personnel;charset=utf8", "personnel_util", "secret",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // Préparation de la requête : le ? correspond au paramètre attendu
    $resultatEmp = $bdd->prepare("SELECT * FROM employe WHERE ServEmpl=?");
    // On ne nettoie pas cette variable :  le contrôle est fait par la requête préparée
    $codeService = $_POST['service'];
    // Exécution de la requête en lui passant le tableau des arguments
    // (ici un seul élément : le code du service)
    $resultatEmp->execute(array($codeService));

    // Lecture de la désignation du service identifié par son code
    $resultatServ = $bdd->prepare("SELECT DesiServ FROM service WHERE CodeServ=?");
    $resultatServ->execute(array($codeService));
    // Accès à la première ligne de résultat
    $ligneServ = $resultatServ->fetch();
    // Accès à la désignation du service (colonne DesiServ)
    $designationService = $ligneServ['DesiServ'];
}
catch (Exception $e) {
    die('Erreur fatale : ' . $e->getMessage());
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Liste des employés du service <?php echo $designationService ?></title>
    </head>
    <body>
        <h1>Liste des employés du service <?php echo $designationService ?></h1>
        <table>
            <tr><th>Matricule</th><th>Nom</th><th>Prénom</th></tr>
            <?php
            // Récupération de tous les résultats de la requête dans un tableau
            $donnees = $resultatEmp->fetchAll();
            // Itération sur les résultats de la requête SQL
            foreach ($donnees as $ligne) {
                $matricule = $ligne['Matricule'];
                $nom = $ligne['NomEmpl'];
                $prenom = $ligne['PrenomEmpl'];
                echo '<tr><td>' . $matricule . '</td><td>' . $nom . '</td><td>' . $prenom . '</td></tr>';
            }
            ?>
        </table>
    </body>
</html>
