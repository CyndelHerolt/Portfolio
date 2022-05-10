<?php
session_start();

if (count($_POST)==0) {
    header('Location: index.php#contact');
}

//prenom

if (!empty (htmlspecialchars($_POST['prenom']))){
    $prenom = ucfirst (mb_strtolower($_POST['prenom']));
}
else {
    $_SESSION['erreur']= 'Erreur : Le champ prénom est vide';
    header('Location: index.php#contact');
    exit(0);
}

//nom

if (!empty (htmlspecialchars($_POST['nom']))){
    $nom = ucfirst (mb_strtoupper($_POST['nom']));
}
else {
    $_SESSION['erreur']= 'Erreur : Le champ nom est vide';
    header('Location: index.php#contact');
    exit(0);
}

//email

if (!empty (htmlspecialchars($_POST['email']))) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $email=$_POST['email'];
    }
    else {
        $_SESSION['erreur']= 'Erreur : Le champ e-mail n\'est pas au bon format';
        header('Location: index.php#contact');
        exit(0);
    }
}
else {
    $_SESSION['erreur']= 'Erreur : Le champ e-mail est vide';
    header('Location: index.php#contact');
    exit(0);
}

//message

if (!empty (htmlspecialchars($_POST['msg']))){
    $nom = ucfirst (mb_strtolower($_POST['msg']));
}
else {
    $_SESSION['erreur']= 'Erreur : Le champ message est vide';
    header('Location: index.php#contact');
    exit(0);
}

// 3) Envoi du mail
$destinataire = 'cyndelherolt@gmail.com';
$sujet = 'Contact via portfolio - '. $_POST['prenom'] .' '. $_POST['nom'] .' - '. $_POST['entreprise'] .' - '.date('d/m/Y');
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$message = $_POST['msg'];
if (mail($destinataire, $sujet, $message, $headers)) {
    $_SESSION['ok']= 'Message envoyé !'."\n";
    header('Location: index.php#contact');
} else {
    $_SESSION['erreur']= 'Erreur : message non envoyé !'."\n";
    header('Location: index.php#contact');
    exit(0);
}

//Mail de confirmation pour l'internaute
$headers = 'From : cyndelherolt@gmail.com' . "\n" .
    'Reply-To: no-reply@cyndelherolt.fr' . "\n" .
    'X-Mailer: PHP' . phpversion();

if(mail($_POST['email'], 'Confirmation de demande', 'Nous avons bien reçu votre demande !', $headers)){
    header('Location: index.php#contact');
} else{
    $_SESSION['erreur']= 'Erreur : message de confirmation non envoyé !'."\n";
    header('Location: index.php#contact') . "\n";
    exit(0);
}
?>