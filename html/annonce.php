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
        <title>Formulaire Annonce</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/annonceCss.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form method="POST" action="accueil_2.php">
        <fieldset>
            <table>
                <tr>
                <td><span class="required">*</span><label>Titre de l'annonce : </label></td>
                    <td colspan="3"><input type="text" name="titre" placeholder="ex: Bulldog trouvé à Genève" require="required"/></td>
                </tr>
                <tr>
                    <td><span class="required">*</span><label for="perdu">Perdu</label><input type="radio" name="etat" value="perdu" id="perdu" require="required" checked/></td>
                    <td colspan="3"><span class="required">*</span><label for="trouve">Trouvé</label><input type="radio" name="etat" value="trouve" id="trouve" require="required"/></td>
                </tr>
                <tr>
                    <td><span class="required">*</span><label>Espèce : </label></td>
                    <td colspan="3">
                        <select name="espece" size="1">
                            <option>Chien</option>
                            <option>Chat</option>
                            <option>Rongeurs</option>
                            <option>Oiseaux</option>
                            <option>Autre</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label> Tattoué : </label></td>
                    <td><label for="oui">Oui</label><input type="radio" name="tatoo" id="oui" checked/> </td>
                    <td><label for="non">Non</label><input type="radio" name="tatoo" id="non"/> </td>
                    <td><label for="aucun">Ne sais pas</label><input type="radio" name="tatoo" id="aucun"/> </td>
                </tr>
                <tr>
                    <td><span class="required">*</span><label for="ville">Ville : </label><input type="text" id="ville" name="ville" placeholder="Genève"/></td>
                    <td><span class="required">*</span><label for="npa">NPA : </label><input type="text" id="npa"  name="npa" placeholder="1202"/></td>
                    <td colspan="2"><span class="required">*</span><label for="date">Date : </label><input type="date" id="date"  name="date" placeholder="jj/mm/aaaa"/></td>
                </tr>
                <tr>
                    <td><span class="required">*</span><label>Description : </label></td>
                    <td colspan="3"><textarea rows="10" cols="50"></textarea></td>
                </tr>
                <tr>
                    <!-- button qui va ouvrir l'explorateur de fichier-->
                    <td><label> Photo : </label></td>
                    <td colspan="3">trouver un moyen</td>
                </tr>
                <tr>
                    <td><span class="required">*</span><label>Contact : </label></td>
                    <td colspan="3"><textarea rows="5" cols="50"></textarea></td>
                </tr>
            </table>
        </fieldset>
        </form>

        
    </body>
   <!-- <script></script> -->
</html>

