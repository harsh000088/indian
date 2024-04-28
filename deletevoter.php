<?php

require_once 'db_config.php';


if(isset($_GET['userId'])) {
  
    $userId = $_GET['userId'];

  
    $sql = "DELETE FROM user WHERE user_id = ?";

    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("i", $userId);
    
    
    if ($stmt->execute()) {
        header("Location: manage_voter.php");
        exit;
    } else {
        echo "Error deleting voter: " . $stmt->error;
    }
    
 
    $stmt->close();
}


$conn->close();
?>
