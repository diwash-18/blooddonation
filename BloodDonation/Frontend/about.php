<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Blood Donation Initiative</title>
    
    <!-- About Us Page CSS -->
    <link rel="stylesheet" href="/BloodDonation/Frontend/about.css">
    <!-- Footer CSS -->
    <link rel="stylesheet" href="/BloodDonation/Frontend/Footer/footer.css">
</head>
<body>

 <<!-- Including navbar -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/BloodDonation/Frontend/navbar.html'; ?>


    <!-- Navbar -->
    <nav class="navbar">
        <div class="brand">
            <a href="/BloodDonation/Frontend/index.php" style="text-decoration: none; color: white;">Blood Donation Initiative</a>
        </div>
        <ul class="nav-links">
            <li><a href="/BloodDonation/Frontend/about.php">About Us</a></li>
            <li><a href="/BloodDonation/Frontend/Forms/donate_blood.php">Donate Blood</a></li>
            <li><a href="/BloodDonation/Frontend/Forms/request_blood.php">Request Blood</a></li>
            <li><a href="/BloodDonation/Frontend/search_donors.php">Search Donors</a></li>
            <li><a href="/BloodDonation/Frontend/contact.php">Contact Us</a></li>
            <li><a href="/BloodDonation/Frontend/Forms/login.php">Login</a></li> 
        
        </ul>
    </nav>

    <!-- About Us Section -->
    <div class="about-container">
        <div class="about-box">
            <!-- Left Text Section -->
            <div class="about-text">
                <h1>About Us</h1>
                <p>The Blood Donation Initiative is dedicated to saving lives...</p>
                <h2>Our Mission</h2>
                <p>To build an efficient and accessible system for life-saving blood donations...</p>
                <h2>Why Blood Donation Matters</h2>
                <p>Did you know that every two seconds, someone needs blood?</p>
                <h2>Our Vision</h2>
                <p>A world where every patient has access to safe blood...</p>
            </div>

            <!-- Right Image Section -->
            <div class="about-image">
                <img src="/BloodDonation/Frontend/Image/man-donor-medical-mask-bone-600nw-2479399295.webp" alt="Blood Donation">
            </div>
        </div>
    </div>

    <!-- Include the footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/BloodDonation/Frontend/Footer/footer.php'; ?>

</body>
</html>
