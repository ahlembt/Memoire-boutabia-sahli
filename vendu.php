<?php






// Inclure votre fichier de configuration de base de données


require('connexion.php');



$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$status_vente = isset($_GET['status_vente']) ? intval($_GET['status_vente']) : 0;
if ($status === 0) {
    // Cas où le statut est "Accepté"
    $new_status = 1;
}  else {
    // Cas par défaut pour les autres statuts (par exemple, "En attente")
    $new_status = 0;
}

$sqlstate = "UPDATE formul SET status_vente = :status_vente WHERE id = :id";
$stmt = $access->prepare($sqlstate);

// Liaison des paramètres
$stmt->bindParam(':status_vente', $status_vente, PDO::PARAM_INT);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

// Exécuter la requête
try {
    $stmt->execute();
    // Redirection après la mise à jour
    header('Location: parametre.php');
} catch (PDOException $e) {
    die("Erreur d'exécution de la requête : " . $e->getMessage());
}






?>