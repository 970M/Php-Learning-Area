<?php
//$pdo = new PDO("localhost", "entreprise", "phpmyadminGD", "0000"); # Ne fonctionne pas
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'phpmyadminGD', '0000');//, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
echo '<pre>'; print_r($pdo); echo '</pre>';
echo '<pre>'; print_r(get_class_methods($pdo)); echo '</pre>';

echo "pre <br>";
// Insertion :

$result = $pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Mike', 'Durand', 'm', 'informatique','2015-07-30', 5000)");
echo "<br>";
var_dump($pdo);
echo "<br>";
var_dump($result);
echo "<br>";
echo "post <br>";
echo "<br>";
echo "\nPDO::errorInfo():\n";
print_r($pdo->errorInfo());
echo "<br>";



if ($result) {

    echo $result . ' enregistrement(s) affecté(s) par la requête INSERT<br>';

}
else {

    echo "ERREUR <br>";
}

$stmt = $pdo->prepare("INSERT INTO employes (id_employes, prenom, nom, sexe, service, date_embauche, salaire) VALUES (:id_employes, :prenom, :nom, :sexe, :service, :date_embauche, :salaire)");
$id_employes="102";
$nom = "Mike";
$prenom= "Durand";
$sexe = "m" ;
$service = "informatique";
$date_embauche = "2015-07-30";
$salaire = 5000;
echo "<br>";

var_dump($pdo);

echo "<br>";

var_dump($stmt);

if (!$stmt) {
    
 }




$stmt->execute(array(

        'id_employes' => $id_employes,
        'nom' => $nom,
        'prenom' => $possesseur,
        'sexe' => $sexe,
        'date_embauche' => $date_embauche,
        'salaire' => $salaire
            ));





echo "<h1>FIN</h1>";





/*
// Modification (UPDATE) :
$result = $pdo->exec("UPDATE employes SET salaire = 2500 WHERE id_employes = 802");
echo $result . ' enregistrement(s) affecté(s) par la requête UPDATE<br>';
//-----------------------------------------------------------------

// Suppression (DELETE) :
$result = $pdo->exec("DELETE FROM employes WHERE id_employes = 388");
echo $result . ' enregistrement(s) affecté(s) par la requête DELETE<br>';
//-----------------------------------------------------------------

*/