<!DOCTYPE php>
<php>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Vampire la mascarade - fiche personnage</title>
    <link rel="icon" href="../../media/icon.png"/>
    <meta name="description" content="Fiche personnage type"/>
    <meta name="keywords" content="JDR, Fiche, personnage, Vampire, Masquerade"/>
    <meta name="author" content="S.B"/>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <!-- feuille de style principale -->
    <link rel="stylesheet" type="text/css" media="screen" href="../../css/main.css"/>
</head>

<body>
    <header>
        <!-- barre de navigation -->
        <nav class="nav">
            <ul>    
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../userFiche.php">Fiches personnage</a></li>
                <li><a href="../salleJ.php">Salle de jeu</a></li>
                <li><a href="../news.php">News</a></li>
                <li><a href="../contact.php">Contact</a></li>
                <li style="float:right"><a href="../inscription.php">Utilisateur</a></li>
            </ul>           
        </nav>
        <nav class="navtab">
            <ul>    
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="../userFiche.php">Fiches personnage</a></li>
                    <li><a href="../salleJ.php">Salle de jeu</a></li>
                    <li><a href="../news.php">News</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                <li><a href="../inscription.php">Utilisateur</a></li>
            </ul>           
        </nav>
    </header>

    <main>
        <article class="container">
            <img src="../../media/vampire.png">
            <div class="zones formulairevamp">
                <form action="ficheP.php" method="post">
                    Nom : <input type='text' name='Nom'>
                    Chronique : <input type='text' name='Chronique'>
                    Joueur : <input type='text' name='Joueur'>
                </form>
                <form action="ficheP.php" method="post">
                    Nature : <input type='text' name='Nature'>
                    Attitude : <input type='text' name='Attitude'>
                    Concept : <input type='text' name='Concept'>
                </form>
                <form action="ficheP.php" method="post">
                    Clan : <input type='text' name='Clan'>
                    Génération : <input type='text' name='Génération'>
                    Refuge : <input type='text' name='Refuge'>
                </form>
            </div>
            <h1>Attributs</h1>
            <div class="zones">
                <div class="attributs">
                    <h2>Physique</h2>
                    <form action="ficheP.php" method="post">
                        <div>Force <input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'> </div>
                        <div>Dextérité <input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'> </div>
                        <div>Vigueur <input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'> </div>
                    </form>
                </div>
                <div class="attributs">
                    <h2>Social</h2>
                    <form action="ficheP.php" method="post">
                        <div>Charisme <input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'> </div>
                        <div>Manipulation <input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'> </div>
                        <div>Apparence <input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'> </div>
                    </form>
                </div>
                <div class="attributs">
                    <h2>Mental</h2>
                    <form action="ficheP.php" method="post">
                        <div>Perception <input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'> </div>
                        <div>Intelligence <input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'> </div>
                        <div>Astuce <input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'> </div>
                    </form>                  
                </div>
            </div>
            <h1>Capacites</h1>
            <div class="zones">
                <div class="attributs">
                    <h2>Mental</h2>
                    <form action="ficheP.php" method="post">
                        <div>Vigilance <input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'> </div>
                        <div>Athlétisme <input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'> </div>
                        <div>Bagarre <input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'> </div>
                        <div>Esquive <input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'> </div>
                        <div>Empathie <input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'> </div>
                        <div>Expression <input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'> </div>
                        <div>Intidimidation <input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'> </div>
                        <div>Commandement <input type="radio" name='8'><input type="radio" name='8'><input type="radio" name='8'><input type="radio" name='8'><input type="radio" name='8'> </div>
                        <div>Expérience de la rue <input type="radio" name='9'><input type="radio" name='9'><input type="radio" name='9'><input type="radio" name='9'><input type="radio" name='9'> </div>
                        <div>Subterfuge <input type="radio" name='10'><input type="radio" name='10'><input type="radio" name='10'><input type="radio" name='10'><input type="radio" name='10'> </div>
                    </form>
                </div>
                <div class="attributs">
                    <h2>Competences</h2>
                    <form action="ficheP.php" method="post">
                        <div>Animaux <input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'> </div>
                        <div>Artisanat <input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'> </div>
                        <div>Conduite <input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'> </div>
                        <div>Étiquette <input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'> </div>
                        <div>Armes à feu <input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'> </div>
                        <div>Mélée <input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'> </div>
                        <div>Représentation <input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'> </div>
                        <div>Sécurité <input type="radio" name='8'><input type="radio" name='8'><input type="radio" name='8'><input type="radio" name='8'><input type="radio" name='8'> </div>
                        <div>Furtivité <input type="radio" name='9'><input type="radio" name='9'><input type="radio" name='9'><input type="radio" name='9'><input type="radio" name='9'> </div>
                        <div>Survie <input type="radio" name='10'><input type="radio" name='10'><input type="radio" name='10'><input type="radio" name='10'><input type="radio" name='10'> </div>
                    </form>
                </div>
                <div class="attributs">
                    <h2>Connaissances</h2>
                    <form action="ficheP.php" method="post">
                        <div>Érudition <input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'> </div>
                        <div>Informatique <input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'> </div>
                        <div>Finances <input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'> </div>
                        <div>Investigation <input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'> </div>
                        <div>Droit <input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'> </div>
                        <div>Linguistique <input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'> </div>
                        <div>Médecine <input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'> </div>
                        <div>Occultisme <input type="radio" name='8'><input type="radio" name='8'><input type="radio" name='8'><input type="radio" name='8'><input type="radio" name='8'> </div>
                        <div>Politique <input type="radio" name='9'><input type="radio" name='9'><input type="radio" name='9'><input type="radio" name='9'><input type="radio" name='9'> </div>
                        <div>Sciences <input type="radio" name='10'><input type="radio" name='10'><input type="radio" name='10'><input type="radio" name='10'><input type="radio" name='10'> </div>
                    </form>
                </div>
            </div>
            <h1>Avantages</h1>
            <div class="zones">
                <div class="attributs">
                    <h2>Historiques</h2>
                    <form action="ficheP.php" method="post">
                        <div><input type='text' name='historique1' class="txt"><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'> </div>
                        <div><input type='text' name='historique2' class="txt"><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'> </div>
                        <div><input type='text' name='historique3' class="txt"><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'> </div>
                        <div><input type='text' name='historique4' class="txt"><input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'> </div>
                        <div><input type='text' name='historique5' class="txt"><input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'> </div>
                        <div><input type='text' name='historique6' class="txt"><input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'> </div>
                        <div><input type='text' name='historique7' class="txt"><input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'> </div>
                    </form>
                </div>
                <div class="attributs">
                    <h2>Disciplines</h2>
                    <form action="ficheP.php" method="post">
                        <div><input type='text' name='Disciplines1' class="txt"><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'> </div>
                        <div><input type='text' name='Disciplines2' class="txt"><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'> </div>
                        <div><input type='text' name='Disciplines3' class="txt"><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'> </div>
                        <div><input type='text' name='Disciplines4' class="txt"><input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'><input type="radio" name='4'> </div>
                        <div><input type='text' name='Disciplines5' class="txt"><input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'><input type="radio" name='5'> </div>
                        <div><input type='text' name='Disciplines6' class="txt"><input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'><input type="radio" name='6'> </div>
                        <div><input type='text' name='Disciplines7' class="txt"><input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'><input type="radio" name='7'> </div>
                    </form>
                </div>
                <div class="attributs">
                    <h2>Vertues</h2>
                    <div>
                        <form action="ficheP.php" method="post">
                            <div>Conscience/</br>Conviction<input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'> </div></br>
                            <div>Maîtrise de soi/</br>instict<input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'> </div></br>
                            <div>Courage<input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'><input type="radio" name='3'> </div>
                        </form>
                    </div>
                </div>
            </div>
            <h1>Plus</h1>
            <div class="zones">
                <div class="attributs atouts">
                    <h2>Atous & handicaps</h2>
                    <form action="ficheP.php" method="post">
                        <input type='text' name='bonus1' class="txt">
                        <input type='text' name='bonus2' class="txt">
                        <input type='text' name='bonus3' class="txt">
                        <input type='text' name='bonus4' class="txt">
                        <input type='text' name='bonus5' class="txt">
                        <input type='text' name='bonus6' class="txt">
                        <input type='text' name='bonus7' class="txt">
                        <input type='text' name='bonus8' class="txt">
                        <input type='text' name='bonus9' class="txt">
                        <input type='text' name='bonus10' class="txt">
                        <input type='text' name='bonus11' class="txt">
                    </form>
                </div>
                <div class="attributs">
                    <div class="partie">
                        <h2>Humanite/Voie</h2>
                        <div class="humanite">
                            <input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'><input type="radio" name='1'>
                        </div>
                    </div>
                    <div class="partie">
                        <h2>volonte</h2>
                        <div class="volonte">
                            <input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'><input type="radio" name='2'>
                        </div>
                        <div class="volonte">
                            <input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'>
                        </div>
                    </div>
                    <div class="partie">
                        <h2>Reserve de sang</h2>
                        <div class="humanite">
                            <input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'>
                        </div>
                        <div class="humanite">    
                            <input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'><input type="checkbox" name='3'>
                        </div>
                    </div>
                </div>
                <div class="attributs">
                    <div class="partie">
                        <h2>Sante</h2>
                        <form action="ficheP.php" method="post">
                            <div>Contusion<input type="checkbox" name='Contusion'></div>
                            <div>Blessure légère (-1)<input type="checkbox" name='BlessureL'></div>
                            <div>Blessure moyenne (-1)<input type="checkbox" name='BlessureM'></div>
                            <div>Blessure grave (-2)<input type="checkbox" name='BlessureG'></div>
                            <div>Handicap (-2)<input type="checkbox" name='Handicap'></div>
                            <div>Infirmité (-5) <input type="checkbox" name='Infirmite'></div>
                            <div>Invalidité <input type="checkbox" name='Invalidite'></div>
                        </form>
                    </div>
                    <div class="partie">
                        <h2>Experience</h2>
                        <div class="barreEx">
                            <div class="experience">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <footer>
        <div class="footerB">
            <h2>Pages :</h2>
            <a href="../../index.php">Home</a>
            <a href="../userFiche.php">Fiches personnage</a>
            <a href="../Fiches/ficheP.php">Fiches perso type</a>
            <a href="../salleJ.php">Salle de jeu (loader)</a>
            <a href="../news.php">News</a>
            <a href="../contact.php">Contact</a>
            <a href="../inscription.php">Utilisateur</a>
        </div>
        <div class="footerB sanslien">
            <img src="../../media/vampireb.png">
            <p>Site qui sert aux joueurs de Vampire : La Masquarade pour sauvegarder et jouer avec leurs fiches personnage. Ne remplacez pas une bonne partie IRL.</p>
            <div class="copyright">
                Ploupcorp, Paris, France | 2019 © Tous droits réservés 
            </div>
        </div>
        <div class="footerB sanslien">
            <h2>Nous contacter :</h2>
            <div class="directlink">
                <a href="https://www.instagram.com/" target="_blank"><img src="../../media/reseaux/instagram-logo.png"></a>
                <a href="https://www.facebook.com/" target="_blank"><img src="../../media/reseaux/facebook.png"></a>
            </div>
            <div class="contactplus">
                <img src="../../media/reseaux/email.png"> 
                <p style="margin:0">ContactVampireLaMascarade@gmail.com</p>
            </div>
            <div class="contactplus">
                <img src="../../media/reseaux/call.png">
                <p>00 00 00 00 00</p>
            </div>
        </div>
    </footer>
</body>
</php>