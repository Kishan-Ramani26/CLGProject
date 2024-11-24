<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/signup.css">
    <title>Login Page</title>

    <script>
        function validateForm(event) {
            let isValid = true;

            const errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach((msg) => msg.remove());
            const inputs = document.querySelectorAll('input');
            inputs.forEach(input => input.classList.remove('error'));


            const username = document.forms["signupForm"]["username"].value;
            const email = document.forms["signupForm"]["email"].value;
            const password = document.forms["signupForm"]["password"].value;
            const confirmPassword = document.forms["signupForm"]["confirm_password"].value;


            if (username === "") {
                showError('username', 'Username is required');
                isValid = false;
            }


            if (email === "") {
                showError('email', 'Email is required');
                isValid = false;
            } else if (!validateEmail(email)) {
                showError('email', 'Please enter a valid email');
                isValid = false;
            }


            if (password === "") {
                showError('password', 'Password is required');
                isValid = false;
            }


            if (confirmPassword === "") {
                showError('confirm_password', 'Please confirm your password!   ');
                isValid = false;
            }


            if (password !== confirmPassword) {
                showError('confirm_password', ' Passwords do not match');
                isValid = false;
            }


            if (!isValid) {
                event.preventDefault();
            }

            return isValid;
        }

        function showError(fieldName, errorMessage) {
            const field = document.forms["signupForm"][fieldName];
            field.classList.add('error');
            const errorSpan = document.createElement('span');
            errorSpan.classList.add('error-message');
            errorSpan.textContent = errorMessage;
            field.parentElement.appendChild(errorSpan);
        }


        function validateEmail(email) {
            const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            return re.test(email);
        }
    </script>

    <style>
        .error {
            border: 1px solid red;
        }

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        .input-container {
            margin-bottom: 2px;
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
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni voluptas placeat iure, at
                        earumrem
                        impedit recusandae nulla maxime doloribus obcaecati incidunt sint perspiciatis architecto
                        reiciendis
                        fuga voluptatum animi laudantium.</p>
                </div>
                <div class="logo">
                    <h6>DREAMDESTINAY</h6>
                </div>

            </div>
            <div class="ptr2">
                <h1>Welcome User!</h1>
                <p class="uder">We are glad to see you <b>join</b> with us!</p>

                <div class="formdiv">

                    <form name="signupForm" action="../../PHP/signup.php" method="post"
                        onsubmit="return validateForm(event)">
                        <div class="input-container">
                            <label for="username">Username</label><br>
                            <input type="text" placeholder="Enter full name here" name="username"><br>
                        </div>

                        <div class="input-container">
                            <label for="email">Email</label><br>
                            <input type="text" placeholder="Enter your email here" name="email"><br>
                        </div>

                        <div class="input-container">
                            <label for="password">Password</label><br>
                            <input type="password" placeholder="Enter password here" name="password"><br>
                        </div>

                        <div class="input-container">
                            <label for="confirm_password">Confirm Password</label><br>
                            <input type="password" placeholder="Enter your password again" name="confirm_password"><br>
                        </div>

                        <div class="message">
                            <?php
                            if (isset($_SESSION['signup_error']) && !empty($_SESSION['signup_error'])) {
                                echo '<p style="color:red";>' . $_SESSION['signup_error'] . '</p>';
                                unset($_SESSION['signup_error']);
                            }
                            if (isset($_SESSION['signup_success']) && !empty($_SESSION['signup_success'])) {
                                echo '<p style="color:green";>' . $_SESSION['signup_success'] . '</p>';
                                unset($_SESSION['signup_success']);
                            }
                            ?>
                        </div>

                        <button type="submit" name="signup">REGISTER</button><br><br>
                        <hr><br>
                        <p>Already have an account? <a href="login.php">Login!</a></p>
                    </form>
                </div>

            </div>

        </div>
    </div>
</body>

</html>