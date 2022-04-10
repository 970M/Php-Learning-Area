<?php

# cong php: /etc/php5/apache2/php5.ini

# drwx-wx-wt 2 root root 4096 juil. 25 15:39 sessions


// commentaire sur 1 ligne
/* commentaire
sur plusieurs
lignes */
# commentaire sur 1 ligne


$prenom = "Fred";
echo "<h1>Bonjour $prenom</h1>";
echo "Comment va-tu $prenom ?";
echo "<p>Voici tes informations de profil $prenom ...</p>";

# Differente type de variable
$variable1 = 127;
echo gettype($variable1) . "<br>";

$variable2 = 1.5;
echo gettype($variable2) . "<br>";

$variable3 = "une chaîne";
echo gettype($variable3) . "<br>";

$variable4 = '127';
echo gettype($variable4) . "<br>";

$variable5 = TRUE;
echo gettype($variable5) . "<br>";

# Affectation, passage par reference
$fruit1 = 'pomme'; // affecte la valeur 'pomme' à $fruit1
$fruit2 = 'banane'; // affecte la valeur 'banane' à $fruit2
echo "fruit1 : $fruit1 <br>"; // affiche : pomme
echo "fruit2 : $fruit2 <br>"; // affiche : banane
$fruit2 = &$fruit1; // passage de référence (assigne la référence de $fruit1 à $fruit2)
echo "fruit1 : $fruit1 <br>"; // affiche : pomme (référence 1)
echo "fruit2 : $fruit2 <br>"; // affiche : pomme (référence 1)
$fruit2 = 'fraise'; // modifie la valeur de $fruit2 (et de $fruit1 par repercution, même espace mémoire)
echo "fruit1 : $fruit1 <br>"; // affiche : fraise
echo "fruit2 : $fruit2 <br>"; // affiche : fraise
// Si nous changeons $fruit2, $fruit1 change en conséquence (et vice versa), leur destin sont liés 
// puisqu'il représente la même référence qui pointe vers 1 seul et même espace mémoire


# Constante
define("CAPITALE", "Paris");
echo CAPITALE . "<br>";

echo __FILE__ . "<br>"; // Affiche le chemin complet vers le fichier actuel, cte magique
echo __LINE__ . "<br>"; // Affiche le numéro de la ligne

# Concatenation
$prenom1 = "Bruno"; // Affectation de la valeur "Bruno" sur la variable : $prenom1
$prenom1 = "Claire"; // Affectation de la valeur "Claire" sur la variable : $prenom1. cela remplace Bruno par Claire.
echo $prenom1 . "<br>"; // Affiche : Claire
$prenom2 = "Nicolas"; // Affectation de la valeur "Nicolas" sur la variable : $prenom2
$prenom2 .= " Marie"; // Affectation de la valeur " Marie" sur la variable : $prenom2. Ajout SANS remplacement de la valeur précédente grâce à l'opérateur .=
echo $prenom2 . "<br>"; // Affiche : Nicolas Marie

# SWITCH
$monPays = 'France';
switch ($monPays) {
    case 'Italie':
        echo 'vous êtes Italien!<br>';
        break;
    case 'Espagne':
        echo 'vous êtes Espagnol!<br>';
        break;
    case 'Angleterre':
        echo 'vous êtes Anglais!<br>';
        break;
    case 'France':
        echo 'vous êtes Français!<br>';
        break;
    case 'Suisse':
        echo 'vous êtes Suisse!<br>';
        break;
    default:
        echo 'vous n\'avez pas une nationalité connu dans notre liste de possibilités<br>';
        break;
}




# IF ELSE
$couleur = 'bleu';

if ($couleur == 'bleu') {
    echo 'votre couleur est préférée est le bleu.<br>';
} elseif ($couleur == 'orange') {
    echo 'votre couleur est préférée est le orange.<br>';
} elseif ($couleur == 'rose') {
    echo 'votre couleur est préférée est le rose.<br>';
} else {
    echo 'nous n\'arrivons pas à determiner votre couleur préférée !!<br>';
}


echo 'Date : <br>';
echo date("d/m/Y") . "<br>";


# STRLEN
$phrase = 'Mettez une phrase différente ici à cet endroit!';
echo strlen($phrase) . "<br>";

# SUBSTR
$texte = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";
echo substr($texte, 0, 20) . "...<a href=\"\"> Lire la suite </a>" . "<br>";

# ISSET
$pseudo = "joker";
if (isset($pseudo)) {
    echo 'la variable $pseudo existe!<br>';
} else {
    echo 'la variable $pseudo n\'existe PAS!<br>';
}
# EMPTY
$pseudo = "";
if (empty($pseudo)) {
    echo 'la variable $pseudo est vide!<br>';
} else {
    echo 'la variable $pseudo n\'est pas vide (et est donc remplie)!<br>';
}


# FONCTION
// déclaration d'une fonction
function calculTva4($nombre, $taux = 1.2)
{
    return $nombre * $taux;
}
// exécution de notre fonction
echo calculTva4(1500) . '<br>'; // exécution de la fonction avec 1 seul argument
echo calculTva4(800, 1.07) . '<br>'; // exécution de la fonction avec 2 arguments


# ARITHMETIQUE
$a = 10;
$b = 2;
echo $a + $b . '<br>'; // affiche 12 (addition 10 + 2)
echo $a - $b . '<br>'; // affiche 8 (soustraction 10 - 2)
echo $a * $b . '<br>'; // affiche 20 (multiplication 10 * 2)
echo $a / $b . '<br>'; // affiche 5 (division 10 / 2)
echo $a % $b . '<br>'; // affiche 0 (reste de la division 10 / 2)

$a += $b; // équivaut à $a = $a + $b (ici $a vaut 12, voir ci-dessus)...10+2
$a -= $b; // équivaut à $a = $a - $b (ici $a vaut 12)...12-2

# GLOBAL
$pays = 'France';
function affichagePays()
{
    global $pays; // importe la variable pays de l'espace global
    echo $pays;
}
affichagePays();

# WHILE
$i = 0; // valeur de départ
while ($i < 5) // tant que $i est inférieur à 5
{
    echo "$i /"; // affichage
    $i++; // Ceci est une forme contractée de : $i = $i+1; l'incrémentation du "compteur" est effectuée à chaque tour de boucle.
}

# FOR
for ($j = 0; $j <= 15; $j++) {
    echo "<p>$j</p>";
}



# HTML: LISTE A CHOIX DEROULANTE
echo '<select>';
for ($j = 1; $j <= 31; $j++) {
    echo "<option>$j</option>";
}
echo '</select>';

# HTML: TABLEAU 2D
echo '<table border="1">';
for ($ligne = 0; $ligne < 10; $ligne++) //ligne est à zéro
{
    echo '<tr>';
    for ($cellule = 0; $cellule < 10; $cellule++) // tant que ligne est à zéro, cellule s'incrémente 10 fois - ligne est à 1, cellule s'incrémente 10 fois - ligne est à 2, cellule s'incrémente 10 fois, etc...
    {
        echo '<td>' . (10 * $ligne + $cellule) . '</td>'; // 10 * 0 +0 , 10* 0 + 1, 10* 0 + 2, etc... --- 10* 1+0, 10* 1 + 1, 10* 1+2, etc. Permet d'avoir les multiples de 10.
    }
    echo '</tr>';
}
echo '</table>';

// ALT
$z = 0;
echo '<table border="1">';
for ($ligne = 0; $ligne < 10; $ligne++) //ligne est à zéro
{
    echo '<tr>';
    for ($cellule = 0; $cellule < 10; $cellule++) {
        echo '<td>' . $z . '</td>';
        $z++;
    }
    echo '</tr>';
}
echo '</table>';



# Inclusion de fichiers
echo '</tr>';
echo 'Nous sommes dans le fichier entrainement<br>';
include_once("php-beginer.inc.php");
echo 'Nous ne sommes plus dans le fichier entrainement<br>';

// include() fera une erreur et poursuivra l'exécution du code.
// require() fera une erreur et stopera l'exécution du code.
// _once() est juste présent pour s'assurer que le fichier soit inclut une seule fois dans le code.


# ARRAY PHP
$listePrenom = array("gregoire", "nathalie", "emilie", "françois", "georges");
echo '<pre>';
print_r($listePrenom);
echo '</pre>';
var_dump($listePrenom);
//
$listePays[] = 'France';
$listePays[] = 'Italie';
$listePays[] = 'Espagne';
$listePays[] = 'Angleterre';
echo "<pre>";
print_r($listePays);
echo "</pre>";
echo $listePays[1] . '<br>';

//
foreach ($listePays as $cle => $valeur) {
    echo "$cle - $valeur <br>";
}

# DICO
$listeFruit = array("fruit1" => "orange", "fruit2" => "pomme", "fruit3" => "fraise"); // déclaration array
echo 'fruit1 : ' . $listeFruit['fruit1'] . '<br>'; // quotes dans les crochets
echo "fruit1 : $listeFruit[fruit1] <br>"; // pas de quotes dans les crochets

# ARRAY 2D
$tabMultidimensionnel = array(0 => array("prenom" => "Julien", "nom" => "Cottet"), 1 => array("prenom" => "Nicolas", "nom" => "Lafaye"));
echo '<pre>';
print_r($tabMultidimensionnel);
echo '</pre>';
echo $tabMultidimensionnel[0]['prenom'] . '<br>';

# CLASS
class Voiture
{
    public $couleur = "rouge";
    public $annee = 2010;
    public function demarrer()
    {
        return "Je démarre comme ça...";
    }
}
$voiture = new Voiture;
echo 'couleur de la voiture : ' . $voiture->couleur . '<br>';
echo 'annee de la voiture : ' . $voiture->annee . '<br>';
echo 'manière dont la voiture démarre : ' . $voiture->demarrer() . '<br>';

# VARIABLES SUPERGLOBALES
echo '<pre>';
print_r($GLOBALS);
echo '</pre>';
echo '<pre>';
print_r($_ENV);
echo '</pre>';
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
echo $_SERVER['DOCUMENT_ROOT'];
echo '<br>';

# FORMULAIRE 
# GET
echo '<h1> GET </h1>';
echo '<form action="php-beginer-server.php" method="get">';
echo 'Votre nom : <input type="text" name="nom"><br />';
echo 'Votre fonction : <input type="text" name="fonction"><br />';
echo ' <input type="submit" value="Envoyer">';
echo '</form>';

# POST
echo '<h1> POST </h1>';
echo '<form action="php-beginer-server.php" method="post">';
echo 'Votre nom : <input type="text" name="nom"><br />';
echo 'Votre fonction : <input type="text" name="fonction"><br />';
echo ' <input type="submit" value="Envoyer">';
echo '</form>';


# ECRITURE FICHIER

if (!$f = fopen("php-beginer.log", "a")) {
    echo "Echec de l'ouverture du fichier";
    exit;
} else {
    echo "Fichier ouvert";
    fwrite($f, "bonjour guillaume\n");
    fwrite($f, "bonjour marc\n");
    fwrite($f, "bonjour ruben\n");
    fwrite($f, "bonjour nicolas\n");
    $f = fclose($f);
}

# LECTURE FICHIER

$nomFichier = "php-beginer.log";
$fichier = file($nomFichier); // la fonction file() fait tout le travail, elle retourne chaque ligne d'un fichier à des indices différents d'un tableau array.

print "<pre>";
print_r($fichier);
print "</pre>"; // Affichage du tableau Array dans sa structure.
foreach ($fichier as $ligne) // Parcours du tableau Array pour un affichage plus conventionnel.
{
    echo $ligne . "<br>";
}
echo '';
echo "<br>";
echo implode('<br>', $fichier); // Affichage du tableau Array avec un passage à la ligne.

# EMAIL
///mail("expediteur@gmail.com", "test mail php", "Le message voila", "destinataire@gmail.com");

# COOKIE
//setCookie("gdCookie2","contenuCookie",time()+31536000);

echo session_save_path();
echo phpinfo();
