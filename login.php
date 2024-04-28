<?php

require_once 'db_config.php';


session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $sql = "SELECT * FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
      
        if (password_verify($password, $row['password'])) {
          
            $_SESSION['user_id'] = $row['user_id'];

            if ($row['user_role'] == 'voter') {
                header("Location: voter_dashboard.php");
                exit();
            } elseif ($row['user_role'] == 'admin') {
                header("Location: admin_dashboard.php");
                exit();
            } elseif ($row['user_role'] == 'candidate') {
                header("Location: candidate_dashboard.php");
                exit();
            } else {
                echo "Error: Invalid user role";
            }
        } else {
            echo "Error: Invalid password";
        }
    } else {
        echo "Error: User not found";
    }

    $stmt->close();
    $conn->close();
} elseif(isset($_POST['username']) || isset($_POST['password'])) {
    echo "Error: Username and password are required";
}
?>


<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" >
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(45deg, #ff9933, #ffffff, #138808);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
}

@keyframes gradient {
    0% {background-position: 0% 50%;}
    50% {background-position: 100% 50%;}
    100% {background-position: 0% 50%;}
}

.container {
    width: 300px;
    margin: 80px auto;
    padding: 30px;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

h2 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    margin-top: 10px;
    font-size: 18px;
    color: #555;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    border: none;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

a {
    margin-top: 10px;
    text-decoration: none;
    color: #333;
}

a:hover {
    color: #138808;
}

.error {
    margin-top: 10px;
    text-align: center;
    color: red;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username</label>
            <input type="text" name="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" required>

            <input type="submit" value="Login">
            <li><a href="index.php">Home</a></li>
        </form>
        <?php if(!empty($error_message)) { ?>
            <p><?php echo $error_message; ?></p>
        <?php } ?>
    </div>
</body>
</html>
