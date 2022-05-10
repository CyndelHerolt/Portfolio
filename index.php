<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta description="Portfolio universitaire de Cyndel Herolt">
    <meta http-equiv="pragma" content="no-cache"/>
    <title>Cyndel Herolt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c610cfb1f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="position: fixed ;width: 100vw; background-color: #0c7a9f;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">CYNDEL HEROLT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#about">A PROPOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section id="home">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Cyndel Herolt</h1>
                <h2>Développeuse web</h2>
            </div>
            <div class="col-6">
                <img src="img/coding.svg" alt="welcome to my portfolio">
            </div>
        </div>
    </div>
</section>

<section id="about_section">
    <article id="about">
        <div>
            <h3>QUELQUES MOTS SUR MON PARCOURS</h3>
            <p>Beaucoup pensent que la réussite se trouve au bout d’une longue ligne droite. Quelle erreur !<br/>
                Pour ma part, c’est un parcours en zig-zags qui m’a menée à la découverte de ce que je sais aujourd’hui être mon futur, le <strong>développement web.</strong><br/>
                Alors voilà, sachez que cette perspective d’avenir n’a pas toujours été une évidence pour moi. C’est en intégrant le Bachelor Universitaire de
                Technologie des Métiers du Multimédia et de l’Internet (BUT MMI) que j’ai développé un <strong>attrait certain pour les mécanismes du web</strong>; que j’enrichis par une <strong>sensibilité littéraire et artistique</strong>.
            </p>
            <a href="pdf/cyndel_herolt_cv.pdf" target="_blank">cv</a>
            <br>
            <a href="pdf/lettre_recommandation.pdf" target="_blank">lettre de recommandation</a>
        </div>
    </article>
</section>

<section id="portfolio">
    <div class="container">

        <h3 class="title">PORTFOLIO - DEVELOPPEMENT WEB ET MAQUETTAGE</h3>

        <div class="row">
            <div class="col-6">
                <img src="img/work.svg" alt="illustration projets">
            </div>

            <div class="col-6">
                <div class="proj">
                    <div>
                        <h3>CLASSIC'ALL JAZZ</h3>
                        <p>Projet Universitaire <br> Site web : HTML - CSS - PHP - MYSQL</p>
                    </div>
                    <a href="autres_pages/classic_jazz.html"><button type="button" class="btn">Découvrir</button></a>
                </div>
                <hr>
                <div class="proj">
                    <div>
                        <h3>MUSIC PUNCTUATES OUR LIVES</h3>
                        <p>Blog de musique <br> Site web : HTML - CSS</p>
                    </div>
                    <a href="autres_pages/music.html"><button type="button" class="btn">Découvrir</button></a>
                </div>
                <hr>
                <div class="proj">
                    <div>
                        <h3>BRICOACH</h3>
                        <p>Projet en cours <br> Site web : HTML - CSS - PHP</p>
                    </div>
                    <a href="autres_pages/bricoach.html"><button type="button" class="btn">Découvrir</button></a>
                </div>
                <hr>
                <div class="proj">
                    <div>
                        <h3>ECO'CEPT</h3>
                        <p>Initation à Figma <br> Maquette : FIGMA</p>
                    </div>
                    <a href="autres_pages/eco_cept.html"><button type="button" class="btn">Découvrir</button></a>
                </div>
                <hr>
                <div class="proj">
                    <div>
                        <h3>JAZZ RADIO</h3>
                        <p>Redesign <br> Maquette intéractive : FIGMA</p>
                    </div>
                    <a href="autres_pages/jazz_radio.html"><button type="button" class="btn">Découvrir</button></a>
                </div>
                <hr>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div id="contact_article" class="row">
        <div id="contact_left" class="col">
            <h4>Entrons en contact !</h4>
            <a href="https://www.linkedin.com/in/cyndel-herolt/" target="_blank"><i class="fa-brands fa-linkedin fa-4x" style="color: #0c7a9f;"></i></a>
            <p>Par téléphone : <strong style="color: #0c7a9f"> 06 95 22 48 03 </strong></p>
        </div>
        <div class="col">
            <p>Par mail :</p>
            <form method="POST" action="envoyer_mail.php">
                <div class="row" style="margin-bottom: 15px">
                    <div class="col-6">
                        <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Prénom*" aria-label="Prénom">
                    </div>
                    <div class="col-6">
                        <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom*" aria-label="Nom">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 15px">
                    <div class="col-12">
                        <input type="text" id="entreprise" name="entreprise" class="form-control" placeholder="Entreprise" aria-label="Entreprise">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 15px">
                    <div class="col-12">
                        <input type="email" id="email" name="email" type="email" class="form-control" placeholder="Adresse mail*" aria-label="Adresse mail">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 15px">
                    <div class="col-12">
                        <textarea id="msg" name="msg" class="form-control" placeholder="Votre message*" aria-label="Votre message"></textarea>
                    </div>
                </div>

                <?php
                // s'il y a une erreur
                if (!empty($_SESSION['erreur'])) {
                    // on affiche cette erreur
                    echo '<p></p><p class="erreur">'.$_SESSION['erreur'].'</p>'."\n";
                    // on n'oublie pas de vider l'erreur juste après l'avoir affichée
                    $_SESSION['erreur']='';
                }

                //s'il n y a pas d'erreur
                if (!empty($_SESSION['ok'])) {
                    echo '<p></p><p class="ok">'.$_SESSION['ok'].'</p>'."\n";
                    $_SESSION['ok']='';
                }
                ?>

                <div class="row" style="justify-content: flex-end;">
                    <div class="col">
                        <p id="condition">Les champs marqués d'un * sont obligatoires.</p>
                    </div>
                    <div class="col-4">
                        <input id="envoi" type="submit" value="Envoyer">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <ul style="color: white; margin: 0;">
                    <li><a href="#home" style="text-decoration: none; color: white">ACCUEIL</a></li>
                    <li><a href="#about" style="text-decoration: none; color: white">A PROPOS</a></li>
                    <li><a href="#portfolio" style="text-decoration: none; color: white">PORTFOLIO</a></li>
                    <li><a href="#contact" style="text-decoration: none; color: white">CONTACT</a></li>
                </ul>
            </div>
            <div class="col-6">
                <ul style="color: white; margin: 0;">
                    <li><a href="pdf/cyndel_herolt_cv.pdf" target="_blank" style="text-decoration: none; color: white">CV</a></li>
                    <li><a href="pdf/lettre_recommandation.pdf" target="_blank" style="text-decoration: none; color: white">LETTRE DE RECOMMANDATION</a></li>
                </ul>
            </div>
            <div class="col-2" style="display: flex; justify-content: space-around">
                <a href="https://www.linkedin.com/in/cyndel-herolt/" target="_blank"><i class="fa-brands fa-linkedin fa-3x" style="color: white;"></i></a>
                <a href="https://www.instagram.com/cyndel_herolt/?hl=fr" target="_blank"><i class="fa-brands fa-instagram-square fa-3x" style="color: white;"></i></a>
            </div>
            <div class="col">
                <p style="margin: 0; color: white;">&copy Cyndel Herolt. 2022</p>
            </div>
        </div>
    </div>
</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>