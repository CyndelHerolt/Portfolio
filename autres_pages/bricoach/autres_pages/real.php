<html lang="fr">
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>BRICOACH</title>
</head>
<body>
    <header>
        <nav role="navigation">
            <div id="menuToggle">

                <input type="checkbox" />

                <span></span>
                <span></span>
                <span></span>
                <div id="menu">
                    <a href="../index.html">ACCUEIL</a>
                    <a href="a_propos.html">A PROPOS</a>
                    <a href="services.html">SERVICES</a>
                    <a href="real.php">REALISATIONS</a>
                    <a href="contact.php">CONTACT</a>
                </div>
            </div>
        </nav>
    </header>
    <section id="first_section4">
        <h1>REALISATIONS</h1>
        <h2>Votre projet vous semble trop compliqué ? 
            Demandez l'aide de Bricoach !</h2>
    </section>
    <section id="second_section4">
        <form method="post" action="ajout_image.php" enctype="multipart/form-data">
            <input class="in" type="file" name="nouvelleImage" />
            <input class="in" type="password" name="mdp" placeholder="Mot de passe" />
            <input class="in" type="submit" value="Ajouter" />
        </form>

        <?php
            if (!empty($_SESSION['messageImage'])) {
            echo '<p>'.$_SESSION['messageImage'].'</p>'."\n";
            $_SESSION['messageImage']=null;
            }
        ?>

        <div id="mesImages">
        <?php
            //lire et mettre dans $contenu le contenu du dossier
            $contenu=dir("../img/galerie/");
            //tant qu'il y a des éléments dans le dossier :
            while ($nomElement=$contenu->read() ) {
                if (!is_dir('../img/galerie/' . $nomElement)) {
                    // on récupère les quatre derniers caractères du fichier
                    // donc son extension
                    $extension=(strtolower(substr($nomElement, -4))); // les 4 derniers
                    if (($extension=='.jpg') || ($extension=='.png')) {
                    //ecrire le nom de l'élément et sauter une ligne
                    echo '<img src="../img/galerie/' . $nomElement . '"alt="' . $nomElement .'" />' . "\n";
            }
        }
    }
            //on ferme la lecture du dossier
            $contenu->close();    
        ?>
    </section>
    <footer>
        <p>SIRET 810 340 299 00017<br>
            MAAF 110128906 D</p>
            <p>bruno@bricoach.fr<br>
            0699025751</p>
    </footer>
</body>
</html>