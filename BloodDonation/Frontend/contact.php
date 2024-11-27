<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Blood Donation Initiative</title>

    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="navbar.css">
    
<link rel="stylesheet" href="/BloodDonation/Frontend/Footer/footer.css"> <!-- Footer CSS -->

</head>
<body>
      
<!-- Including navbar -->
<?php include 'navbar.html'; ?>

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
    <!-- Contact Us Section -->
    <div class="contact-container">
        <div class="contact-info">
            <h1>Contact Us</h1>
            <p>We would like to hear from you!
                Reach out using the form below or contact us through the details provided. Questions, feedback, or wanting to support our mission-in whatever way you'd like-we're here to help. We can make a difference together in saving lives. Your voice matters, and we invite you to connect with us today!
                </p>
            <ul>
                <li><strong>Address:</strong> Kalanki, Kathmandu</li>
                <li><strong>Phone:</strong> 01-5136832, +977 9846276349</li>
                <li><strong>Email:</strong> blood@donationinitiative.org</li>
            </ul>
        </div>
        <div class="contact-form">
            <form action="contact_process.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" placeholder="Enter subject">
            
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
            
                <button type="submit">Send Message</button>
            </form>
            
        </div>
    </div>

    <!-- Including footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/BloodDonation/Frontend/Footer/footer.php'; ?>
    
</body>
</html>
