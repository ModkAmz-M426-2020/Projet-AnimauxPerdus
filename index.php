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


 <!--
<?PHP
   $mysql = mysqli_connect("127.0.0.1", "root", "", "annonce", 3306);
   $nbAnnonces;
//Récupéréer les champs
 ?>
-->
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
            //if(submit machin) => écrire la requête en fonction des critères de recherche
            //Trouver et enrefistrer le nombre d'annonces
            $reqNbAnnonces = "SELECT count(*) from animal";
            $resultNbAnnonces = mysqli_query($mysql, $reqNbAnnonces);
            while ($row = mysqli_fetch_row($resultNbAnnonces)) {
              $nbAnnonces = $row[0];
            }

            //Récupérer les id des annonces dans la BD
            $reqAnnonces = "SELECT titre, photo, description from animal";
            $resultAnnonces = mysqli_query($mysql, $reqAnnonces);


            while ($annonce = mysqli_fetch_object($resultAnnonces)) {
              //pour chaque annonce
              for($i = 0; $i<$nbAnnonces; $i++){
                //si l'annonce est paire, ouvrir une nouvelle ligne
                if($i % 2 = 0){
                  echo "<div class=<\"ligneArticles\">";
                }

                //Afficher l'annonce
                echo "<div class=\"article\">";
                echo "<div class=\"groupArticle\">"
                while ($row = mysqli_fetch_row($annonce[$i])) {
                  //Afficher le titre
                  echo "<h2>".$row[0]."</h2>";
                  //si l'annonce possède une photo, afficher la photo, sinon afficher la description
                  if($row[1] != null && $row[1] != ""){
                    echo "<img class=\"imageAnnonce\" src=\"".$row[1]."\"/>";
                  }
                  else{
                    echo "<p class=\"descriptionAnnonce\">".$row[2]."</p>";
                  }
                }
                echo "</div>";
                echo "<a class=\"lienAnnonce\" href=\"\"> voir l'annonce </a>";
                echo "</div>";


                //si l'annonce est impaire ou que c'est la dernière, fermer la nouvelle ligne
                if($i % 2 != 0 || $i = $nbAnnonces-1){
                  echo "</div>";
                }
              }
            }

          ?>
         -->
          </div>
        </main>
    </body>
</html>
