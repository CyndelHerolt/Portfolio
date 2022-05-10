<?php 
session_start();
// password admin
$admin_mdp='Fibonacci1321_';
// y a-t-il un fichier passé par le formulaire ?
if ( !empty($_FILES) ) {
// y a-t-il un mot de passe passé par le formulaire ?
    if ( !empty($_POST['mdp']) ) {
// on teste si le mot de passe est le bon
        if ( (password_verify($_POST['mdp'], $admin_mdp))
            ||
            ($_POST['mdp']=='bricoach123') ) {
            $nom = $_FILES['nouvelleImage']['name'];
            $nomTemporaire = $_FILES['nouvelleImage']['tmp_name'];
            $chemin = "../img/galerie/" . $nom;
            if (move_uploaded_file($nomTemporaire, $chemin)) {
            $_SESSION['messageImage'] = 'Image sauvegardée avec succès !';
             } else {
        $_SESSION['messageImage'] = 'Erreur de sauvegardede l\'image !';
        }
        } else {
        $_SESSION['messageImage'] = 'Erreur de mot de passe!';
        }
        } else {
        $_SESSION['messageImage'] = 'Le mot de passe est vide !';
        }
        }

    header('Location: real.php');
    ?>