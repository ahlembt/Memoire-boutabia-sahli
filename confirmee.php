<?php


require('connexion.php');



$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$status = isset($_GET['status_offre']) ? intval($_GET['status_offre']) : 0;
if ($status === 1) {
    // Cas où le statut est "Accepté"
    $new_status = 1;
} elseif ($status === 2) {
    // Cas où le statut est "Annulé"
    $new_status = 2;
} else {
    // Cas par défaut pour les autres statuts (par exemple, "En attente")
    $new_status = 0;
}

$sqlstate = "UPDATE formul SET status_offre = :status_offre WHERE id = :id";
$stmt = $access->prepare($sqlstate);

// Liaison des paramètres
$stmt->bindParam(':status_offre', $status, PDO::PARAM_INT);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

// Exécuter la requête
try {
    $stmt->execute();
    // Redirection après la mise à jour
    header('Location: agent_offre.php');
} catch (PDOException $e) {
    die("Erreur d'exécution de la requête : " . $e->getMessage());
}








// Inclure votre fichier de configuration de base de données


?>






















