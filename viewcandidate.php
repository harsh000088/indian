

<html>
<head>
    <title>Voter Dashboard - View Candidates</title>
    <link rel="stylesheet" href="viewcandidate.css"> 
</head>
<body>
    <h1>View Candidates</h1>
    <?php
        require_once 'db_config.php';
        $sql = "SELECT * FROM user where user_role='candidate'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li>";
                echo "Candidate ID: " . $row["user_id"] . "<br>";
                echo "Candidate Name: " . $row["username"] . "<br>";
                
            }
            echo "</ul>";
        } else {
            echo "No candidates found.";
        }

        $conn->close();
    ?>
    <a href="voter_dashboard.php">Go back to Dashboard</a> 
</body>
</html>
