
<?php
if (!isset($_SESSION)) {
    session_start();
  }
require('connexion.php');


// Check if required parameters are provided


$id = intval($_GET['id']);

$status_offre = isset($_GET['status_offre']) ? intval($_GET['status_offre']) : 0;

try {
    // Prepare SQL statement
    $sqlstate = "UPDATE formul SET status_offre = :status_offre WHERE id = :id ";
    $stmt = $access->prepare($sqlstate);

    // Bind parameters
    $stmt->bindParam(':status_offre', $status_offre, PDO::PARAM_INT);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    

    // Execute the query
    $stmt->execute();

    // Redirect after the update
    header('Location: parametre.php');
    exit(); // Ensure script execution stops after redirection
} catch (PDOException $e) {
    // Handle database errors
    die("Database error: " . $e->getMessage());
} catch (Exception $e) {
    // Handle other exceptions
    die("Error: " . $e->getMessage());
}
?>




