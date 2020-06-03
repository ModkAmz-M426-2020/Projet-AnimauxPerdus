<?php
require_once __DIR__ . '\..\..\BD\config\config.inc.php';

// connexion DB
try {

    $conn = new PDO("mysql:host=$SERVERNAME;dbname=$DATABASENAME;charset=utf8", $USERNAME, $PASSWORD);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected DB successfully";
} catch (PDOException $ex) {

    //echo "Connection failed :" . $ex->getMessage();
}

// insert annonce dans DB
function insertAnnonce($statut, $ville, $npa, $urlPhoto, $tatoue, $description, $titre, $espece, $date)
{
    global $conn;

    try {
        $req = $conn->prepare("INSERT INTO animal (idAnimal, statut, ville, npa, urlPhoto, tatoue, description, titre, espece, date) VALUES (NULL, :statut, :ville, :npa, :urlPhoto, :tatoue, :description, :titre, :espece, :date);");

        $req->bindParam(':statut', $statut, PDO::PARAM_BOOL);
        $req->bindParam(':ville', $ville, PDO::PARAM_STR);
        $req->bindParam(':npa', $npa, PDO::PARAM_STR);
        $req->bindParam(':urlPhoto', $urlPhoto, PDO::PARAM_STR);
        $req->bindParam(':tatoue', $tatoue, PDO::PARAM_STR);
        $req->bindParam(':description', $description, PDO::PARAM_STR);
        $req->bindParam(':titre', $titre, PDO::PARAM_STR);
        $req->bindParam(':espece', $espece, PDO::PARAM_STR);
        $req->bindParam(':date', $date, PDO::PARAM_STR);
        $req->execute();
        return true;
    } catch (PDOException $e) {
        throw new Exception($e->getMessage(), $e->getCode());
        return false;
    }
}

// création du compte
function insertUser($pseudo, $psw, $email, $noTel,  $ville, $npa)
{
    global $conn;
    try {
        $req = $conn->prepare("INSERT INTO utilisateur (idUser, pseudo, password, email, noTel, ville, npa) VALUES (NULL, :pseudo , :psw, :email, :noTel,:ville, :npa);");

        $req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $req->bindParam(':psw', $psw, PDO::PARAM_STR);
        $req->bindParam(':email', $email, PDO::PARAM_STR);
        $req->bindParam(':noTel', $noTel, PDO::PARAM_STR);
        $req->bindParam(':ville', $ville, PDO::PARAM_STR);
        $req->bindParam(':npa', $npa, PDO::PARAM_STR);
        $req->execute();
        return true;
    } catch (PDOException $e) {
        throw new Exception($e->getMessage(), $e->getCode());
        return false;
    }
}
// connexion au compte
function connectLogin($pseudo, $psw)
{
    global $conn;

    try {
        $req = $conn->prepare("SELECT idUser from utilisateur where pseudo = :pseudo and password = :psw ;");
        $req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $req->bindParam(':psw', $psw, PDO::PARAM_STR);
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        throw new Exception($e->getMessage(), $e->getCode());
        return false;
    }
}

function displayAnnonces()
{
    $annonce = array();
    //récupérer le tableau des annonces
    $annonces = recoverAnnonce();

    //Trouver le nombre d'annonces
    $nbAnnonces = count($annonces);

    for ($i = 0; $i < $nbAnnonces; $i++) {

        //si l'annonce est paire, ouvrir une nouvelle ligne
        if ($i % 2 == 0) {
            echo "<div class='ligneArticles'>";
        }


        //Afficher l'annonce
        echo "<div class=\"article\">";
        echo "<div class=\"groupArticle\">";
        $annonce = $annonces[$i];

        //Afficher le titre
        echo "<h2>" . $annonce["titre"] . "</h2>";

        if ($annonce["urlPhoto"] != null && $annonce["urlPhoto"] != "") {
            echo "<img class=\"imageAnnonce\" src=\"" . $annonce["urlPhoto"] . "\"/>";
        } else {
            echo "<p class=\"descriptionAnnonce\">" . $annonce["description"] . "</p>";
        }

        echo "</div>";
        echo "<a class=\"lienAnnonce\" href=\"\"> voir l'annonce </a>";
        echo "</div>";


        //si l'annonce est impaire ou que c'est la dernière, fermer la nouvelle ligne
        if ($i % 2 != 0 || $i == $nbAnnonces - 1) {
            echo "</div>";
        }
    }
}

// récupérer les annonces
function recoverAnnonce()
{
    global $conn;

    try {
        $req = $conn->prepare("SELECT titre, urlPhoto, description from animal");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        throw new Exception($e->getMessage(), $e->getCode());
        return false;
    }
}
// pour améliorer le site
// function deleteAnnonce(Type $var = null)
// {
//     # code...
// }