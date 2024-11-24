<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/about.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
    <title>About Us</title>
</head>

<body>

    <!-- navbar -->

    <nav>
        <div class="ptr1">
            <h1>DreamDestiny</h1>
        </div>
        <div class="ptr2">
            <a href="index.php">Home</a>
            <a href="#"> Destinations</a>
            <a href="#"> Tours</a>
            <a href="#">About Us</a>
            <a href="#">blog</a>
        </div>
        <div class="ptr3">
            <button>enquire</button>
        </div>
    </nav>


    <div class="main">


        <!-- page1 -->

        <div class="page1">
            <h4>Discover our story</h4>
            <h1>About Us</h1>
        </div>

        <!-- page2 -->

        <div class="page2">
            <img src="../imgs/aboutImg1.jpg" alt="">
        </div>

        <!-- page3 -->

        <div class="page3">
            <p>At Grand Tour, we believe that travel is not just about visiting new destinations; it's about immersing yourself in new cultures, connecting with people from around the world, and creating memories that last a lifetime. Whether you're seeking adventure in the great outdoors, indulging in luxury escapes, or exploring hidden gems off the beaten path, we're here to turn your travel dreams into reality.</p>
            <p>With years of experience in the industry, our team of dedicated travel enthusiasts is committed to providing personalized service and expert guidance every step of the way. From the moment you reach out to us to the time you return home, we’ll be by your side, ensuring that every aspect of your journey exceeds your expectations.</p>
            <p>What sets us apart is our attention to detail and our unwavering commitment to customer satisfaction. We take the time to understand your unique preferences, interests, and budget, allowing us to tailor-make bespoke itineraries that perfectly align with your needs. Whether you’re planning a romantic honeymoon, a family vacation, or a solo adventure, we’ll work tirelessly to curate the perfect itinerary just for you.</p>
        </div>

        <!-- page4 -->

        <div class="page4">
            <img src="../imgs/aboutImg3.jpg" class="img1" alt="">          
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
    <script src="../script.js"></script>
    <script src="../index.js"></script>
</body>

</html>