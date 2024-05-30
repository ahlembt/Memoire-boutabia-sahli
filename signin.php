<?php



require('connexion.php');



if(isset($_POST['connect'])){
    if(!empty($_POST['email_user']) && !empty($_POST['mdp_user'])){
        $email = htmlspecialchars($_POST['email_user']);
        $password = htmlspecialchars($_POST['mdp_user']);
        $email_par_defaut = "admin@gmail.com";
        $mdp_par_defaut = "admin";
        $email_saisi = htmlspecialchars($_POST['email_user']);
        $mdp_saisi = htmlspecialchars($_POST['mdp_user']);

        $checkIfUserExists = $access->prepare('SELECT * FROM user WHERE email_user=?');
        $checkIfUserExists->execute(array($email));



        if($checkIfUserExists->rowCount() > 0){
            $usersInfo = $checkIfUserExists->fetch();
            if ($email_saisi == $email_par_defaut && $mdp_saisi == $mdp_par_defaut) {
                session_start();

                $_SESSION['mdp'] = $mdp_saisi;
                header('Location: accagent.php');
                exit(); // Ensure that no code is executed after the redirection
            }

            if(password_verify($password, $usersInfo['password'])){
                session_start();
                $_SESSION['auth'] = true;
                $_SESSION['id_user'] = $usersInfo['id_user'];
                $_SESSION['user_name'] = $usersInfo['pseudo'];
                $_SESSION['name'] = $usersInfo['nom'];
                $_SESSION['lastname'] = $usersInfo['prenom'];
                $_SESSION['email_user'] = $usersInfo['email_user'];

                header('Location: acceuil2.php');
               exit();
            } else {
                $errorMsg = "Mot de passe incorrect";
            }
        } else {
            $errorMsg = "Email incorrect";
        }
    } else {
        $errorMsg = "Veuillez remplir tous les champs";
    }
    if (isset($errorMsg)) {
    echo '<p style="color: red;">' . $errorMsg . '</p>';
}

}



?>

