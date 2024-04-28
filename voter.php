<?php
require_once 'db_config.php';

$sql = "SELECT * FROM users WHERE userrole = 'voter'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $name = $row["name"];
    $age = $row["age"];
    $gender = $row["gender"];

    $sql_insert = "INSERT INTO voters (id, name, age, gender) VALUES ('$id', '$name', '$age', '$gender')";
    mysqli_query($conn, $sql_insert);
}

mysqli_close($conn);
?>
