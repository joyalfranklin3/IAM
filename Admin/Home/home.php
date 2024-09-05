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
                <a href="./../AGRIDept/agri.php">Agriculture <br> Engineering</a>
            </div>
            <div class="card">
                <a href="./../AIDSDept/aids.php">Artificial Intelligence <br> and<br> Data Science</a>
            </div>
            <div class="card">
                <a href="./../CIVILDept/civil.php">Civil <br> Engineering</a>
            </div>
            <div class="card">
                <a href="./../CSEDept/cse.php">Computer Science <br> Engineering</a>
            </div>
            <div class="card">
                <a href="./../ECEDept/ece.php">Electronics and <br> Communication Engineering</a>
            </div>
            <div class="card">
                <a href="./../EEEDept/eee.php">Electrical and <br> Electronics Engineering</a>
            </div>
            <div class="card">
                <a href="./../ITDept/itdept.php">Information <br> Technology</a>
            </div>
            <div class="card">
                <a href="./../MECHDept/mech.php">Mechanical <br> Engineering</a>
            </div>
            <div class="card">
                <a href="./../Principal/principal.php"><br>Principal</a>
            </div>
        </div>
    </div>
</body>
</html>
