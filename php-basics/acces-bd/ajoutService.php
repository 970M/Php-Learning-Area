<?php
try {
    require 'fonctions.php';
    $bdd = getBdd();
    $requete = "SELECT * FROM service ORDER By CodeServ";
    // Première exécution de la requête (utile en cas d'erreur ci-dessous)
    $stmtServices = $bdd->query($requete);

    // Le formulaire a-t-il été validé par l'utilisateur ?
    if (isset($_POST['code']) && isset($_POST['designation'])) {
        // Récupération des champs saisis
        $code = $_POST['code'];
        $designation = $_POST['designation'];

        // Insertion du nouveau service
        $stmtAjoutServ = $bdd->prepare("INSERT INTO service VALUES (?, ?)");
        $stmtAjoutServ->execute(array($code, $designation));

        // Variable drapeau indiquant le succès de l'ajout
        $modifOk = true;

        // Nouvelle exécution de la requête pour récupérer le nouveau service
        $stmtServices = $bdd->query($requete);
    }
}
catch (Exception $e) {
    $msgErreur = $e->getMessage() . '(' . $e->getFile() . ', ligne ' . $e->getLine() . ')';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Ajout d'un service</title>
    </head>
    <body>
        <h1>Liste des services</h1>
        <table>
            <tr><th>Code</th><th>Désignation</th></tr>
            <?php
            // Itération sur les résultats de la requête SQL
            foreach ($stmtServices as $ligne) {
                $code = $ligne['CodeServ'];
                $designation = $ligne['DesiServ'];
                echo '<tr><td>' . $code . '</td><td>' . $designation . '</td></tr>';
            }
            ?>
        </table>
        <h1>Ajout d'un service</h1>
        <form class="formulaire" action="ajoutService.php" method="post">
            <p><label for="champCode">Code :</label>
            <input type="text" name="code" id="champCode" required /></p>
            <p><label for="champDesignation">Désignation :</label>
            <input type="text" name="designation" id="champDesignation" required /></p>

            <input type="submit" value="Ajouter le service"></li>
        </form>
        <p>
            <?php
            if (isset($modifOk)) {
                echo "L'ajout a réussi !";
            }
            ?>
        </p>
    </form>
</body>
</html>
