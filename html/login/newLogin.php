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

// filters
$pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_STRING);
$psw = filter_input(INPUT_POST, "psw", FILTER_SANITIZE_STRING);
$mail = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$noTel = filter_input(INPUT_POST, "tel", FILTER_SANITIZE_STRING);
$ville = filter_input(INPUT_POST, "ville", FILTER_SANITIZE_STRING);
$npa = filter_input(INPUT_POST, "npa", FILTER_SANITIZE_STRING);
$pswVerif = filter_input(INPUT_POST, "psw", FILTER_SANITIZE_STRING);



if (isset($_POST["confirmer"])) {

    //echo $_FILES["imgAnimal"]["tmp_name"];
    if ($pseudo == "" || $mail == "" || $pswVerif == "") {
        $erreur =  "Veuillez remplir tous les champs obligatoires.";
    } else if (strlen($psw) < 8) {
        $erreur =  " Veuillez mettre un mot de passe avec au min. 8 caractère ! ";
    } else if (strlen($psw) >= 8) {
        // les mdp ne sont pas pareil
        if ($_POST["psw"] != $_POST["pswVerif"]) {
            $erreur = "Mot de passe et vérification non identiques";
        } else {
            // mdp pareil , redirection et enregistre l'user dans la bd
            insertUser($pseudo, $psw, $mail, $noTel, $ville, $npa);
            header("Location: ../../index.php");
        }
    }
}
?>
<!DOCTYPE html>

<html lang="fr">

<head>
    <title>New Account</title>
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
    <form method="POST" action="newLogin.php">
        <fieldset>
            <!--image rond -->
            <table>
                <tr>
                    <?php
                    // s'il y a une erreur 
                    if (!empty($erreur)) {
                        echo "<h3>" . $erreur .  "</h3>";
                    }

                    ?>
                </tr>
                <tr>
                    <td><span class="required">*</span><label for="pseudo">Pseudo : </label><input type="text" id="pseudo" name="pseudo" placeholder="Horushia" /></td>
                </tr>
                <tr>
                    <td><span class="required">*</span><label for="mail">Mail : </label><input type="email" id="email" name="email" placeholder="Horushia@gmail.com" /></td>
                </tr>
                <tr>
                    <td><label for="tel">Tel. : </label><input type="text" id="tel" name="tel" placeholder="076 693 34 41" /></td>
                </tr>
                <tr>
                    <td><label for="ville">Ville : </label><input type="text" id="ville" name="ville" placeholder="Genève" /></td>
                </tr>
                <tr>
                    <td><label for="npa">NPA : </label><input type="text" id="npa" name="npa" placeholder="1204" /></td>
                </tr>
                <tr>
                    <td><span class="required">*</span><label for="psw">Mot de passe : </label><input type="password" id="psw" name="psw" placeholder="8 caractère min." /></td>
                </tr>
                <tr>
                    <td><span class="required">*</span><label for="pswVerif">Vérification : </label><input type="password" id="pswVerif" name="pswVerif" placeholder="Verification" /></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="confirmer" value="Confirmer" />
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>

</body>

</html>