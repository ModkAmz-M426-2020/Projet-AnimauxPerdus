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
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/projects/Proj-AnimauxPerdu/css/loginCss.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>test</h1>
        <form method="POST" action="accueil_2.php">
        <fieldset>
            <h1> Connexion </h1>
            <!--image rond -->
            <table>
                <tr><span class="required">*</span><label>Pseudo</label></tr>
               <tr> <input type="text" name="pseudo" required/></tr>

               <tr><span class="required">*</span><label>Mot de passe</label></tr>
               <tr><input type="password" name="psw" required/></tr>
               
               <tr>
                <input type="submit" name="submit" value="Connexion"/>
               </tr>
               <tr>
                <a href="newLogin.php" >Créer un compte</a>
               </tr>
              
            </table>
        </fieldset>
        </form>
        
    </body>
  <!-- <script></script> -->
</html>

