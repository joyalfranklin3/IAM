<?php

include("connect.php");
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "DELETE FROM iamuser WHERE id = $id";
    $result = $conn->query($sql);
    if(!$result){
        echo "Invalid query: ".$conn->error;
    }
}else{
    header("location: user.php");
    exit;
}
?>