
<?php
session_start(); 

require_once 'db_config.php'; 


if (!isset($_SESSION['user_id'])) {
    
    header('Location: login.php'); 
    exit;
}


$stmt = $conn->prepare("SELECT id, name FROM election");
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Election</title>
    <style>
      body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    font-size: 36px;
    color: #333;
    margin-top: 50px;
    animation: fadeInUp 1s ease;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

ul {
    list-style-type: none;
    padding: 0;
    margin: 50px auto;
    max-width: 600px;
}

li {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

li:hover {
    transform: translateY(-5px);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
}

a {
    display: block;
    padding: 20px;
    text-decoration: none;
    color: #333;
    font-size: 18px;
}

a:hover {
    color: #007bff;
}


    
    </style>
</head>
<body>
    <h1>Election</h1>
    <ul>
       
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<li><a href='vote.php?id=" . $row['id'] . "'>" . $row['name'] . "</a></li>";
        }
        ?>
    </ul>
</body>
</html>
