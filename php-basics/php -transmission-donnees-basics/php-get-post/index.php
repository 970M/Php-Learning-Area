<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1> GET </h1>
    <form action="index-server.php" method="get">
        Votre nom : <input type="text" name="nom"><br />
        Votre fonction : <input type="text" name="fonction"><br />
        <input type="submit" value="Envoyer">
    </form>

    <h1> POST </h1>
    <form action="index-server.php" method="post">
        Votre nom : <input type="text" name="nom"><br />
        Votre fonction : <input type="text" name="fonction"><br />
        <input type="submit" value="Envoyer">
    </form>

</body>

</html>