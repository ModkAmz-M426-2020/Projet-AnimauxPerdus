<!--
 * Projet: Animaux Perdus|| M426
 * 
 * Description: site d'annonce qui permettra aux utilisateurs de poster des annonces lorsqu'ils recherchent un animal 
 * ou lorqu'ils ont trouvé un animal perdu.
 *
 * ODAKA M. et Myaz A.|| CFPT-I || IFDA-P2C
 * 
 * Date: 26.04.2020
 -->
<!DOCTYPE html>

<html lang="fr">

<head>
    <title> Login exist</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="\projects\Projet-AnimauxPerdus\css\loginCss.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <form method="POST" action="accueil_2.php">
        <fieldset>

            <!--image rond -->
            <table>
                <tr>
                    <img src="img\loginImg.jpg" alt="login" width="" />
                </tr>
                <tr>
                    <td><span class="required">*</span><label for="pseudo">Pseudo : </label><input type="text" id="pseudo" name="pseudo" placeholder="Horushia" /></td>
                </tr>

                <tr>
                    <td><span class="required">*</span><label for="psw">Mot de passe : </label><input type="password" id="psw" name="psw" placeholder="8 caractère min." /></td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="connexion" value="connexion" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="html\login\newLogin.php">Créer un compte</a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>