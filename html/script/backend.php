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

// inert annonce dans DB
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
function displayAnnonce(Type $var = null)
{
    # code...
}
// pour améliorer le site
function deleteAnnonce(Type $var = null)
{
    # code...
}
