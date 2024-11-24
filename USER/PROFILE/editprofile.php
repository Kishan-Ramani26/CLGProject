<?php
session_start();
require '../../PHP/config.php'; // Ensure this file contains your DB connection details

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit();
}

// Get the username from session
$username = $_SESSION['username'];

// Fetch the current details from the database
$query = $con->prepare("SELECT email, password FROM users WHERE username = ?");
$query->bind_param("s", $username);
$query->execute();
$query->store_result();

// If the username exists in the database, fetch user data
if ($query->num_rows > 0) {
    $query->bind_result($email, $password);
    $query->fetch();
} else {
    // Handle case where user is not found in the database
    $email = '';
    $password = '';
}
$query->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../../CSS/editeprofile.css">
     <!-- <link rel="stylesheet" href="../../CSS/nav.css"> -->
    <link rel="stylesheet" href="../../CSS/footer.css">

    <script>

        document.getElementById('editProfileForm').addEventListener('submit', function (event) {
            let isValid = true;

            
            const email = document.getElementById('email');
            const emailError = document.getElementById('emailError');
            if (email.value.trim() === '') {
                emailError.textContent = 'Email is required!';
                email.style.borderColor = 'red';
                isValid = false;
            } else {
                emailError.textContent = '';
                email.style.borderColor = '';
            }

            
            const password = document.getElementById('password');
            const passwordError = document.getElementById('passwordError');
            if (password.value.trim() !== '' && password.value.length < 6) {
                passwordError.textContent = 'Password must be at least 6 characters long!';
                password.style.borderColor = 'red';
                isValid = false;
            } else {
                passwordError.textContent = '';
                password.style.borderColor = '';
            }

            // Validate confirm password
            const confirmPassword = document.getElementById('confirmpassword');
            const confirmPasswordError = document.getElementById('confirmpasswordError');
            if (confirmPassword.value.trim() !== '' && confirmPassword.value !== password.value) {
                confirmPasswordError.textContent = 'Passwords do not match!';
                confirmPassword.style.borderColor = 'red';
                isValid = false;
            } else {
                confirmPasswordError.textContent = '';
                confirmPassword.style.borderColor = '';
            }

            // Prevent form submission if validation fails
            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>
</head>

<body>
    <!-- navbar -->

    <nav>
        <div class="ptr1">
            <h1>Dream Destiny</h1>
        </div>
        <div class="ptr2">
            <a href="../../index.php">HOME</a>
            <div class="dropdown">
                <div class="dropbtn">
                    <a href="#">DESTINATIONS</a>
                    <div class="dropdown-content">
                        <a href="USER/DESTINATIONS/greece.php">GREECE</a>
                        <a href="USER/DESTINATIONS/italy.php">ITALY</a>
                        <a href="USER/DESTINATIONS/norway.php">NORWAY</a>
                        <a href="USER/DESTINATIONS/netherlands.php">NETHERLANDS</a>
                        <a href="USER/DESTINATIONS/scotland.php">SCOTLAND</a>
                        <a href="USER/DESTINATIONS/swizerland.php">SWIZERLAND</a>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropbtn">
                    <a href="#">TOURS</a>
                    <div class="dropdown-content">
                        <a href="USER/DESTINATIONS/greece.php">CANADA</a>
                        <a href="USER/DESTINATIONS/netherlands.php">TURKEY</a>
                        <a href="USER/TOURS/japan.php">JAPAN</a>
                        <a href="USER/DESTINATIONS/italy.php">SCOTLAND</a>
                    </div>
                </div>
            </div>
            <a href="about.php">ABOUT US</a>
            <?php
            if (isset($_SESSION['username'])) {
                echo '<div class="dropdown">';
                echo '<div class="dropbtn">';
                // $usernamecap = $_SESSION['username'];
                // strtoupper($usernamecap);
                echo '<a href="#">' . strtoupper($_SESSION['username']) . '</a>';
                echo '<div class="dropdown-content">';
                echo '<a href="USER/PROFILE/editprofile.php">PROFILE</a>';
                
                $user_id = $_SESSION['username'];

                $sql = "SELECT isadmin FROM users WHERE username = ?";
                $stmt = $con->prepare($sql);

                $stmt->bind_param("i", $user_id); // "i" means the parameter is an integer
            
                $stmt->execute();
                $stmt->bind_result($isadmin);
                
                $stmt->fetch();
                if ($isadmin === 1) {

                    echo '<a href="ADMIN/adminpnale.php">ADMIN PNALE</a>';

                }else{
                }
                $stmt->close();
                $con->close();

                echo '<a href="PHP/logout.php">LOGOUT</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            } else {

                echo '<a href="USER/LOGIN_SYSTEM/login.php">LOGIN</a>';
            }
            ?>

        </div>
        <div class="ptr3">
            <button class="btn"><a href="#form" style="all:unset;">enquire</a></button>
        </div>
    </nav>

    <!-- Main -->
    <div class="main">
        <div class="page1">
            <div class="round">
                <h1 class="logo"><?php echo strtoupper($username[0]); ?></h1>
            </div>
            <div class="ptr1">
                <img src="../../imgs/aboutImg3.jpg" alt="">
            </div>
            <div class="ptr2">
                <form action="../../PHP/update.php" method="POST" id="editProfileForm">
                    <label for="username">Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" disabled>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $email; ?>"
                        placeholder="Enter your email here" required>
                    <div id="emailError" style="color:red;"></div>

                    <label for="password">New Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter new password here">
                    <div id="passwordError" style="color:red;"></div>

                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" name="confirmpassword" id="confirmpassword"
                        placeholder="Confirm your new password">
                    <div id="confirmpasswordError" style="color:red;"></div>

                    <div class="message">
                        <?php
                        
                        if (isset($_SESSION['update_error']) && !empty($_SESSION['update_error'])) {
                            echo '<p style="color:red;">' . $_SESSION['update_error'] . '</p>';
                            unset($_SESSION['update_error']); 
                        }

                        if (isset($_SESSION['update_success']) && !empty($_SESSION['update_success'])) {
                            echo '<p style="color:green;">' . $_SESSION['update_success'] . '</p>';
                            unset($_SESSION['update_success']); 
                        }
                        ?>
                    </div>

                    <button type="submit">Update Profile</button><br><br>
                </form>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <div class="footerptr1">
            <h3>as seen in</h3>
            <div class="icons">
                <img src="imgs/footerImg1.png" alt="">
                <img src="imgs/footerImg2.png" alt="">
                <img src="imgs/footerImg3.png" alt="">
                <img src="imgs/footerImg4.png" alt="">
                <img src="imgs/footerImg5.png" alt="">
            </div>
        </div>
        <div class="footerptr2">
            <div class="ftptr1">
                <h1>Destinations</h1>

                <h3>Asia</h3>
                <h3>Africa</h3>
                <h3>Australia</h3>
                <h3>Europe</h3>
                <h3>North America</h3>
                <h3>Latin America</h3>
            </div>
            <div class="ftptr2">
                <h1>call us</h1>
                <h3>+ 7829239123</h3>
                <h1>Email us</h1>
                <h3>DreamDestiny@contact.com</h3>
            </div>
            <div class="ftptr3">
                <h1>DreamDestiny</h1>
            </div>
        </div>
    </footer>
</body>

</html>