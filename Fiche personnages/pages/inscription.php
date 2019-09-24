<!DOCTYPE php>
<php class="spe">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Vampire la mascarade - formulaire</title>
    <link rel="icon" href="../../media/icon.png"/>
    <meta name="description" content="Inscription ou connexion au site de gestion de fiches Vampire : The Masquerade"/>
    <meta name="keywords" content="JDR, Fiche, personnage, Vampire, Masquerade"/>
    <meta name="author" content="S.B"/>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <!-- feuille de style principale -->
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css"/>
</head>

<body class="spe">
    <div class="fondformulaire">
        <div class="formulaire connexion">
            <h1>Connectez-vous</h1>
            <form action="inscription.php" method="post">
                <input type='text' name='login' value="login"></br>
                <input type='text' name='mdp' value="mot de passe"></br>
                <input class="submit" type="submit" value="Connexion"> 
                <input class="submit goin" type="submit" value="S'inscrire"> 
            </form>
        </div>
        <div class="formulaire inscriptions">
                <h1>Inscrivez-vous</h1>
                <form action="#" method="post">
                    <input type='text' name='login' value="login"></br>
                    <input type='text' name='mdp' value="mot de passe"></br>
                    <input type='text' name='mdp2' value="répétez votre mot de passe"></br>
                    <input type='text' name='mail' value="mail"></br>
                    <input class="submit" type="submit" value="Inscrption"> 
                    <input class="submit goco" type="submit" value="Se connecter"> 
                </form>
        </div>
        <div class="butons log">
            <a href="../index.php">retour</a>
        </div>
    </div>
</body>
</php>