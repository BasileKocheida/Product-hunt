<?php // connecter l'utilisateur 

session_start();

require_once(__DIR__."/../connexion/bdd.php");


if (empty($_POST["nickname"])) {
    die("Paramètres manquants");
}

$_SESSION["nickname"] = $_POST["nickname"];


if (isset($_SESSION['nickname'])) {

    $userNickname = $_SESSION['nickname'];
    $req = $pdo->prepare('SELECT * FROM user WHERE nickname = ?');
    $req->execute([$userNickname]);
    $resultat = $req->fetch();
        
        if ($resultat){
            
            header('Location: ../index.php?message=Salut '.$userNickname.' You are connected !');
            
        } else {
            
            header('Location: /structure-page/signup.php?message=Please sign up to have the access');
        }
}