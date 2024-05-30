<?php


$errorMsg= null;
require('connexion.php');



// verifier que tout les champs sont remplis
if(isset($_POST['inscription'])){
    if(!empty($_POST['user_name']) && !empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['email_user']) && !empty($_POST['mdp_user']) && !empty($_POST['dna'])){
    //    les donnes de user 
        $user_pseudo = htmlspecialchars($_POST['user_name']);
        $nom = htmlspecialchars($_POST['name']);
        $prenom = htmlspecialchars($_POST['lastname']);
        $email = htmlspecialchars($_POST['email_user']);
        $password = password_hash($_POST['mdp_user'], PASSWORD_DEFAULT);
        $datenai = htmlspecialchars($_POST['dna']);
// verifier si l'utulisateur exist deja
        $checkIfUserAlreadyExists = $access->prepare('SELECT pseudo FROM user WHERE pseudo=?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        

        if($checkIfUserAlreadyExists->rowCount() == 0){
            $insertUserIntoWebsite = $access->prepare('INSERT INTO user(pseudo,nom,prenom,email_user,password,dna_user) VALUES(?,?,?,?,?,?)');
            $insertUserIntoWebsite->execute(array($user_pseudo, $nom, $prenom, $email, $password, $datenai));


            $getInfoOfThisUserReq = $access->prepare('SELECT id_user, pseudo, nom, prenom, email_user FROM user WHERE nom=? AND prenom=? AND pseudo=? AND email_user=?');
            $getInfoOfThisUserReq->execute(array($nom, $prenom, $user_pseudo, $email));
            $usersInfo = $getInfoOfThisUserReq->fetch();
session_start();
           
            $_SESSION['auth'] = true;
            $_SESSION['id_user'] = $usersInfo['id_user'];
            $_SESSION['user_name'] = $usersInfo['pseudo'];
            $_SESSION['name'] = $usersInfo['nom'];
            $_SESSION['lastname'] = $usersInfo['prenom'];
            $_SESSION['email_user'] = $usersInfo['email_user'];

            // Redirect to the home page
            header('Location:acceuil2.php');
       
           
            
        } else {
            $errorMsg = "Utilisateur existe déjà";
        }
    } else {
        $errorMsg = "Veuillez remplir tous les champs";
    }
}
?>
