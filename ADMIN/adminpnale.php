<?php

session_start();
include '../PHP/config.php';

$sql = "SELECT * FROM destination ORDER BY id DESC";
$result = $con->query($sql);

$sql = "SELECT username, email, isadmin FROM users";
$result2 = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="../CSS/adminpnale.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/footer.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">

</head>

<body>

    <!-- navbar -->

    <nav>
        <div class="ptr1">
            <h1>Dream Destiny</h1>
        </div>
        <div class="ptr2">
            <a href="../index.php">HOME</a>
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
            <?php if (isset($_SESSION['username'])) {
                echo '<a href="PHP/logout.php">LOGOUT</a>';
            } else {
                echo '<a href="USER/LOGIN_SYSTEM/login.php">LOGIN</a>';
            } ?>
        </div>
        <div class="ptr3">
            <button class="btn">enquire</button>
        </div>
    </nav>

    <div class="main">

        <!-- page1 -->

        <div class="page1">
            <img src="../imgs/iday1.jpg" alt="">
            <main>
                <!-- <p>Your Gateway to Global Exploration</p> -->
                <!-- <h1>Unveil the Wonders of the</h1>
                    <h1>World with Our</h1>
                    <h1>Passionate Team</h1> -->
                <h1>Admin panel</h1>
            </main>
        </div>

        <!-- page2 -->

        <div class="page3">

            <div class="container">
                <h1>Admin Panel</h1>
                <h3>Enquire Form Data</h3>
                <table class="tb1" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Destination</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Optional</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0): ?>
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['destination']; ?></td>
                                    <td><?php echo $row['startdate']; ?></td>
                                    <td><?php echo $row['enddate']; ?></td>
                                    <td><?php echo $row['optional']; ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7">No submissions found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <?php
            $con->close(); // Close the database connection
            ?>

        </div>

        <!-- page5 -->

        <div class="page5">
            <img src="../imgs/italy.jpg" alt="">

            <div class="container">
                <h1>Admin Panel</h1>
                <h3>Manage Users</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Admin Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result2->num_rows > 0): ?>
                            <?php while ($row = $result2->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['isadmin'] ? 'Admin' : 'User'; ?></td>
                                    <td>
                                        <form action="../PHP/isadmin.php" method="POST" style="display:inline;">
                                            <input type="hidden" name="isadmin" value="<?php echo $row['isadmin'] ? 0 : 1; ?>">
                                            <button type="submit"
                                                class="btn <?php echo $row['isadmin'] ? 'btn-danger' : ''; ?>">
                                                <?php echo $row['isadmin'] ? 'Revoke Admin' : 'Make Admin'; ?>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5">No users found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>

            </div>
        </div>
        <!-- footer -->
        <footer>
            <div class="footerptr1">
                <h3>as seen in</h3>
                <div class="icons">
                    <img src="../imgs/footerImg1.png" alt="">
                    <img src="../imgs/footerImg2.png" alt="">
                    <img src="../imgs/footerImg3.png" alt="">
                    <img src="../imgs/footerImg4.png" alt="">
                    <img src="../imgs/footerImg5.png" alt="">
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
    </div>


    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
        integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="JS/-script.js"></script>
    <script src="JS/index.js"></script>

</body>

</html>