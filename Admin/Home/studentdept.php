<?php

session_start();
$host="localhost";
$user="root";
$pass="";
$db="login";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC COLLEGE OF ENGINEERING</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="menu_bar">
        <h1 class="logo">ABC College of <span>Engineering</span> And <span>Technology</span></h1>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="users.php">Users</a></li>
            <li><a href="./../../logout.php">Log Out</a></li>
        </ul>
    </div>
    <div class="dashboard">
        <div class="card-container">
            <div class="card">
                <a href="./Agri/student.php">Agriculture <br> Engineering</a>
            </div>
            <div class="card">
                <a href="./Aids/student.php">Artificial Intelligence <br> and<br> Data Science</a>
            </div>
            <div class="card">
                <a href="./Civil/student.php">Civil <br> Engineering</a>
            </div>
            <div class="card">
                <a href="./Cse/student.php">Computer Science <br> Engineering</a>
            </div>
            <div class="card">
                <a href="./Ece/student.php">Electronics and <br> Communication Engineering</a>
            </div>
            <div class="card">
                <a href="./Eee/student.php">Electrical and <br> Electronics Engineering</a>
            </div>
            <div class="card">
                <a href="./IT/student.php">Information <br> Technology</a>
            </div>
            <div class="card">
                <a href="./Mech/student.php">Mechanical <br> Engineering</a>
            </div>
        </div>
    </div>
</body>
</html>
