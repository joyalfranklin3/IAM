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
                <a href="Principal/principal.php"><br>Principal</a>
            </div>
            <div class="card">
                <a href="hoddept.php"><br>HOD</a>
            </div>
            <div class="card">
                <a href="staffdept.php"><br>Staff</a>
            </div>
            <div class="card">
                <a href="studentdept.php"><br>Student</a>
            </div>
            <div class="card">
                <a href="admin.php"><br>Admin</a>
            </div>
        </div>
    </div>
</body>
</html>
