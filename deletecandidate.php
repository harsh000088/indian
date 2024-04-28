<?php

require_once 'db_config.php';


if(isset($_GET['userId'])) {
    
    $userId = $_GET['userId'];

    
    $sql = "DELETE FROM user WHERE user_id = ?";

    
    $stmt = $conn->prepare($sql);
    
    
    $stmt->bind_param("i", $userId);
    
    
    if ($stmt->execute()) {
        header("Location: manage_candidate.php");
        exit;
    } else {
        echo "Error deleting candidate: " . $stmt->error;
    }
    
    
    $stmt->close();
}


$conn->close();
?>
