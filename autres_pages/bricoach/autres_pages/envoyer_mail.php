<?php
if (count($_POST)==0) {
    header('Location: contact.php');
}

//prenom

if (!empty($_POST['prenom'])){
    $prenom = ucfirst (mb_strtolower($_POST['prenom']));
}
else {
    echo "<p>Erreur : Le champ prénom est vide</p>";
    exit(0);
}

//nom

if (!empty($_POST['nom'])){
    $nom = ucfirst (mb_strtoupper($_POST['nom']));
}
else {
    echo "<p>Erreur : Le champ nom est vide</p>";
    exit(0);
}

//email

if (!empty($_POST['email'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $email=$_POST['email'];
     } 
     else {
            echo "<p>Erreur: le champ email n'est pas au bon format</p>";
            exit(0);
        } 
    }
    else {
        echo "<p>Erreur: le champ email est vide</p>";
        exit(0);
    }

// 3) Envoi du mail
$destinataire = 'herolt.cyndel@gmail.com';
$sujet = 'Demande de renseignement - '.date('d/m/Y');
$headers = 'From: ' . $email . "\r\n" .
'Reply-To: '. $email . "\r\n" .
'X-Mailer: PHP/' . phpversion();

$message = $_POST['message'];
if (mail($destinataire, $sujet, $message, $headers)) {
    echo 'Message envoyé : OK !'."\n";
// on revient à la page d'accueil
    header('Location: contact.php');
} else {
    echo 'Erreur : message non envoyé !'."\n";
}

//Mail de confirmation pour l'internaute 
$headers = 'From : herolt.cyndel@gmail.com' . "r\n" .
'Reply-To: no-reply@bricoach.fr' . "r\n" .
'X-Mailer: PHP' . phpversion();

if(mail($_POST['email'], 'Confirmation de demande', 'Nous avons bien reçu votre demande !', $headers)){
    header('Location: contact.php');
} else{
    echo 'Erreur : message de confirmation non envoyé !' . "\n";
}


?>