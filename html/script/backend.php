<?php
require_once __DIR__ . '\..\..\BD\config\config.inc.php';

// connexion DB
try {

    $conn = new PDO("mysql:host=$SERVERNAME;dbname=$DATABASENAME;charset=utf8", $USERNAME, $PASSWORD);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected DB successfully";
} catch (PDOException $ex) {

    echo "Connection failed :" . $ex->getMessage();
}

// insert annonce dans DB
function insertAnnonce($statut, $ville, $npa, $urlPhoto, $tatoue, $describe, $titre, $espece, $date)
{
    global $conn;

    try {
        $req = $conn->prepare("INSERT INTO `annonce`.`animal` (`idAnimal`, `statut`, `ville`, `npa`, `urlPhoto`, `tatoue`, `description`, `titre`, `espece`, `date` ) VALUES (NULL, :statut , :ville, :npa, :photo, :tatoue, :describe, :titre, :espece, :dateAnimal);");

        $req->bindParam(':statut ', $statut, PDO::PARAM_BOOL);
        $req->bindParam(':ville', $ville, PDO::PARAM_STR);
        $req->bindParam(':npa', $npa, PDO::PARAM_STR);
        $req->bindParam(':urlPhoto', $urlPhoto, PDO::PARAM_LOB);
        $req->bindParam(':tatoue', $tatoue, PDO::PARAM_STR);
        $req->bindParam(':describe', $describe, PDO::PARAM_STR);
        $req->bindParam(':titre', $titre, PDO::PARAM_STR);
        $req->bindParam(':espece', $espece, PDO::PARAM_STR);
        $req->bindParam(':dateAnimal', $date, PDO::PARAM_STR);
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        throw new Exception($e->getMessage(), $e->getCode());
        return false;
    }
}

// création du compte
function insertLogin($pseudo, $psw, $email, $noTel,  $ville, $npa)
{
    global $conn;
    try {
        $req = $conn->prepare("INSERT INTO `annonce`.`utilisateur` (`idUser`, `pseudo`, `password`, `email`, `noTel`, `ville`, `npa`) VALUES (NULL, :pseudo , :psw, :email, :noTel,:ville, :npa);");

        $req->bindParam(':pseudo ', $pseudo, PDO::PARAM_STR);
        $req->bindParam(':psw', $psw, PDO::PARAM_STR);
        $req->bindParam(':email', $email, PDO::PARAM_STR);
        $req->bindParam(':noTel', $noTel, PDO::PARAM_STR);
        $req->bindParam(':ville', $ville, PDO::PARAM_STR);
        $req->bindParam(':npa', $npa, PDO::PARAM_STR);
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        throw new Exception($e->getMessage(), $e->getCode());
        return false;
    }
}
// connexion au compte
function connectLogin(Type $var = null)
{
    // select where user == $user
}
// Aliya
function displayAnnonces()
{
  //récupérer le tableau des annonces
  $annonces = recoverAnnonce();

  //Trouver le nombre d'annonces
  $nbAnnonces = count($annonces);

    for($i = 0; $i<$nbAnnonces; $i++){
      //si l'annonce est paire, ouvrir une nouvelle ligne
      if($i % 2 = 0){
        echo "<div class=<\"ligneArticles\">";
      }

      //Afficher l'annonce
      echo "<div class=\"article\">";
      echo "<div class=\"groupArticle\">"
      $annonce = $annonces[$i];
        //Afficher le titre
        echo "<h2>".$annonce[0]."</h2>";
        //si l'annonce possède une photo, afficher la photo, sinon afficher la description
        if($annonce[1] != null && $annonce[1] != ""){
          echo "<img class=\"imageAnnonce\" src=\"".$annonce[1]."\"/>";
        }
        else{
          echo "<p class=\"descriptionAnnonce\">".$annonce[2]."</p>";
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
// pour améliorer le site
function deleteAnnonce(Type $var = null)
{
    # code...
}

// récupérer les annonces
function recoverAnnonce()
{
    global $conn;

    try {
        $req = $conn->prepare("SELECT titre, image, description from animal");

        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        throw new Exception($e->getMessage(), $e->getCode());
        return false;
    }
}



/*
//Trouver et enregistrer le nombre d'annonces
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
}*/
