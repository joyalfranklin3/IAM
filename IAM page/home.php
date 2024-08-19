<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ABC College</title>
    <link rel="stylesheet" href="home.css">
    <style>
        .dashboard {
            text-align: center;
            padding: 20px;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
        .card-container .card:hover{
            cursor: pointer;
            transform: scale(1.1);
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 600px;
            margin: 10px;
            height: 150px;
            text-align: center;
        }

        .card h2 {
            margin-bottom: 10px;
            color: #007bff;
        }
        .card a {
            font-size: 16px;
            color: #555;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="menu_bar">
        <h1 class="logo">IAM <span>System..</span></h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Services <i class="fas fa-caret-down"></i></a>
            <div class="dropdown">
                <ul>
                    <li><a href="#">View Attendance</a></li>
                    <li><a href="#">Add Attendance</a></li>
                    <li><a href="iam.php">IAM System</a></li>
                </ul>
            </div>
            </li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </div>
    <div class="dashboard">
        <div class="card-container">
            <div class="card">
                <h2>Students</h2>
                <a href="student.php">Total: 250</a>
            </div>
            <div class="card">
                <h2>Staff</h2>
                <a href="staff.php">Total: 50</a>
            </div>
            <div class="card">
                <h2>HODs</h2>
                <a href="hod.php">Total: 10</a>
            </div>
            <div class="card">
                <h2>Vice Principal</h2>
                <a href="vp.php">Total: 30</a>
            </div>
            <div class="card">
                <h2>Principal</h2>
                <a href="principal.php">Total: 30</a>
            </div>
            <div class="card">
                <h2>Workers</h2>
                <a href="worker.php">Total: 30</a>
            </div>
        </div>
    </div>
<script src="home.js"></script>
</body>
</html>
