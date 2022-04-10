<html>

<head>
    <title>balises</title>
    <script language="php">
        function effacer() {
            alert("Vous avez cliqué sur le bouton Effacer");
        }//effacer
    </script>
</head>

<body background="/images/standard.jpg">

   

    <form method="POST">

        <?php

        
        $maintenant=time();
        echo date("j/m/y, h:i:s",$maintenant);
        ?>
        
        <table border="0">
            <tr>
                <td>Etes-vous marié(e)</td>
                <td>
                    <input type="radio" value="Oui" name="R1">Oui
                    <input type="radio" name="R1" value="non" checked>Non
                </td>
            </tr>
            <tr>
                <td>Cases à cocher</td>
                <td>
                    <input type="checkbox" name="C1" value="un">1
                    <input type="checkbox" name="C2" value="deux" checked>2
                    <input type="checkbox" name="C3" value="trois">3
                </td>
            </tr>
            <tr>
                <td>Champ de saisie</td>
                <td>
                    <input type="text" name="txtSaisie" size="20" value="qqs mots">
                </td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td>
                    <input type="password" name="txtMdp" size="20" value="unMotDePasse">
                </td>
            </tr>
            <tr>
                <td>Boîte de saisie</td>
                <td>
                    <textarea rows="2" name="areaSaisie" cols="20">
ligne1
ligne2
ligne3
</textarea>
                </td>
            </tr>
            <tr>
                <td>combo</td>
                <td>
                    <select size="1" name="cmbValeurs">
                        <option>choix1</option>
                        <option selected>choix2</option>
                        <option>choix3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>liste à choix simple</td>
                <td>
                    <select size="3" name="lst1">
                        <option selected>liste1</option>
                        <option>liste2</option>
                        <option>liste3</option>
                        <option>liste4</option>
                        <option>liste5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>liste à choix multiple</td>
                <td>
                    <select size="3" name="lst2" multiple>
                        <option>liste1</option>
                        <option>liste2</option>
                        <option selected>liste3</option>
                        <option>liste4</option>
                        <option>liste5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>bouton</td>
                <td>
                    <input type="button" value="Effacer" name="cmdEffacer" onclick="effacer()">
                </td>
            </tr>
            <tr>
                <td>envoyer</td>
                <td>
                    <input type="submit" value="Envoyer" name="cmdRenvoyer">
                </td>
            </tr>
            <tr>
                <td>rétablir</td>
                <td>
                    <input type="reset" value="Rétablir" name="cmdRétablir">
                </td>
            </tr>
        </table>
        <input type="hidden" name="secret" value="uneValeur">
    </form>
</body>

</html>