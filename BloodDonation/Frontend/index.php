<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Initiative</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="/BloodDonation/Frontend/Footer/footer.css">
</head>
<body>
    <!-- Including navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/BloodDonation/Frontend/navbar.html'; ?>

    <!-- Image Section -->
    <div class="image-section">
        <div class="main-content">
            <h1>Hearty Welcome To Our Webpage</h1>
            <p>!!--- Help save lives by donating blood ---!!</p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="content-section">
        <!-- Emergency Blood Services -->
        <div class="info-box emergency-box">
            <h2>Emergency Blood Services</h2>
            <p><strong>Address:</strong> 123 Bloodline Avenue, Lifesaver City, BL 45678</p>
            <p><strong>Contact:</strong> +1 (234) 567-8901</p>
            <p><strong>Email:</strong> support@blooddonation.org</p>
            <p><strong>Available 24/7:</strong> Yes</p>
        </div>

        <!-- Blood Donation Facts -->
        <div class="info-box facts-box">
            <h2>Blood Donation Facts</h2>
            <ul>
                <li>Every 2 seconds, someone in need receives a blood transfusion.</li>
                <li>A single donation can save up to 3 lives.</li>
                <li>Donating blood is a simple and safe process.</li>
                <li>Blood cannot be manufactured; it can only come from donors.</li>
            </ul>
        </div>

        <!-- How You Can Help -->
        <div class="info-box help-box">
            <h2>How You Can Help</h2>
            <p>Join our initiative by:</p>
            <ul>
                <li>Registering as a donor.</li>
                <li>Organizing blood donation drives in your community.</li>
                <li>Spreading awareness about the importance of donating blood.</li>
                <li>Supporting us with funds for outreach programs.</li>
            </ul>
        </div>

        <!-- Testimonials -->
        <div class="info-box testimonials-box">
            <h2>What People Say</h2>
            <blockquote>
                "Donating blood was one of the most fulfilling experiences of my life. Knowing I could save lives is priceless." - Sarah J.
            </blockquote>
            <blockquote>
                "Thanks to this initiative, my father received the blood he urgently needed. We are forever grateful." - John M.
            </blockquote>
        </div>
    </div>

    <!-- Including footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/BloodDonation/Frontend/Footer/footer.php'; ?>
</body>
</html>
