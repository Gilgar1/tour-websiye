<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <!-- Header section starts -->
    <section class="header">
        <a href="home.php" class="logo">Travel</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>

            <div id="menu-btn" class="fas fa-bars"></div>
        </nav>
    </section>
    <!-- Header section ends -->

    <!-- About section starts -->
    <div class="heading" style="background: url(data:image/jpeg;base64,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) no-repeat;">
        <h1>About Us</h1>
    </div>

    <!-- Add your about content here -->

    <!-- Footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +133-456-7890</a>
                <a href="#"><i class="fas fa-envelope"></i> travel@travel.com</a>
                <a href="#"><i class="fas fa-map"></i> Mumbai, India - 500104</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
        </div>

        <div class="credit"> Created by <span>Mr. Web Designer</span> | All Rights Reserved </div>
    </section>
    <!-- Footer section ends -->

    <!-- Swiper JS link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom JS file link -->
    <script src="js/script.js"></script>
</body>
</html>