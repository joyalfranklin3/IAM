<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $role = $_POST['usertype'];
    $role2 = $_POST['usertype2'];

    if ($role == "admin") {
        if ($role2 == "") {
            $conn = new mysqli("localhost", "root", "", "login");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        }
        // Connect to the Admin Database
        
    }
    elseif ($role == "student") {
        if ($role2 == "agri") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "agridept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM studentuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
        elseif ($role2 == "aids") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "aidsdept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM studentuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
        elseif ($role2 == "civi") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "civildept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM studentuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "cse") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "csedept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM studentuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "ece") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "ecedept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM studentuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "eee") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "eeedept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM studentuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "it") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "itdept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM studentuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "mech") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "mechdept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM studentuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    }
    elseif ($role == "staff") {
        if ($role2 == "agri") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "agridept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM staffuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
        elseif ($role2 == "aids") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "aidsdept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM staffuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
        elseif ($role2 == "civi") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "civildept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM staffuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "cse") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "csedept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM staffuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "ece") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "ecedept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM staffuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "eee") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "eeedept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM staffuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "it") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "itdept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM staffuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "mech") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "mechdept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM staffuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    }
    elseif ($role == "hods") {
        if ($role2 == "agri") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "agridept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM hoduser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
        elseif ($role2 == "aids") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "aidsdept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM hoduser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
        elseif ($role2 == "civi") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "civildept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM hoduser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "cse") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "csedept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM hoduser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "ece") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "ecedept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM hoduser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "eee") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "eeedept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM hoduser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "it") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "itdept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM hoduser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    elseif ($role2 == "mech") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "mechdept");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM hoduser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }
    }
    elseif ($role == "principal") {
        if ($role2 == "") {
            $conn = new mysqli("localhost", "root", "", "principal");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM principaluser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        }
    }


    // Execute the prepared statement
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        // Start session and redirect based on role
        session_start();
        $_SESSION['username'] = $username;

        if ($role == "admin") {
            header("Location: Admin/Home/home.php");
        } 
        elseif ($role == "student") {
            if ($role2 == "agri"){
                header("Location: Student/AGRI/index.php");
            }
            elseif ($role2 == "aids"){
                header("Location: Student/AIDS/index.php");
            }
            elseif ($role2 == "civil"){
                header("Location: Student/CIVIL/index.php");
            }
            elseif ($role2 == "cse"){
                header("Location: Student/CSE/index.php");
            }
            elseif ($role2 == "ece"){
                header("Location: Student/ECE/index.php");
            }
            elseif ($role2 == "eee"){
                header("Location: Student/EEE/index.php");
            }
            elseif ($role2 == "it"){
                header("Location: Student/IT/index.php");
            }
            elseif ($role2 == "mech"){
                header("Location: Student/MECH/index.php");
            }
        }
        elseif ($role == "staff") {
            if ($role2 == "agri"){
                header("Location: Staff/AGRI/index.php");
            }
            elseif ($role2 == "aids"){
                header("Location: Staff/AIDS/index.php");
            }
            elseif ($role2 == "civil"){
                header("Location: Staff/CIVIL/index.php");
            }
            elseif ($role2 == "cse"){
                header("Location: Staff/CSE/index.php");
            }
            elseif ($role2 == "ece"){
                header("Location: Staff/ECE/index.php");
            }
            elseif ($role2 == "eee"){
                header("Location: Staff/EEE/index.php");
            }
            elseif ($role2 == "it"){
                header("Location: Staff/IT/index.php");
            }
            elseif ($role2 == "mech"){
                header("Location: Staff/MECH/index.php");
            }
        }
        elseif ($role == "hods") {
            if ($role2 == "agri"){
                header("Location: HODS/AGRI/index.php");
            }
            elseif ($role2 == "aids"){
                header("Location: HODS/AIDS/index.php");
            }
            elseif ($role2 == "civil"){
                header("Location: HODS/CIVIL/index.php");
            }
            elseif ($role2 == "cse"){
                header("Location: HODS/CSE/index.php");
            }
            elseif ($role2 == "ece"){
                header("Location: HODS/ECE/index.php");
            }
            elseif ($role2 == "eee"){
                header("Location: HODS/EEE/index.php");
            }
            elseif ($role2 == "it"){
                header("Location: HODS/IT/index.php");
            }
            elseif ($role2 == "mech"){
                header("Location: HODS/MECH/index.php");
            }
        }
        elseif ($role == "principal") {
            if($role2 == ""){
            header("Location: Principal/index.php");
            }
        }
    } 
    else {
        echo "Invalid username or password.";
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
