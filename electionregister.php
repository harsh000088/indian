
<html>
    <head>
    <link rel="stylesheet" > 
    <style>
      body {
    background-color: #f7f7f7;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    padding: 30px;
    background-color: #ffffff;
    border-radius: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    animation: fadeIn 0.5s ease;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

h2 {
    text-align: center;
    font-size: 36px;
    margin-bottom: 30px;
    color: #333333;
    text-transform: uppercase;
    letter-spacing: 2px;
}

form {
    display: flex;
    flex-direction: column;
}

input[type="text"],
select {
    width: 100%;
    padding: 15px;
    margin-bottom: 20px;
    border: none;
    border-radius: 10px;
    background-color: #f3f3f3;
    font-size: 18px;
    color: #333333;
    transition: background-color 0.3s ease;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

input[type="text"]:focus,
select:focus {
    background-color: #e0e0e0;
    outline: none;
}

button[type="submit"] {
    width: 100%;
    padding: 15px;
    border: none;
    border-radius: 10px;
    background-color: #ff7f50; /* Coral color */
    color: #ffffff;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

button[type="submit"]:hover {
    background-color: #ff6347; /* Tomato color */
    transform: translateY(-2px);
}
  
    </style>
</head>
<form action="electionregister.php" method="post">
    <h2>Candidate Election Registration</h2>
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="partyname" placeholder="Partyname" required>
    <select name="id" required>
        <option value="">Select Election</option>
        <?php
        
        require_once 'db_config.php';

        
        $sql = "SELECT * FROM election";
        $result = $conn->query($sql);

        
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
        }


        
        ?>
    </select>
    <button type="submit" name="submit">Register</button>
</form>
</html>
<?php

if (isset($_POST['submit'])) {
    
    require_once 'db_config.php';

    
    $name = $_POST['name'];
    $partyname = $_POST['partyname'];
    $id = $_POST['id'];

    
    $sql = "INSERT INTO candidate (name, partyname, id) VALUES ('$name', '$partyname', '$id')";

    
    if ($conn->query($sql) === TRUE) {
        echo "Candidate registered successfully for election!";
    } else {
        echo "Error registering candidate: " ;
    }


    $conn->close();
}
?>
