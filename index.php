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



<?PHP
include 'html\script\backend.php';

$nbAnnonces = 0;
$annonces;
?>

 <!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Accueil</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/cssAccueil.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <main>
          <header>
            <div class="groupHeader">
              <img class="logo" src="img/logo.png"/>
              <div class="textHeader">
                <h1>Nom du site</h1>
                <p class="slogan">Phrase slogan</p>
              </div>
            </div>

            <div class="groupHeader">
              <!--
                <?PHP
                 //Si on est connecté, afficher le input suivant
              ?>
             -->
              <a id="nouvelleAnnonce" class="iconeLien"> <img src="img/nouveau.png" \> </a>
              <a id="login" class="iconeLien"> <img src="img/login.png" \> </a>
            <div id="group1Header">
          </header>
          <nav>
            <select type="select" name="etat" id="etat">
            <option value="trouve">Trouvé</option>
            <option value="recherche">Recherché</option>
            </select>

            <select type="select" name="espece" id="espece">
            <option value="Toutes les espèces">Toutes les espèces</option>
            <option value="chat">Chat</option>
            <option value="chien">Chien</option>
            <option value="lapin">Lapin</option>
            <option value="rongeur">Rongueur</option>
            <option value="equide">Equidé</option>
            <option value="autre">Autre</option>
            </select>

            <select type="select" name="ville" id="ville">
            <option value="Toutes les villes">Toutes les villes</option>
            <option value="Genève">Genève</option>
            <option value="Lausanne">Lausanne</option>
            <option value="Neuchâtel">Neuchâtel</option>
            <option value="Vaus">Vaud</option>
            </select>

            <input type="text" name="npa" placeholder="code postal"/>

            <input class="validerRecherche" type="submit" name="validerRecherche" value="Chercher"/>
          </nav>
          <div class="articles">
          <!--
          <?PHP
          //afficher les annonces
          displayAnnonces();
          ?>
         -->
          </div>
        </main>
    </body>
</html>
