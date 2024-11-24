<?php
session_start();
include 'PHP/config.php';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/footer.css">

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
            <a href="index.php">HOME</a>
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

    <div class="main">

        <!-- loader -->

        <div class="loader">
            <h1>DreamDestiny</h1>
        </div>

        <!-- page1 -->

        <div class="page1">
            <img src="imgs/iday1.jpg" alt="">
            <main>
                <p>Your Gateway to Global Exploration</p>
                <h1>Unveil the Wonders of the</h1>
                <h1>World with Our</h1>
                <h1>Passionate Team</h1>
            </main>
        </div>

        <!-- page2 -->

        <div class="page2">
            <div class="pg2upper">
                <p>what makes up different</p>
                <h1>Why book with us</h1>
            </div>
            <div class="pg2bottom">
                <div class="col1">
                    <img src="imgs/pg2Img1.png" alt="">
                    <h1>Unforgrttable</h1>
                    <h1>experiences</h1>
                    <span>
                        <p>Crafting personalized</p>
                        <p>itineraries that cater to your</p>
                        <p>unique preferences.</p>
                    </span>

                    <div class="ptr2">
                        <img src="imgs/pg2ptr1Img2.png" alt="">
                        <h1>Global Trave</h1>
                        <h1>Agency</h1>
                        <span>
                            <p>Benefit from the expertise</p>
                            <p>of travel professionals who</p>
                            <p>have knowledge about</p>
                            <p>destinations</p>
                        </span>
                    </div>
                </div>


                <div class="col2">

                    <img src="imgs/page2Img1.jpg" alt="" class="img1">
                    <img src="imgs/page2Img2.jpg" alt="" class="img2">

                    <div class="ptr2">
                        <img src="imgs/pg2ptr2Img3.png" alt="">
                        <h1></h1>
                        <h1>experiences</h1>
                        <span>
                            <p>Crafting personalized</p>
                            <p>itineraries that cater to your</p>
                            <p>unique preferences.</p>
                        </span>

                    </div>
                </div>
                <div class="col3">
                    <h2>Embark on a cruise along the legendary Loch Ness, keeping an eye out for the elusive Loch Ness
                        Monster. Visit the iconic Urquhart Castle, perched on the shores of the loch, and uncover its
                        turbulent history and breathtaking views.</h2>
                    <h2>Journey west to the Isle of Skye, renowned for its dramatic landscapes, rugged coastline, and
                        medieval castles. Explore the otherworldly rock formations of the Quiraing and the stunning
                        Fairy Pools, and visit the historic Dunvegan Castle, home to the Clan MacLeod for over 800
                        years. Enjoy a traditional Scottish dinner featuring local specialties.</h2>
                    <h2>Arrive back in Edinburgh in the evening, where you can reflect on your Highland adventure over a
                        farewell dinner.</h2>
                </div>
            </div>
        </div>

        <!-- page3 -->

        <div class="page3">
            <div class="pg3ptr1">
                <h3>Example Trips</h3>
                <span class="h1-span">
                    <h1>Book-Your</h1>
                    <h1>Tour</h1>
                </span>
                <span class="p-span">
                    <p>Browse our example trips and get in</p>
                    <p>contact to start planning your very own</p>
                    <p>adventure.</p>
                </span>
            </div>
            <div class="pg3ptr2">
                <div class="con">
                    <img src="imgs/sday1.jpg" alt="">
                    <div class="imgtext">
                        <h1>Adventure Caucasian</h1>
                        <h1>Kayaking in Canada</h1>
                        <p>Explore the mystical ruins of Machu Picchu, traverse the Sacred Valley, and sail across the
                            serene...</p>
                        <div class="imgtext-bottom">
                            <button>view</button>
                            <h3>from $199</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pg3ptr3">
                <div class="con">
                    <img src="imgs/sday3.jpg" alt="">
                    <div class="imgtext">
                        <h1>Adventure Caucasian</h1>
                        <h1>Kayaking in Canada</h1>
                        <p>Explore the mystical ruins of Machu Picchu, traverse the Sacred Valley, and sail across the
                            serene...</p>
                        <div class="imgtext-bottom">
                            <button>view</button>
                            <h3>from $199</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- page4 -->
        <div class="page4">
            <img src="./imgs/laptop.webp" alt="">
            <img src="./imgs/Zurich-at-night.webp" class="pg4img2" alt="">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

        <!-- page5 -->

        <div class="page5">
            <img src="./imgs/italy.jpg" alt="">
            <div class="text">
                <h3>I want to explore</h3>
                <h1>ITALY</h1>
                <button>Discover more</button>
            </div>
        </div>

        <!-- page6 -->

        <div class="page6">
            <div class="topptr">
                <img src="imgs/arrowpg6.png" alt="">
                <h3>Discover the World with Us</h3>
                <h1>Inspiring stories</h1>
            </div>
            <div class="bottomptr">

                <div class="col1">
                    <div class="img1">
                        <img src="imgs/pg6Img1.jpg" alt="">
                        <h1>Where to Dive in to the</h1>
                        <h1>Hottest – or Coldest! – New</h1>
                        <h1>Wellness Trend</h1>
                        <h3>- Continue Reading </h3>
                    </div>
                    <div class="img2">
                        <img src="imgs/pg6Img1.jpg" alt="">
                        <h1>Where to Dive in to the</h1>
                        <h1>Hottest – or Coldest! – New</h1>
                        <h1>Wellness Trend</h1>
                        <h3>- Continue Reading </h3>
                    </div>
                </div>
                <div class="col2">
                    <div class="col2img1">
                        <img src="imgs/pg6Img1.jpg" alt="">
                        <h1>Where to Dive in to the</h1>
                        <h1>Hottest – or Coldest! – New</h1>
                        <h1>Wellness Trend</h1>
                        <h3>- Continue Reading </h3>
                    </div>
                    <div class="col2img2">
                        <img src="imgs/pg6Img1.jpg" alt="">
                        <h1>Where to Dive in to the</h1>
                        <h1>Hottest – or Coldest! – New</h1>
                        <h1>Wellness Trend</h1>
                        <h3>- Continue Reading </h3>
                    </div>
                </div>
                <div class="col3">
                    <div class="img1">
                        <img src="imgs/pg6Img1.jpg" alt="">
                        <h1>Where to Dive in to the</h1>
                        <h1>Hottest – or Coldest! – New</h1>
                        <h1>Wellness Trend</h1>
                        <h3>- Continue Reading </h3>
                    </div>
                    <div class="img2">
                        <img src="imgs/pg6Img1.jpg" alt="">
                        <h1>Where to Dive in to the</h1>
                        <h1>Hottest – or Coldest! – New</h1>
                        <h1>Wellness Trend</h1>
                        <h3>- Continue Reading </h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="page7">

            <form action="PHP/enquire.php" method="POST" id="form">


                <h5>Discover Your Next Adventure with</h5>
                <h1>Contact A Travel <br>Researcher</h1>
                <label for="name">Your Name*</label><br>
                <input type="text" name="name" id="name"><br>
                <label for="email">Email Address*</label><br>
                <input type="email" name="email" id="email"><br><br>
                <label for="destination">Destination*</label><br>
                <select name="destination" id="destination">
                    <option value="Africa">Africa</option>
                    <option value="Latin-America">Latin-America</option>
                    <option value="Europe">Europe</option>
                    <option value="Asia">Asia</option>
                    <option value="Australia">Australia</option>
                </select><br><br>
                <label for="startdate">Start Date*</label><br>
                <input type="date" name="startdate" id="startdate"><br>
                <label for="enddate">End Date*</label><br>
                <input type="date" name="enddate" id="enddate"><br>
                <label for="textarea">Let us know about your trip plans! (optional)</label><br>
                <textarea name="optional" rows="5" cols="5" class="textarea">

            </textarea><br><br>
                <div class="message">
                    <?php if (!empty($message)) {
                        echo $message;
                    } ?>
                </div><br>
                <button type="submit" class="submitbtn">SUBMIT</button>

            </form>
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