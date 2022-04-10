<?php
$mysqli = new Mysqli("localhost", "phpmyadminGD", "0000", "entreprise");
//-----------------------------------------------------------------
echo '<pre>'; print_r($mysqli); echo '</pre>';
echo '<pre>'; print_r(get_class_methods($mysqli)); echo '</pre>';
//-----------------------------------------------------------------

// Affichage (SELECT) :
echo "<h1> assoc </h1>";
$result = $mysqli->query("SELECT * FROM employes");
while($employe = $result->fetch_assoc())
{
echo "<pre>"; print_r($employe); echo "</pre>";
echo "Bonjour je suis $employe[prenom] $employe[nom] du service $employe[service]";
}

//echo $result->num_rows . ' enregistrement(s) récupéré(s) par la requête SELECT'<br>;
//----------------------------------------------------------------*
/*
echo "<h1> object </h1>";
$result = $mysqli->query("SELECT * FROM employes");
$employe = $result->fetch_object();
echo "<pre>"; print_r($employe); echo "</pre>";
echo "Bonjour je suis $employe[prenom] $employe[nom] du service $employe[service]";
*/
echo "<h1> Table html </h1>";
$résultat = $mysqli->query("SELECT * FROM employes");
echo '<table border="5"> <tr>';
while ($colonne = $résultat->fetch_field()) {
    echo '<th>' . $colonne->name . '</th>';
}
echo "</tr>";
while ($ligne = $résultat->fetch_assoc()) {
    echo '<tr>';
    foreach ($ligne as $indice => $information) {
        echo '<td>' . $information . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>



