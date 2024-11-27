<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Blood</title>

    
    <link rel="stylesheet" href="request_blood.css">
    <link rel="stylesheet" href="/BloodDonation/Frontend/Footer/footer.css">

</head>
<body>
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

    <div class="form-container">
        <form action="../backend/request_blood.php" method="POST" onsubmit="return validateRequestForm()">
            <h2>Request Blood</h2>

            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

            <label for="contact">Your Contact:</label>
            <input type="text" id="contact" name="contact" placeholder="Enter your phone or email" required>

            <label for="address">Your Address:</label>
            <textarea id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>

            <label for="blood_type">Blood Type:</label>
            <select id="blood_type" name="blood_type" required>
                <option value="">Select Blood Type</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>

            <label for="quantity">Blood Quantity (in liters):</label>
            <input type="number" id="quantity" name="quantity" placeholder="Enter quantity in liters" required min="0.1" step="0.1">

            <button type="submit">Submit</button>
            <p id="request-error-message" class="error"></p>
        </form>
    </div>

    <script>
        function validateRequestForm() {
            const name = document.getElementById("name").value.trim();
            const contact = document.getElementById("contact").value.trim();
            const address = document.getElementById("address").value.trim();
            const bloodType = document.getElementById("blood_type").value.trim();
            const quantity = parseFloat(document.getElementById("quantity").value.trim());
            const errorMessage = document.getElementById("request-error-message");

            if (!name || !contact || !address || !bloodType || !quantity) {
                errorMessage.textContent = "All fields are required. Please fill them out.";
                return false;
            }

            if (quantity <= 0) {
                errorMessage.textContent = "Blood quantity must be greater than 0.";
                return false;
            }

            if (contact.length < 10) {
                errorMessage.textContent = "Contact information must be at least 10 characters.";
                return false;
            }

            errorMessage.textContent = ""; // Clear error message
            return true;
        }
    </script>

 <!-- Including footer -->
 <?php include $_SERVER['DOCUMENT_ROOT'] . '/BloodDonation/Frontend/Footer/footer.php'; ?>

</body>
</html>
