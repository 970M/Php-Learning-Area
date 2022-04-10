<!DOCTYPE html>
<html>

<head>
    <title>Boucle while</title>
</head>

<body>

    <form name="inscription" method="post" action="saisie.php">
        Entrez votre pseudo : <input type="text" name="pseudo"/> <br/>
        Entrez votre ville : <input type="text" name="ville"/><br/>
        <input type="submit" name="valider" value="OK"/>
    </form>

    <?php
    $noms = array("Tychic", "Rosthene", "Julio", "Freb", "Henry");
    $total = count($noms);
    ?>
    <h1>List de noms</h1>
    <ul>
        <?php
        $i = 0;
        ?>
        <?php while ($i < $total) { ?>
            <li><?php echo $noms[$i] ?></li>
            <?php ++$i ?>
        <?php } ?>
    </ul>
</body>

</html>