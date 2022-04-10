<?php
// Instruction 1
$fp = fopen ("/home/gyom/CraftSpace/Web_Workspace/launch.sh", "r");
// Instruction 2
$contenu_du_fichier = fgets ($fp, 255);
// Instruction 3
fclose ($fp);
// Instruction 4
echo 'Notre fichier contient : '.$contenu_du_fichier;
?>