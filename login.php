<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> IAM LogIn and SignUp paage </title>
        <!-- CSS -->
        <link rel="stylesheet" href="login.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
        <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form method="post" action="register.php">
                        <div class="field input-field">
                            <input type="text" id="username" name="username"  placeholder="Username" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" id="password" name="password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                        <div class="field input-field">
                            <select name="usertype" id="usertype">
                                <option value="">Select User Type</option>
                                <option value="admin">Admin</option>
                                <option value="principal">Principal</option>
                                <option value="hods">HOD</option>
                                <option value="staff">Staff</option>
                                <option value="student">Student</option>
                            </select>
                        </div>
                        <div class="field input-field">
                            <select name="usertype2" id="usertype2">
                                <option value="">Select Department</option>
                                <option value="agri">AGRI</option>
                                <option value="aids">AIDS</option>
                                <option value="civil">CIVIL</option>
                                <option value="cse">CSE</option>
                                <option value="ece">ECE</option>
                                <option value="eee">EEE</option>
                                <option value="it">IT</option>
                                <option value="mech">MECH</option>
                            </select>
                        </div>
                        <div class="field button-field">
                            <button name="login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
        <!-- JavaScript -->
        <script src="login.js"></script>
    </body>
</html>