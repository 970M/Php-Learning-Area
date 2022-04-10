<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="./service_post.php" method="post">
        <fieldset>
            <label for="service">Service:</label>
            <select id="service" name="service-name">
                <option>Administration</option>
                <option>Commercial</option>
                <option>Emballage</option>
                <option>Fabrication</option>
            </select>
            <li class="button">
                <button type="submit">Selectionner</button>
            </li>
        </fieldset>
    </form>
</body>

</html>