<?php require_once("inc/init.inc.php"); 

//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if ($_POST) {
    //debug($_POST);

    echo 'Methode POST <br>' ;

    // $contenu .= "pseudo : " . $_POST['pseudo'] . "<br>mdp : " . $_POST['mdp'] . "";
    $résultat = executeRequete("SELECT * FROM membre WHERE pseudo='$_POST[pseudo]'");
    
    echo print_r($résultat) . '<br>' ;
    
    if ($résultat->num_rows != 0) {
        // $contenu .= '<div style="background:green">pseudo connu!</div>';
        $membre = $résultat->fetch_assoc();

        echo print_r($résultat) . '<br>' ;

        if ($membre['mdp'] == $_POST['mdp']) {

            foreach ($membre as $indice => $element) {
                
                echo $indice.'=>'.$element.' <br>' ;


            }

            //$contenu .= '<div class="validation">mdp connu!</div>';
            /*
            foreach ($membre as $indice => $element) {
                if ($indice != 'mdp') {
                    $_SESSION['membre'][$indice] = $element;
                }
            }
            
            header("location:profil.php");
            */
        } else {
            $contenu .= '<div class="erreur">Erreur de MDP</div>';
        }
    } else {
        $contenu .= '<div class="erreur">Erreur de pseudo</div>';
    }
}
?>


<?php require_once("inc/haut.inc.php"); ?>


<form method="post" action="">
    <label for="pseudo">Pseudo</label><br>
    <input type="text" id="pseudo" name="pseudo"><br> <br>
    <label for="mdp">Mot de passe</label><br>
    <input type="text" id="mdp" name="mdp"><br><br>
    <input type="submit" value="Se connecter">
</form>


<?php require_once("inc/bas.inc.php"); ?>

