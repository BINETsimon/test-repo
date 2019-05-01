<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Vampire la mascarade</title>
    <link rel="icon" href="media/icon.png"/>
    <meta name="description" content="Fiches personnages pour le jeu Vampire The Masquerade"/>
    <meta name="keywords" content="JDR, Fiche, personnage, Vampire, Masquerade"/>
    <meta name="author" content="S.B"/>

    <!-- feuille de style principale -->
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css"/>
</head>

<body>
    <?php
    echo "<form action='inscription.php' method='post'>
    <h1><strong>Vos coordonnées</strong></h1>";
    if (isset($_POST['nom']) && !empty($_POST['nom'])){
        echo "<div>Nom : <input type='text' name='nom' value=" . $_POST['nom'] . "></div>";
    }else{
        echo "<div>Nom : <input type='text' name='nom'/></div>";
    }
    echo "<div>Prénom : <input type='text' name='prenom' /></div>
    <div>E-mail : <input type='text' name='mail' /></div>
    <div>Établissement : <input type='text' name='etablissement' /></div>";
    ?>
        <div>Ville : <input type='text' name='ville' /></div>
        <div>Date de naissance
            <select name='datejour' id='datejour'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
            </select>
            <select name='datemois' id='datemois'>
                <option value='janvier'>janvier</option>
                <option value='février'>février</option>
                <option value='mars'>mars</option>
                <option value='avril'>avril</option>
                <option value='mai'>mai</option>
            </select>
            <select name='dateannee' id='dateannee'>
                <option value='2000'>2000</option>
                <option value='2001'>2001</option>
                <option value='2002'>2002</option>
                <option value='2003'>2003</option>
                <option value='2004'>2004</option>
            </select>
        </div>
        <div>département
            <select name='département' id='departement'>
                <option value='paris'>Paris</option>
                <option value='sarthe'>Sarthe</option>
                <option value='indre'>Indre</option>
                <option value='marne'>Marne</option>
                <option value='vendee'>Vendée</option>
            </select>      
        </div>

        <h1><strong>Votre type d'emploi</strong></h1>
        <div><input type='radio' name='emploi' value='Enseignement'>Enseignement 
            <input type='radio' name='emploi' value='Education'>Éducation
            <input type='radio' name='emploi' value='Administration'>Administration
        </div>

        <h1><strong>Vos loisirs préférés</strong></h1>
        <div>
            <input type='checkbox' name='sv'>Son-Vidéo
            <input type='checkbox' name='tv'>Télévision
            <input type='checkbox' name='cinema'>Cinéma
        </div>
        <div>
            <input type='checkbox' name='prog'>Programmation
            <input type='checkbox' name='sport'>Sports
            <input type='checkbox' name='internet'>Internet
        </div>

        <h1><strong>Décrivez votre projet de site WEB</strong></h1>
        <TEXTAREA name='redacprojet' rows=5 cols=50>Décrivez succintement votre projet</TEXTAREA>
        <div><input type='submit' value='Effacer'><input type='submit' value='Envoyer'></div>
    </form>
</body>

</html>