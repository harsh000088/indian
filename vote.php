<?php
session_start(); 

require_once 'db_config.php'; 

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); 
    exit;
}

if (!isset($_GET['id'])) {
    header('Location: election.php'); 
    exit;
}

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT candidate_id, name FROM candidate WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows <= 0) {
    header('Location: election.php'); 
    exit;
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['candidate_id'])) {
        $error_message = "Please select a candidate.";
    } else {
        $user_id = $_SESSION['user_id'];
        $candidate_id = $_POST['candidate_id'];

        // Check if user already voted
        $stmt = $conn->prepare("SELECT * FROM votes WHERE user_id = ? AND id = ?");
        $stmt->bind_param("ii", $user_id, $id);
        $stmt->execute();
        $result_vote = $stmt->get_result();

        if ($result_vote->num_rows > 0) {
            $error_message = "You have already voted for this election.";
        } else {
            // Insert vote
            $stmt = $conn->prepare("INSERT INTO votes (user_id, id, candidate_id) VALUES (?, ?, ?)");
            $stmt->bind_param("iii", $user_id, $id, $candidate_id);
            if ($stmt->execute()) {
                echo "Voted";
            } else {
                $error_message = "Failed to vote.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vote</title>
    <link rel="stylesheet" href="vote.css">
</head>
<body>
    <form method="post" action="">
        <label for="candidate_id">Candidate:</label>
        <select name="candidate_id" id="candidate_id" required>
            <option value="" selected disabled>Select Candidate</option>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["candidate_id"] . "'>" . $row["name"] . "</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Vote">
    </form>
    <?php
    if (isset($error_message)) {
        echo "<p style='color:red'>" . $error_message . "</p>";
    }
    ?>
</body>
</html>
