<?php


if(isset($_GET["id"])){
    $id = $_GET["id"];
    $host="localhost";
    $user="root";
    $pass="";
    $db="eeedept";
    $conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}

    $sql = "DELETE FROM hod WHERE id = $id";
    $result = $conn->query($sql);
    if(!$result){
        echo "Invalid query: ".$conn->error;
    }
}
    header("location: hod.php");
    exit;

?>