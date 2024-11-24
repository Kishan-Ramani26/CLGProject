<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="../../CSS/toursJapan.css">
    <link rel="stylesheet" href="../../CSS/nav.css">
    <link rel="stylesheet" href="../../CSS/footer.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
</head>

<body>

    <!-- navbar -->

    <!-- navbar -->

    <nav>
        <div class="ptr1">
            <h1>Dream Destiny</h1>
        </div>
        <div class="ptr2">
            <a href="/index.php">HOME</a>
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

        <!-- loader -->

        <div class="loader">
            <h1>DreamDestiny</h1>
        </div>

        <!-- page1 -->

        <div class="page1">
            <img src="../../imgs/japan.jpg" alt="">
            <main>
                <p>Your Gateway to Global Exploration</p>
                <h1>Unveil the Wonders of the</h1>
                <h1>World with Our</h1>
                <h1>Passionate Team</h1>
            </main>
        </div>

        <!-- page2  -->

        <div class="page2">
            <div class="pg2col1">
                <div class="col1ptr1">
                    <h2>Torii gates of hie shrine in Center of Kyuto</h2>
                    <h2>From $139</h2>
                </div>
                <div class="col1ptr2">
                    <div class="ptr2sec1">
                        <h2>Contact a Travel Researcher</h2>
                        <h2>+91 7839995323</h2>
                    </div>
                    <div class="ptr2sec2">
                        <h2>- OR -</h2>
                    </div>
                    <div class="ptr2sec3">
                        <button>Book Now</button>
                    </div>
                </div>
            </div>
            <div class="pg2col2">
                <h3>OVERVIEW</h3>
                <h1>Unveiling the Secrets of Japan's</h1>
                <h1>Imperial Capital</h1>
            </div>
            <div class="pg2col3">
                <div class="col3ptr1">
                    <img src="../../imgs/iday4.jpg" alt="">
                </div>
                <div class="col3ptr2">
                    <p>Arrive in Kyoto and feel the city's timeless allure envelop you from the moment you step off the train or plane. Check into your accommodation, whether it's a traditional ryokan with tatami mat floors or a modern hotel overlooking the city skyline.</p>
                    <p>Begin your exploration of Kyoto’s cultural treasures with a visit to Kinkaku-ji, the stunning Golden Pavilion that glimmers against the backdrop of its surrounding gardens. Next, venture to Kiyomizu-dera, a UNESCO World Heritage Site perched on a hillside with panoramic views of the city.</p>
                    <p>Take a leisurely stroll through the nearby streets, breathing in the scent of cherry blossoms and incense as you immerse yourself in Kyoto’s ambiance.</p>
                </div>
            </div>
            <div class="pg2col4">
                <div class="col4ptr1">
                    <h4>highlights</h4>
                    <h1>Trip highlights</h1>
                    <div class="line"></div>
                    <p>- Explore the iconic Fushimi Inari Shrine</p>
                    <p>- Immerse yourself in Kyoto's traditional culture</p>
                    <p>- Walk along the Philosopher's Path</p>
                    <p>- Step back in time at the Kyoto Imperial Palace</p>
                </div>
                <div class="col4ptr2">
                    <h4>Inclusions</h4>
                    <h1>What's included</h1>
                    <div class="line"></div>
                    <p>- Ten nights of luxury accommodation</p>
                    <p>- Tours, experiences and hiking activities</p>
                    <p>- Internal flights and private transfers</p>
                    <p>- Price per person based on a family of four sharing</p>
                </div>
            </div>
        </div>

        <!-- page3  -->

        <div class="page3">
            <div class="pg3ptr1">
                <img src="../../imgs/jday1.jpg" alt="">
                <img src="../../imgs/iday3.jpg" alt="">
            </div>
            <div class="pg3ptr2">
                <h1>A Journey Through Time and Tradition</h1>
                <p>Embark on scenic hikes amidst the rugged beauty of the Rocky Mountains,</p>
                <p>with views of alpine lakes and towering peaks.</p>
            </div>
        </div>

        <!-- page4 -->

        <div class="page4">
            <div class="round">
                <h4>start exploring</h4>
            </div>

            <div class="day1">
                <div class="dtop">
                    <div class="ptr1">
                        <h2>Days 1 - 4</h2>
                        <h1>Arrival in Kyoto Temples and Shrines</h1>
                    </div>
                    <div class="ptr2">
                        <p>Take a leisurely stroll through the nearby streets, breathing in</p>
                        <p>the scent of cherry blossoms and incense as you immerse</p>
                        <p>yourself in Kyoto's ambiance.</p>
                    </div>
                </div>
                <div class="dbottom">
                    <img src="../../imgs/jday5.jpg" alt="">
                </div>
            </div>

            <div class="day2">
                <div class="dtop">
                    <div class="ptr1">
                        <p>Experience the art of the Japanese tea ceremony with a</p>
                        <p>private session led by a tea master, learning the rituals and</p>
                        <p>traditions that have been passed down through generations.</p>
                    </div>
                    <div class="ptr2">
                        <h2>Days 5 - 8</h2>
                        <h1>Begin exploration of Kyoto's cultural treasures</h1>
                    </div>
                </div>
                <div class="dbottom">
                    <img src="../../imgs/jday5.jpg" alt="">
                </div>
            </div>

            <div class="day1">
                <div class="dtop">
                    <div class="ptr1">
                        <h2>Days 8 - 10</h2>
                        <h1>The serene district of Arashiyama</h1>
                    </div>
                    <div class="ptr2">
                        <p>Explore the historic Tenryu-ji Temple and stroll along the scenic</p>
                        <p>riverside path of the Hozu River. For a memorable experience,</p>
                        <p>embark on a traditional boat ride down the river, taking in the</p>
                        <p>sights of Arashiyama's lush landscapes.</p>
                    </div>
                </div>
                <div class="dbottom">
                    <img src="../../imgs/jday5.jpg" alt="">
                </div>
            </div>
        </div>


        <!-- page5 -->
        <div class="page5">
            <img src="../../imgs/jday3.jpg" alt="">
            <div class="text">
                <h3>I want to explore</h3>
                <h1>JAPAN</h1>
                <button>Discover more</button>
            </div>
        </div>

        <!-- Form -->
        <div class="page7">

            <h5>Discover Your Next Adventure with</h5>
            <h1>Contact A Travel</h1>
            <h1>Researcher</h1>

            <form action="">

                <label for="name">Your Name*</label>
                <input type="text" name="name" id="name" required>
                <label for="email">Email Address*</label>
                <input type="email" name="email" id="email" required>
                <label for="destination">Destination</label>
                <select name="destination" id="destination">
                    <option value="Africa">Africa</option>
                    <option value="Latin-America">Latin-America</option>
                    <option value="Europe">Europe</option>
                    <option value="Asia">Asia</option>
                    <option value="Australia">Australia</option>
                </select>
                <label for="startdate">Start Date*</label>
                <input type="date" name="startdate" id="startdate" required>
                <label for="enddate">End Date*</label>
                <input type="date" name="enddate" id="enddate" required>
                <label for="optional">Let us know about your trip plans! (optional)</label>
                <textarea name="optional" rows="10" cols="10"></textarea>
                <button type="button" onclick="thankyou.php">Submit</button>

            </form>
        </div>


        <!-- footer -->

        <footer>
            <div class="footerptr1">
                <h3>as seen in</h3>
                <div class="icons">
                    <img src="../../imgs/footerImg1.png" alt="">
                    <img src="../../imgs/footerImg2.png" alt="">
                    <img src="../../imgs/footerImg3.png" alt="">
                    <img src="../../imgs/footerImg4.png" alt="">
                    <img src="../../imgs/footerImg5.png" alt="">
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
    <script src="../../JS/index.js"></script>

</body>

</html>