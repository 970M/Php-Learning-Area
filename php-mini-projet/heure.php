<!-- code PHP -->
<?php
    // on récupère l'heure du moment
    $maintenant = time();
    $maintenant = date("j/m/y, h:i:s", $maintenant);
    // on affiche la réponse
    include "heure-p1.php";
?>