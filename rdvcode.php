<?php
 
 if (!isset($_SESSION)) {
    session_start();
  } // Démarrer la session au début du script

require('connexion.php');

$nom_user = '';
$prenom_user = '';
$id_auteur = '';

if (isset($_POST['demande'])) {
    if (!empty($_POST['email']) && !empty($_POST['wilaya']) && !empty($_POST['date_rdv']) && !empty($_POST['ref'])) {
        $emailrdv = htmlspecialchars($_POST['email']);
        $wilaya = htmlspecialchars($_POST['wilaya']);
        $daterdv = htmlspecialchars($_POST['date_rdv']);
        $refrdv = htmlspecialchars($_POST['ref']);
        $messagerdv = htmlspecialchars($_POST['msg']);

        $nom_user = $_SESSION['name'];
        $prenom_user = $_SESSION['lastname'];
        $id_auteur = $_SESSION['id_user'];

        $insertOffreIntoWebsite = $access->prepare('INSERT INTO rdv_agent (email_rdv, wilaya_rdv, date, ref_rdv, message, nom_rdv, prenom_rdv, id_auteur) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        $insertOffreIntoWebsite->execute(array(
            $emailrdv, $wilaya, $daterdv, $refrdv, $messagerdv, $nom_user, $prenom_user, $id_auteur
        ));

        $successMsg = 'Votre demande est faite avec succès.';
        // Afficher le message de succès
        echo '<script>alert("' . $successMsg . '")</script>';
        header('Location:acceuil2.php');

    } else {
        $errorMsg = 'Veuillez compléter tous les champs.';
        // Afficher le message d'erreur
        echo '<div style="color: red;">' . $errorMsg . '</div>';
    }
} 
?>
