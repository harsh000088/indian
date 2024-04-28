<?php

require_once 'db_config.php';



$electionQuery = "SELECT * FROM election";
$electionResult = mysqli_query($conn, $electionQuery);


if ($electionResult) {
    ?>
    
    <html>
    <head>
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

form {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    animation: slideInLeft 1s ease;
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

label {
    font-size: 18px;
    color: #333;
    margin-bottom: 10px;
}

select {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
    color: #333;
    transition: border-color 0.3s ease;
}

select:focus {
    border-color: #007bff;
    outline: none;
}

button[type="submit"] {
    width: 100%;
    padding: 15px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Result Table Styles */

table {
    width: 80%;
    margin: 50px auto;
    border-collapse: collapse;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    animation: fadeInUp 1s ease;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #007bff;
    color: #fff;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

        </style>
    </head>
    
    <h1>Select Election</h1>
    <form action="" method="post">
        <label for="id">Select Election:</label>
        <select name="id" id="id">
            <?php
            while ($electionRow = mysqli_fetch_assoc($electionResult)) {
                ?>
                <option value="<?php echo $electionRow['id']; ?>"><?php echo $electionRow['name']; ?></option>
                <?php
            }
            ?>
        </select>
        <button type="submit" name="submit">View Results</button>
    </form>
    <?php
} else {
    echo "Error fetching elections from database: " . mysqli_error($conn);
}
if (isset($_POST['submit'])) {
    
    $selectedElectionId = $_POST['id'];

    
    $query = "SELECT candidate_id, COUNT(*) as vote_count FROM votes WHERE id = $selectedElectionId GROUP BY candidate_id";
    $result = mysqli_query($conn, $query);
    

    if ($result) {
        ?>
        <h1>Result</h1>
        <table>
            <tr>
                <th>Candidate ID</th>
                <th>Vote Count</th>
            </tr>
            <?php
        
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['candidate_id']; ?></td>
                    <td><?php echo $row['vote_count']; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    } else {
        echo "Error fetching result from database: " . mysqli_error($conn);
    }
    
}



echo"the winner name will be announce at the end of election";


mysqli_close($conn);

?>