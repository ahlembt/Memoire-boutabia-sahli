<?php
require('connexion.php');

if (!isset($_SESSION)) {
    session_start();
  }

if (isset($_POST['validate'])) {
    if (!empty($_POST['titre']) && !empty($_POST['adress']) && !empty($_POST['wilaya']) && !empty($_POST['comune']) && !empty($_POST['code_postale']) && !empty($_POST['surface']) && !empty($_POST['prix']) && !empty($_POST['description'])) {
        $titre = htmlspecialchars($_POST['titre']);
        $numero_terrain = htmlspecialchars($_POST['num_terrain']);
        $adresse = htmlspecialchars($_POST['adress']);
        $wilaya = htmlspecialchars($_POST['wilaya']);
        $comune = htmlspecialchars($_POST['comune']);
        $code_postale = htmlspecialchars($_POST['code_postale']);
        $surface = htmlspecialchars($_POST['surface']);
        $prix = htmlspecialchars($_POST['prix']);
        $description = nl2br(htmlspecialchars($_POST['description']));
        $typeTerrain = $_POST['type_terrain'] ?? ''; 
        $vues = $_POST['vue_terrain'] ?? '';
        $date_offre = date('Y-m-d'); // Date format suitable for MySQL
        $email_user = $_SESSION['email_user'];
        $id_user = $_SESSION['id_user'];

        // Handle file uploads
       
        $act_terrain='';
        $livret_terrain ='';
        
        $imageb = $_FILES['image']['name'];
          
            // Check if file was uploaded successfully
            if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
                // Chemin du fichier temporaire téléchargé sur le serveur
                $chemin_fichier_temporaire = $_FILES['image']['tmp_name'];
                
                // Destination où le fichier téléchargé sera sauvegardé
                $chemin_fichier_destination = "C:\\xampp\htdocs\phpscript\Memoire\uploads\\" . $imageb;
                
                // Déplacer le fichier téléchargé vers sa destination finale
                if (move_uploaded_file($chemin_fichier_temporaire, $chemin_fichier_destination)) {
                    // Lire le contenu du fichier pour le stocker dans la base de données
                    $image = file_get_contents($chemin_fichier_destination);
                  
                }}
          
          
       
        if (isset($_FILES['act_terrain']) && $_FILES['act_terrain']['error'] == UPLOAD_ERR_OK) {
            $act_terrain = uniqid() . '_' . basename($_FILES['act_terrain']['name']);
            move_uploaded_file($_FILES['act_terrain']['tmp_name'], 'C:\\xampp\htdocs\phpscript\Memoire\uploads\\' . $act_terrain);
        }

        if (isset($_FILES['livret_terrain']) && $_FILES['livret_terrain']['error'] == UPLOAD_ERR_OK) {
            $livret_terrain = uniqid() . '_' . basename($_FILES['livret_terrain']['name']);
            move_uploaded_file($_FILES['livret_terrain']['tmp_name'], 'C:\\xampp\htdocs\phpscript\Memoire\uploads\\' . $livret_terrain);
        }

        $insertOffreIntoWebsite = $access->prepare('INSERT INTO formul (num_terrain, adress, wilaya, comune, code_postale, surface, prix, description, date_offre, email_user, id_user, image, titre, act_terrain, livret_terrain,type_terrain,vue_terrain) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)');
        $insertOffreIntoWebsite->execute(array(
            $numero_terrain, $adresse, $wilaya, $comune, $code_postale, $surface, $prix, $description, $date_offre, $email_user, $id_user, $image, $titre, $act_terrain, $livret_terrain,$typeTerrain,$vues
        ));

        $successMsg = 'Offre publiée avec succès.';
        echo '<script>alert("' . $successMsg . '")</script>';
        header('Location:acceuil2.php');
    } else {
        $errorMsg = 'Veuillez compléter tous les champs.';
        echo '<div style="color: red;">' . $errorMsg . '</div>';
    }
}

// Close connection
?>


