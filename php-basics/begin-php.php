<?php

// commentaire sur 1 ligne
/* commentaire
sur plusieurs
lignes */
# commentaire sur 1 ligne

// --------------------------------
// Rappel des types de données
// --------------------------------

$string = "Chaine"; // Une chaine de caractere est toujours transmise entre ""
$number = 25;
$boolean = true;
$maVariable; // type Undefined

// --------------------------------
// Affichage des données
// --------------------------------

echo "Un texte à afficher</br>";
echo $string . '</br>';
echo $string, '</br>';
// --------------------------------
// Tableaux
// --------------------------------

$array = array("Bordeaux", "Toulouse", "Nantes"); // Un tableau de chaine de carateres
echo "la 1ere case du tableau :" . $array[0] . '</br>';
$array1 = array(256, 25, 12); // Un tableau d'entier
echo $array1[1], $array1[2], '</br>';
// Un tableau de types variés
$array2 = array("Bordeaux", 24, true, [1, 2], array("nom" => "Denis")); // Un tableau de types variés
echo $array2[4]["nom"], '</br>';


// --------------------------------
// Dictionnaires
// --------------------------------

// dico = array("key1" => value1, "key2" => value2, ... , "keyN" => valueN }
// key est une chaine de caractere qui designe un attribut
// value est de n'importe quel type et est la valuer de l'attribut
// on accede à un attribut avec "[]": dico["key1"]

$dico = array(
    "pseudo" => "Denis",
    "age" => 33,
    "technos" => array("Javascript", "React", "NodeJs"),
    "admin" => false,
);

echo $dico["pseudo"], '</br>'; // affiche l'attribut pseudo du dico dico
echo "Avant:", $dico, '</br>';
$dico["adresse"] = "22 rue du code"; // Pour rajouter un attribut à un dico existant
echo "Après:", $dico, '</br>';
// Une structure plus complexe : un tableau de dictionnaire
$data = array(
    array(
        "pseudo" => "Denis",
        "age" => 33,
        "technos" => array("Javascript", "React", "NodeJs"),
        "admin" => false,
    ),
    array(
        "pseudo" => "Samia",
        "age" => 24,
        "technos" => array("CSS", "React", "NodeJs"),
        "admin" => false,
    ),
    array(
        "pseudo" => "Nikola",
        "age" => 42,
        "technos" => array("Php", "React", "NodeJs"),
        "admin" => true,
    ),
);
echo $data[2]["pseudo"][0], "</br>";

// --------------------------------
// Les structures de controle
// --------------------------------

// if{} else{}
$age = 2;
if ($age > 5) {
    // Valeur si vrai
    echo "Plus de 5 ans</br>";
} else {
    // Valeur sinon
    echo "Moins de 5 ans</br>";
}

// While
$w = 0;
while ($w < 10) {
    $w++;
    echo "La valeur de w est de $w</br>";
}

// Les boucles for
$data1 = array("Bordeaux", 24, true, array(1, 2), array("nom" => "Denis"));
foreach ($user as $data1) {
    echo "user= $user", '</br>';
}

// on déclare la valeur de i | condition jusqu'où on boucle | on incrémente i si la condition n'est pas remplie
for ($i = 0; $i < count($data1); $i++) {
    echo "i=", $i, '</br>';
}

// --------------------------------
// Les fonctions
// --------------------------------
/*
Mise en oeuvre en 2 temps:

1- Déclaration de la fonction : description de ce qu'elle fait :

function maFonction1(arg1, arg2) {
  // To do
};

2- Appel de la fonction pour qu'elle s"execute :

maFonction1(valArg1, valArg2);

*/
// Déclaration d'une fonction sans arguments
//

function maFonction()
{
    $nb = 10;
    // compte jusqu'a 10
    echo "On va compter jusqu'a $nb", '</br>';
    for ($i = 0; $i < $nb; $i++) {
        echo $i, '</br>';
    }
};
// Appel de la fonction
maFonction();

// Déclaration d'une fonction avec argument
//

function maFonction1($text, $nb)
{
    echo "On va ecrire $nb fois:", '</br></br>';

    $i = 0;
    while ($i < $nb) {
        echo $i, $text, '</br>';
        $i++;
    }
};
// Appel de la fonction
maFonction1("Hello world!", 8);


// Exemple de fontion retournant une valeur :
// Declaration
function carre($x)
{
    $y = $x * $x;
    return $y;
};

// Appel de la fonction dans la fonction d'affichage :
echo carre(4);
