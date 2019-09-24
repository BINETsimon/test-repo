<!DOCTYPE php>
<php>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Vampire la mascarade - création de fiches</title>
    <link rel="icon" href="../media/icon.png"/>
    <meta name="description" content="Gestion de ses fiches personnage à utiliser pour jouer à Vampire : The Masquarade"/>
    <meta name="keywords" content="JDR, Fiche, personnage, Vampire, Masquerade"/>
    <meta name="author" content="S.B"/>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <!-- feuille de style principale -->
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css"/>
</head>

<body>
    <header>
        <!-- barre de navigation -->
        <nav class="nav">
            <ul>    
                <li><a href="../index.php">Home</a></li>
                <li><a href="userFiche.php" class="active">Fiches personnage</a></li>
                <li><a href="salleJ.php">Salle de jeu</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li style="float:right"><a href="inscription.php">Utilisateur</a></li>
            </ul>           
        </nav>
        <nav class="navtab">
            <ul>    
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="userFiche.php" class="active">Fiches personnage</a></li>
                    <li><a href="salleJ.php">Salle de jeu</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="contact.php">Contact</a></li>
                <li><a href="inscription.php">Utilisateur</a></li>
            </ul>           
        </nav>
    </header>

    <main>
        <!-- tuto fiches fixé gauche -->
        <section class="editeur">
            <div class="boiteediteur">
                <h1>Edition de fiches</h1>
                <ol>
                    <li>Ajouter une fiche personnage</li>
                    <p>L’objectif de ce site est de pouvoir conserver, gérer et avoir accès rapidement à un grand nombre de « fiches personnage », que cela soit pour vos personnages non-joueurs, ou tout simplement votre propre fiche de joueur.</br>
                    Nous vous invitons à renseigner à renseigner chaque nouveau personnages important à vos yeux dans cette base de données. Chaque personnage pourra alors être classé selon vos préférences : sa chronique associée, son clan, sa génération, sa date de création voire son appartenance à une secte.</p>
                    <li>Creer sa fiche</li>
                    <p>Une fois une fiche ajoutée, vous pouvez y avoir accès avec son image. S’il n’y a pas eu d’image définie à la création du personnage : la fiche sera dotée exclusivement du nom et prénom du personnage.</br>
                    La fiche ne correspond qu’aux caractéristiques du personnages :
                        <ul> 
                            <li>ses attributs ;</li>
                            <li>ses capacités ;</li>
                            <li>ses avantages ;</li>
                            <li>son niveau de santé ;</li>
                            <li>sa progression dans la voie ;</li>
                            <li>sa réserve de sang.</li>
                        </ul>
                    </p>
                    <li>Utiliser sa fiche</li>
                    <p>Dans un deuxième temps, vous pourrez demander à joindre une chronique et le maître-joueur de la chronique pourra (ou non) joindre votre personnage à sa chronique. Dès que le personnage sera associé à une chronique, le joueur ne pourra plus modifier les données de sa fiche mais son maître-joueur le pourra.</br>
                    Dans un troisième temps, le maître-joueur pourra retirer la fiche personnage de sa chronique et celle-ci ne pourra être modifiée que lorsque la fiche sera à nouveau associée à une chronique. </p>
                    <li>Lire une fiche</li>
                    <p>La lecture d’une fiche ne diffère pas de celle donnée dans le manuel : Edition 20e anniversaire Vampire La Mascarade. En effet, chaque bulle « pleine » compte pour un point supplémentaire dans la catégorie et chaque bulle « vide » compte pour un point non-acquis par le personnage.</p>
                </ol>
            </div>
        </section>

        <!-- différentes fiches personnages -->
        <article class="articlemargin">
            <div class="fichesP">
                <a href="Fiches/ficheP.php"><img src="../media/perso/personnage_1.jpg" width="250px" title="vampire 1" alt="vampire 1"></a>
            </div>
            <div class="fichesP">
                <a href="Fiches/ficheP.php"><img src="../media/perso/personnage_2.jpg" width="250px" title="vampire 2" alt="vampire 2"></a>
            </div>
            <div class="fichesP">
                <a href="Fiches/ficheP.php"><img src="../media/perso/personnage_3.jpg" width="250px"></a>
            </div>
            <div class="fichesP">
                <a href="Fiches/ficheP.php"><img src="../media/perso/personnage_4.jpg" width="250px" title="vampire 3" alt="vampire 3"></a>
            </div>
            <div class="fichesP">
                <a href="Fiches/ficheP.php"><img src="../media/perso/personnage_5.jpg" width="250px" title="vampire 4" alt="vampire 4"></a>
            </div>
            <div class="fichesP">
                <a href="Fiches/ficheP.php"><img src="../media/perso/personnage_6.jpg" width="250px" title="vampire 5" alt="vampire 5"></a>
            </div>
            <div class="fichesP">
                <a href="Fiches/ficheP.php"><img src="../media/perso/personnage_7.jpg" width="250px" title="vampire 6" alt="vampire 6"></a>
            </div>
            <div class="fichesP">
                <a href="Fiches/ficheP.php"><img src="../media/perso/personnage_8.jpg" width="250px" title="vampire 7" alt="vampire 7"></a>
            </div>
            <div class="fichesP">
                <a href="Fiches/ficheP.php"><img src="../media/perso/personnage_9.jpg" width="250px" title="vampire 8" alt="vampire 8"></a>
            </div>
            <div class="fichesP">
                <a href="Fiches/ficheP.php"><img src="../media/perso/personnage_10.jpg" width="250px" title="vampire 9" alt="vampire 9"></a>
            </div>
        </article>

    </main>
    <footer>
        <div class="footerB">
            <h2>Pages :</h2>
            <a href="../index.php">Home</a>
            <a href="userFiche.php">Fiches personnage</a>
            <a href="Fiches/ficheP.php">Fiches perso type</a>
            <a href="salleJ.php">Salle de jeu (loader)</a>
            <a href="news.php">News</a>
            <a href="contact.php">Contact</a>
            <a href="inscription.php">Utilisateur</a>
        </div>
        <div class="footerB sanslien">
            <img src="../media/vampireb.png">
            <p>Site qui sert aux joueurs de Vampire : La Masquarade pour sauvegarder et jouer avec leurs fiches personnage. Ne remplacez pas une bonne partie IRL.</p>
            <div class="copyright">
                Ploupcorp, Paris, France | 2019 © Tous droits réservés 
            </div>
        </div>
        <div class="footerB sanslien">
            <h2>Nous contacter :</h2>
            <div class="directlink">
                <a href="https://www.instagram.com/" target="_blank"><img src="../media/reseaux/instagram-logo.png"></a>
                <a href="https://www.facebook.com/" target="_blank"><img src="../media/reseaux/facebook.png"></a>
            </div>
            <div class="contactplus">
                <img src="../media/reseaux/email.png"> 
                <p style="margin:0">ContactVampireLaMascarade@gmail.com</p>
            </div>
            <div class="contactplus">
                <img src="../media/reseaux/call.png">
                <p>00 00 00 00 00</p>
            </div>
        </div>
    </footer>
</body>
</php>