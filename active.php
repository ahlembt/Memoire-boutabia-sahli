<?php
// Inclure votre fichier de configuration de base de données
require('connexion.php'); // assurez-vous que ce fichier contient les informations de connexion à la base de données

$id_rdv = isset($_GET['id_rdv']) ? intval($_GET['id_rdv']) : 0;
$status = isset($_GET['status']) ? intval($_GET['status']) : 0;
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

$sqlstate = "UPDATE rdv_agent SET status = :status WHERE id_rdv = :id_rdv";
$stmt = $access->prepare($sqlstate);

// Liaison des paramètres
$stmt->bindParam(':status', $status, PDO::PARAM_INT);
$stmt->bindParam(':id_rdv', $id_rdv, PDO::PARAM_INT);

// Exécuter la requête
try {
    $stmt->execute();
    // Redirection après la mise à jour
    header('Location: agent_list.php');
} catch (PDOException $e) {
    die("Erreur d'exécution de la requête : " . $e->getMessage());
}

?>