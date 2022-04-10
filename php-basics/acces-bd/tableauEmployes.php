<?php
try {
    require 'fonctions.php';
    $bdd = getBdd();
    // Définition de la requête SQL
    $requete = "SELECT * FROM employe ORDER BY Matricule";
    // Exécution de la requête SQL et récupération de ses résultats
    $resultat = $bdd->query($requete);
    // Calcul du nombre de résultats
    $nbEmployes = $resultat->rowCount();
}
catch (Exception $e) {
    die('Erreur fatale : ' . $e->getMessage());
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Tableau des employés</title>
</head>
<body>
    <h1>Tableau des employés</h1>
    <table>
        <tr><th>Matricule</th><th>Nom</th><th>Prénom</th></tr>
        <?php
        // Récupération de tous les résultats de la requête dans un tableau
        $donnees = $resultat->fetchAll();
        // Itération sur les résultats de la requête SQL
        foreach ($donnees as $ligne) {
            $matricule = $ligne['Matricule'];
            $nom = $ligne['NomEmpl'];
            $prenom = $ligne['PrenomEmpl'];
            echo '<tr><td>' . $matricule . '</td><td>' . $nom . '</td><td>' . $prenom . '</td></tr>';
        }
        ?>
    </table>
    <p><?php echo "Total : $nbEmployes employé(s)"; ?></p>
</body>
</html>
