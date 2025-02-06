<?php
include '../database/database.php';
include '../helpers/authenticated.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Ensure ID is an integer to prevent SQL injection

    $stmt = $conn->prepare("DELETE FROM todo WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect back to the main page after deletion
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting reminder.";
    }

    $stmt->close();
}
?>
