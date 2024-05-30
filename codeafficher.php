<?php
 
 if (!isset($_SESSION)) {
    session_start();
  }
// Include your database configuration file
require('connexion.php'); // Make sure this file contains the database connection details


try {
    // Fetch the confirmed offers
    $sql = "SELECT image, titre, adress, id, wilaya, surface, prix, status_offre FROM formul WHERE status_offre = 1";
    $stmt = $access->query($sql);
    $formul = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Check if any rows were fetched
    if (!$formul) {
        echo "No confirmed offers found.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>





<?php

try {
    // Initialisation des variables de recherche
    $searchQuery = '';
    $startSurface = '';
    $endSurface = '';
    $startPrix = '';
    $endPrix = '';
    $typeTerrain = '';
    $vueTerrain = '';

    // Vérification des paramètres GET
    if (isset($_GET['search'])) {
        $searchQuery = $_GET['search'];
    }
    if (isset($_GET['start_surface'])) {
        $startSurface = $_GET['start_surface'];
    }
    if (isset($_GET['end_surface'])) {
        $endSurface = $_GET['end_surface'];
    }
    if (isset($_GET['start_prix'])) {
        $startPrix = $_GET['start_prix'];
    }
    if (isset($_GET['end_prix'])) {
        $endPrix = $_GET['end_prix'];
    }
    if (isset($_GET['type_terrain'])) {
        $typeTerrain = $_GET['type_terrain'];
    }
    if (isset($_GET['vue_terrain'])) {
        $vueTerrain = $_GET['vue_terrain'];
    }

    // Requête de base
    $sql = "SELECT id, wilaya, surface, prix, status_offre, image, titre, adress FROM formul WHERE 1=1";

    // Ajout des conditions basées sur les filtres
    if (!empty($searchQuery)) {
        $sql .= " AND (wilaya LIKE :searchQuery OR surface LIKE :searchQuery OR prix LIKE :searchQuery OR titre LIKE :searchQuery OR adress LIKE :searchQuery)";
    }
    if (!empty($startSurface) && !empty($endSurface)) {
        $sql .= " AND surface BETWEEN :startSurface AND :endSurface";
    }
    if (!empty($startPrix) && !empty($endPrix)) {
        $sql .= " AND prix BETWEEN :startPrix AND :endPrix";
    }
    if (!empty($typeTerrain)) {
        $sql .= " AND type_terrain = :typeTerrain";
    }
    if (!empty($vueTerrain)) {
        $sql .= " AND vue_terrain = :vueTerrain";
    }

    // Préparation de la requête
    $stmt = $access->prepare($sql);

    // Liaison des paramètres
    if (!empty($searchQuery)) {
        $stmt->bindValue(':searchQuery', '%' . $searchQuery . '%', PDO::PARAM_STR);
    }
    if (!empty($startSurface) && !empty($endSurface)) {
        $stmt->bindValue(':startSurface', $startSurface, PDO::PARAM_INT);
        $stmt->bindValue(':endSurface', $endSurface, PDO::PARAM_INT);
    }
    if (!empty($startPrix) && !empty($endPrix)) {
        $stmt->bindValue(':startPrix', $startPrix, PDO::PARAM_INT);
        $stmt->bindValue(':endPrix', $endPrix, PDO::PARAM_INT);
    }
    if (!empty($typeTerrain)) {
        $stmt->bindValue(':typeTerrain', $typeTerrain, PDO::PARAM_INT);
    }
    if (!empty($vueTerrain)) {
        $stmt->bindValue(':vueTerrain', $vueTerrain, PDO::PARAM_INT);
    }

    // Exécution de la requête
    $stmt->execute();
    $formul = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>

