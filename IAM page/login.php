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
            <!-- Signup Form -->

            <div class="form login">
                <div class="form-content" id="signup">
                    <header>Signup</header>
                    <form method="post" action="studentregister.php">
                        <div class="field input-field">
                            <input type="text" id="username" name="username" placeholder="Username" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="email" id="email" name="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" id="password" name="password" placeholder="Create password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button name="signUp">Signup</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>
            </div>

            <div class="form signup">
                <div class="form-content">
                    <header>Login</header>
                    <form method="post" action="studentregister.php">
                        <div class="field input-field">
                            <input type="text" id="username" name="username" placeholder="Username" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" id="password" name="password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <button name="login">Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                    </div>
                </div>
            </div>
        </section>
    </div>
        <!-- JavaScript -->
        <script src="login.js"></script>
    </body>
</html>