<?php
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ABC College</title>
    <link rel="stylesheet" href="iam.css">
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
            font-size: 30px;
            color: #555;
            text-decoration: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="menu_bar">
        <h1 class="logo">Dashboard</h1>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="user.php">Users</a></li>
            <li><a href="group.php">Groups</a></li>
            <li><a href="role.php">Roles</a></li>
            <li><a href="permission.php">Permissions</a></li>
        </ul>
    </div>
    <div class="dashboard">
        <div class="card-container">
            <div class="card">
                <h2>User</h2>
                <?php
            $sql="SELECT * FROM iamuser";
            $result = $conn->query($sql);
            $tot_count=$result->num_rows;
            echo "
            <a href='user.php'>$tot_count</a>";
            ?>
            </div>
            <div class="card">
                <h2>Group</h2>
                <?php
            $sql="SELECT * FROM iamuser";
            $result = $conn->query($sql);
            $tot_count=$result->num_rows;
            echo "
            <a href='group.php'>$tot_count</a>";
            ?>
            </div>
            <div class="card">
                <h2>Role</h2>
                <?php
            $sql="SELECT * FROM iamuser";
            $result = $conn->query($sql);
            $tot_count=$result->num_rows;
            echo "
            <a href='role.php'>$tot_count</a>";
            ?>
            </div>
            <div class="card">
                <h2>Permission</h2>
                <?php
            $sql="SELECT * FROM iamuser";
            $result = $conn->query($sql);
            $tot_count=$result->num_rows;
            echo "
            <a href='permission.php'>$tot_count</a>";
            ?>
            </div>
        </div>
    </div>
            <?php
            $sql="SELECT * FROM iamuser";
            $result = $conn->query($sql);
            $tot_count=$result->num_rows;
            echo "
            <a href='user.php'>$tot_count</a>";
            ?>
            </tr>
        </table>
    </div>
<script src="iam.js"></script>
</body>
</html>
