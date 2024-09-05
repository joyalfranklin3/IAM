<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>ABC College</title>
    <link rel="stylesheet" href="student.css">
</head>
<body>
    <div class="menu_bar">
        <h1 class="logo">INFORMATION TECHNOLOGY</h1>
        <ul>
            <li><a href="it.php">Dashboard</a></li>
        </ul>
    </div>
    <div style="margin: 20px">
    <h1>Study Books</h1>
    <br>
    <table class="table" style="margin: 20px">
        <thead>
            <tr>
                <th>No</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>Publication</th>
                <th>Publication Year</th>
                <th>Link</th>
                <th>Description</th>
            </tr>
        </thead>
        <?php
            $severname="localhost";
            $username="root";
            $password="";
            $database="itdept";

            $conn =new mysqli($severname, $username, $password, $database);

            if($conn->connect_error){
                die("Connection Failed: ".$conn->connect_error);
            }

            $sql = "SELECT * FROM books";

            $result = $conn->query($sql);
            if(!$result){
                die("Invalid query: ".$conn->error);
            }

            while($row = $result->fetch_assoc()){
            echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["bookname"]."</td>
                <td>".$row["author"]."</td>
                <td>".$row["publication"]."</td>
                <td>".$row["publication_year"]."</td>
                <td>".$row["link"]."</td>
                <td>".$row["description"]."</td>
            </tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>
