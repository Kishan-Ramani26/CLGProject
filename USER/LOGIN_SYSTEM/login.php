<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/login.css">
    <title>Login Page</title>

    <style>
        /* Example CSS styles for error highlighting and messages */
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ccc;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #4CAF50;
        }

        .error {
            color: red;
            font-size: 12px;
        }

        input[type="text"]:invalid,
        input[type="password"]:invalid {
            border-color: red;
        }

        .message {
            color: red;
            font-size: 14px;
        }
    </style>

</head>

<body>
    <div class="main">
        <div class="loginpage">
            <div class="ptr1">
                <div class="bg"></div>
                <h1>Explore Near<br>Nature Spots</h1>
                <div class="para">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <div class="logo">
                    <h6>DREAMDESTINAY</h6>
                </div>
            </div>
            <div class="ptr2">
                <h1>Welcome Back!</h1>
                <p class="uder">We are glad to see you back with us!</p>

                <div class="formdiv">
                    <form action="../../PHP/signin.php" method="POST" id="loginForm">
                        <label for="username">Username</label><br>
                        <input type="text" placeholder="Enter your username here" name="username" id="username"><br>
                        <span id="usernameError" class="error"></span>

                        <br><label for="password">Password</label><br>
                        <input type="password" placeholder="Enter password here" name="password" id="password"><br>
                        <span id="passwordError" class="error"></span>

                        <div class="message">
                            <?php
                            if (isset($_SESSION['login_error']) && !empty($_SESSION['login_error'])) {
                                echo '<p style="color:red;">' . $_SESSION['login_error'] . '</p>';
                                unset($_SESSION['login_error']);
                            }
                            ?>
                        </div>

                        <button type="submit" name="login" id="submitBtn">LOGIN</button><br><br>
                        <hr><br>
                        <p>Don’t have an account? <a href="register.php">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>

        document.getElementById('loginForm').addEventListener('submit', function (event) {
            let isValid = true;

            const username = document.getElementById('username');
            const usernameError = document.getElementById('usernameError');
            if (username.value.trim() === '') {
                usernameError.textContent = 'Username is required!';
                username.style.borderColor = 'red';
                isValid = false;
            } else {
                usernameError.textContent = '';
                username.style.borderColor = '';
            }


            const password = document.getElementById('password');
            const passwordError = document.getElementById('passwordError');
            if (password.value.trim() === '') {
                passwordError.textContent = 'Password is required!';
                password.style.borderColor = 'red';
                isValid = false;
            } else {
                passwordError.textContent = '';
                password.style.borderColor = '';
            }

            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>

</body>

</html>