<?php
 
 if (!isset($_SESSION)) {
    session_start();
  }
require('connexion.php'); ?>


<?php

$errorMsg = "";

// Vérifie si le formulaire a été soumis
if(isset($_POST['change'])) {
    // Récupère les données du formulaire
    $id_user = $_SESSION['id_user'];
    $old_password = $_POST['old_pass'];
    $new_password = $_POST['new_pass'];
    $confirm_password = $_POST['confirm_pass'];
   
    // Vérifie si les champs ne sont pas vides
    if(empty($old_password) || empty($new_password) || empty($confirm_password)) {
        $errorMsg = "Veuillez remplir tous les champs.";
    } else {
        // Vérifie si le nouveau mot de passe et la confirmation correspondent
        if($new_password !== $confirm_password) {
            $errorMsg = "Le nouveau mot de passe et la confirmation ne correspondent pas.";
        } else {
            // Vérifie si l'ancien mot de passe correspond à celui stocké en base de données
            $check_password = $access->prepare('SELECT password FROM user WHERE id_user = ?');
            $check_password->execute(array($id_user));
            $user = $check_password->fetch();

            if(password_verify($old_password, $user['password'])) {
                // Hashage du nouveau mot de passe
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                // Mise à jour du mot de passe dans la base de données
                $update_password = $access->prepare('UPDATE user SET password = ? WHERE id_user = ?');
                $update_password->execute(array($hashed_password, $id_user));
               
                // Redirection vers une page de succès ou un autre endroit
                header('Location: Login.php');
                exit(); // Arrête l'exécution du script après la redirection
            } else {
                $errorMsg = "L'ancien mot de passe est incorrect.";
            }
        }
    }
}

