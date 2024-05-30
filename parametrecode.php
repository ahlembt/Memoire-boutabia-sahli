<?php
 
if (!isset($_SESSION)) {
  session_start();
}

require('connexion.php');?>

<?php

    
    if (!isset($_SESSION['auth'])) {
      header('Location:Login.php');}
      else {?>
        
  
<?php
$errorMsg = "";

$id_user = $_SESSION['id_user'];

    $checkIfUserExists = $access->prepare('SELECT * FROM user WHERE id_user=?');
    $checkIfUserExists->execute(array($id_user));
    
    if ($checkIfUserExists->rowCount() > 0) {
        $usersInfo = $checkIfUserExists->fetch();
        $pseudo=$usersInfo['pseudo'];
        $nom=$usersInfo['nom'];
        $prenom=$usersInfo['prenom'];
        $email=$usersInfo['email_user'];
        $DNA=$usersInfo['dna_user'];
        $adresseDNA=$usersInfo['dna_adresse'];
        $adresse=$usersInfo['adresse_user'];
        $photo=base64_decode($usersInfo['photo_user']);
        $sex=$usersInfo['sexe'];
        $tel=$usersInfo['tel_user'];





        $Terrain=$access->prepare('SELECT * FROM formul WHERE id_user=? AND status_offre=1');
        $Terrain->execute(array($id_user));
        $Rendez=$access->prepare('SELECT * FROM rdv_agent WHERE id_auteur=?');
        $Rendez->execute(array($id_user));
     

// modifier le profil
if (isset($_POST['Modifier'])) {
    // Supposons que vous stockez l'ID de l'utilisateur dans une variable de session
       $pseudo = $_POST['pseudo'];
       $nom = $_POST['nom'];
       $prenom = $_POST['prenom'];
       $email_user = $_POST['email_user'];
       $dna_user = $_POST['dna_user'];
       $dna_adresse = $_POST['dna_adresse'];
   $sex=$_POST['sexe'];
       $tel_user = $_POST['tel_user'];
       $adresse_user = $_POST['adresse_user'];
       
   
       // Création de la requête SQL pour mettre à jour les informations de l'utilisateur
       $sql = "UPDATE user SET pseudo = :pseudo, nom = :nom, prenom = :prenom, email_user = :email_user, dna_user = :dna_user, dna_adresse = :dna_adresse, tel_user = :tel_user, adresse_user = :adresse_user, sexe = :sexe WHERE id_user = :id_user";
   
       // Préparation de la requête
       $stmt = $access->prepare($sql);
   
       // Liaison des valeurs aux paramètres de la requête
       $stmt->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
       $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
       $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
       $stmt->bindParam(':email_user', $email_user, PDO::PARAM_STR);
       $stmt->bindParam(':dna_user', $dna_user, PDO::PARAM_STR);
       $stmt->bindParam(':dna_adresse', $dna_adresse, PDO::PARAM_STR);
       $stmt->bindParam(':sexe', $sex, PDO::PARAM_STR);
       $stmt->bindParam(':tel_user', $tel_user, PDO::PARAM_INT); // Utilisez PARAM_INT pour les valeurs numériques
       $stmt->bindParam(':adresse_user', $adresse_user, PDO::PARAM_STR);
       $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT); // Utilisez PARAM_INT pour les valeurs numériques
      
       
       // Exécution de la requête
       $stmt->execute();
       
    
      
   }




        // Modifier la photo
       
        if (isset($_POST['Réinitialiser'])) {
            $id_user = $_SESSION['id_user'];
            $imageb = $_FILES['photo_user']['name'];
        
            // Check if file was uploaded successfully
            if ($_FILES['photo_user']['error'] === UPLOAD_ERR_OK) {
                // Chemin du fichier temporaire téléchargé sur le serveur
                $chemin_fichier_temporaire = $_FILES['photo_user']['tmp_name'];
        
                // Destination où le fichier téléchargé sera sauvegardé
                $chemin_fichier_destination = "C:/xampp/htdocs/phpscript/Memoire/uploads/" . $imageb;
        
                // Déplacer le fichier téléchargé vers sa destination finale
                if (move_uploaded_file($chemin_fichier_temporaire, $chemin_fichier_destination)) {
                    // Lire le contenu du fichier pour le stocker dans la base de données
                    $image_data = file_get_contents($chemin_fichier_destination);
        
                    // Encode image data to base64
                    $encoded_image = base64_encode($image_data);
        
                    // Prepare SQL statement to update the user table
                    $Insertimage = $access->prepare('UPDATE user SET photo_user=? WHERE id_user=?');
                    
                    // Execute SQL statement
                    if ($Insertimage->execute(array($encoded_image, $id_user))) {
                        echo "Image uploaded successfully.";
                       header('Location:parametre.php');
                    } else {
                        echo "Error updating database.";
                    }
                } else {
                    echo "Error moving uploaded file.";
                }
            } else {
                echo "Error uploading file: ";
            }
        }
        
      
        


          


        // récupération des informations de l'utilisateur
       
    } else {
        $errorMsg = "Aucun utilisateur trouvé.";
        header('Location: Login.php');
    }


?>  <?php
}?>