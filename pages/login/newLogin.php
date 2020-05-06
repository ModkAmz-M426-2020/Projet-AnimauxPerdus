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
        <title>New Account</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css\loginCss.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
    <form method="POST" action="accueil_2.php">
        <fieldset>
        <h1> Inscription </h1>
            <!--image rond -->
            <table>
                <tr>
                    <span class="required">*</span><label>Pseudo</label>
                    </br>
                    <input type="text" name="pseudo" required/>
                </tr>
                </br>
                </br>
                <tr>
                    <span class="required">*</span><label>E-mail</label>
                    </br>
                    <input type="email" name="mail" required/>
                </tr>
                </br>
                </br>
                <tr>
                    <label>Téléphone</label></br>
                    <input type="text" name="noTel " required/>
                </tr>
                </br>
                </br>

                <tr>
                    <label>Ville </label>
                    </br>
                    <input type="text" name="ville " required/>
                </tr>
                </br>
                </br>
                <tr>
                    <label>NPA </label>
                    </br>
                    <input type="text" name="npa " required/>
                </tr>
                </br>
                </br>
                <tr>
                    <span class="required">*</span><label>Mot de passe</label>
                    </br>
                    <input type="password" name="psw " required/>
                </tr>
                </br>
                </br>

                <tr><span class="required">*</span><label>Vérifier le mot de passe</label>
                    </br>
                    <input type="password" name="verifPsw" required/>
                </tr>
                </br>
                </br>
                <tr>
                    <input type="submit" name="valider" value="Valider" />
                </tr>

            </table>
        </fieldset>
    </form>

</body>
<!-- <script></script> -->

</html>