<?php

include 'connect.php';

if(isset($_POST['signUp'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkEmail="SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query( $checkEmail);
    if($result->num_rows > 0){
        echo "Email already exists";
    }else{
        $insertQuery="INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if($conn->query($insertQuery)){
            header('location:login.php');
        }else{
            echo "Error:".$conn->error;
        }
    }
}
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = md5($password);
    $checkEmail = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($checkEmail);
    if($result->num_rows > 0){
        session_start();
        $row= $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        header('location:home.php');
        exit();
    }else{
        echo "Not Found, Incorrect username or password";
    }
}
?>