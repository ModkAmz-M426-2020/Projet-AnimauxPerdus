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
<?php
include '..\script\backend.php';
$pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_STRING);
$psw = filter_input(INPUT_POST, "psw", FILTER_SANITIZE_STRING);

if (isset($_POST["connexion"])) {
    $erreur;
    $result = connectLogin($pseudo, $psw);
    if (empty($result)) {
        $erreur =  "Votre nom d'utilisateur ou mot de passe est incorrecte.";
    } else if (!empty($result)) {

        header("Location: ../../index.php");
    }
}

?>
<!DOCTYPE html>

<html lang="fr">

<head>
    <title> Login exist</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="\projects\Projet-AnimauxPerdus\css\loginCss.css" rel="stylesheet" type="text/css" />

</head>
<style>
    h3 {
        color: red;
        font-size: 15px;
    }
</style>

<body>
    <form method="POST" action="login.php">
        <fieldset>
            <table>
                <!--image rond -->
                <tr>
                <tr>
                    <?php
                    // s'il y a une erreur 
                    if (!empty($erreur)) {
                        echo "<h3>" . $erreur .  "</h3>";
                    }
                    ?>
                </tr>
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
                        <a href="newLogin.php">Créer un compte</a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>