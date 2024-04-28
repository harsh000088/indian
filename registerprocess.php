<?php

require_once 'db_config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $aadhar = $_POST['aadhar'];
    $dob = $_POST['dob'];
    $voterid = $_POST['voterid'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $user_role = $_POST['user_role'];
    $gender = $_POST['gender'];
    

    if (empty($username) || empty($password) || empty($aadhar) || empty($dob) || empty($voterid) || empty($address) || empty($email) || empty($user_role) || empty($gender)) {
        echo "Error: All fields are required.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (username, password, aadhar, dob, voterid, address, email, user_role, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssss", $username, $hashedPassword, $aadhar, $dob, $voterid, $address, $email, $user_role, $gender);
        $result = $stmt->execute();

        if ($result) {
            echo "Registration successful";
            
            
        } else {
            echo "Error: " ;
        }
    

        $stmt->close();
        $conn->close();
        
    }
}
header("Location: login.php");
exit;

?>
