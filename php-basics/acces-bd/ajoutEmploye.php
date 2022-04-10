<?php
try {
    require 'fonctions.php';
    $bdd = getBdd();

    $requete = "SELECT * FROM service ORDER By DesiServ";
    $stmtServices = $bdd->query($requete);

    // Le formulaire a-t-il été validé par l'utilisateur ?
    if (isset($_POST['matricule']) && isset($_POST['nom'])
            && isset($_POST['prenom']) && isset($_POST['service'])) {
        // Récupération des champs saisis
        $matricule = $_POST['matricule'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        if (empty($_POST["estCadre"])) {  // si case Cadre non cochée
            $codeCadre = 'n';
        }
        else {
            $codeCadre = 'o';
        }
        $codeService = $_POST['service'];

        // Insertion du nouvel employé
        $stmtAjoutEmpl = $bdd->prepare("INSERT INTO employe VALUES (?, ?, ?, ?, ?)");
        $stmtAjoutEmpl->execute(array($matricule, $nom, $prenom, $codeCadre, $codeService));

        // Variable drapeau indiquant le succès de l'ajout
        $modifOk = true;
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
        <title>Ajout d'un employé</title>
    </head>
    <body>
        <h1>Ajout d'un employé</h1>
        <form class="formulaire" action="ajoutEmploye.php" method="post">
            <p>
                <label for="champMatricule">Matricule :</label>
                <input type="text" name="matricule" id="champMatricule" required />
            </p>
            <p>
                <label for="champNom">Nom :</label>
                <input type="text" name="nom" id="champNom" required />
            </p>
            <p>
                <label for="champPrenom">Prénom :</label>
                <input type="text" name="prenom" id="champPrenom" required />
            </p>
            <p>
                <label for="champCadre">Cadre ?</label>
                <input type="checkbox" name="estCadre" id="champCadre" />
            </p>
            <p>
                <label for="champService">Service :</label>
                <select name="service" id="champService">
                    <?php
                    foreach ($stmtServices as $ligne) {
                        $code = $ligne['CodeServ'];
                        $designation = $ligne['DesiServ'];
                        echo "<option value=$code>$designation</option>";
                    }
                    ?>
                </select>
            </p>
            <p>
                <input type="submit" value="Ajouter l'employé">
            </p>
        </form>
        <p>
            <?php
            if (isset($modifOk)) {
                echo "L'ajout a réussi !";
            }
            ?>
        </p>
    </body>
</html>
