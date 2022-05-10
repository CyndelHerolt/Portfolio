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
    <section id="first_section5">
        <h1>CONTACT</h1>
        <h2>N'attendez plus, contactez Bricoach !</h2>
    </section>
    <section id="second_section5">

    <h4>Par mail :</h4>

    <form method="POST" action="envoyer_mail.php">

        <div id="formulaire">
            <div>
                <label class="labl" for="prenom">PRENOM :</label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div>
                <label class="labl" for="nom">NOM :</label>
                <input type="text" id="nom" name="nom">
            </div>
            <div>
                <label class="labl" for="mail">E-MAIL :</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label class="labl" for="msg">MESSAGE :</label>
                <textarea id="msg" name="message"></textarea>
            </div>
            <div class="button">
                <input id="btn" type="submit" value="ENVOYER" />
            </div>
        </div>
    </form>

    <h4>Par téléphone :</h4>

    <p>06 99 02 57 51<br>du lundi au vendredi<br>de 8h à 19h</p>
        </section>
    <footer>
        <p>SIRET 810 340 299 00017<br>
            MAAF 110128906 D</p>
            <p>bruno@bricoach.fr<br>
            0699025751</p>
    </footer>

</body>
</html>