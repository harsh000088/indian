<?php

require_once 'db_config.php';

$sql = "SELECT * FROM election";
$result = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_election_id"])) {
  
    $electionIdToDelete = mysqli_real_escape_string($conn, $_POST["delete_election_id"]);

    $deleteVotesSql = "DELETE FROM votes WHERE candidate_id IN (SELECT id FROM candidate WHERE id = ?)";
    $stmt = $conn->prepare($deleteVotesSql);
    $stmt->bind_param("i", $electionIdToDelete);
    $stmt->execute();

    $deleteCandidateSql = "DELETE FROM candidate WHERE id = ?";
    $stmt = $conn->prepare($deleteCandidateSql);
    $stmt->bind_param("i", $electionIdToDelete);
    $stmt->execute();

    $deleteSql = "DELETE FROM election WHERE id = ?";
    $stmt = $conn->prepare($deleteSql);
    $stmt->bind_param("i", $electionIdToDelete);
    if ($stmt->execute()) {
        echo "Election deleted successfully.";
    } else {
        echo "Error deleting election: " . $conn->error;
    }
}

$conn->close();
?>

<html>
<head>
    <title>Manage Elections</title>
    <link rel="stylesheet" href="manageelection.css">
</head>
<body>
    <h1>Manage Elections</h1>
    <ul>
        <li><a href="addelection.php">ADD ELECTION</a></li>
    </ul>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["description"]."</td>";
            echo "<td>".$row["start_date"]."</td>";
            echo "<td>".$row["end_date"]."</td>";
            echo "<td>".$row["created_at"]."</td>";
            echo "<td>
                    <form method='post' action='".$_SERVER["PHP_SELF"]."'>
                        <input type='hidden' name='delete_election_id' value='".$row["id"]."'>
                        <input type='submit' value='Delete'>
                    </form>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
