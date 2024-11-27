<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Blood</title>
    
    <link rel="stylesheet" href="donate_blood.css">
    
    <link rel="stylesheet" href="/BloodDonation/Frontend/Footer/footer.css"> <!-- Footer CSS -->
    
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
        <form action="/BloodDonation/Backend/donate_blood.php" method="POST" onsubmit="return validateDonateForm()">
            <h2>Donate Blood</h2>

            <div class="form-row">
                <!-- First Column -->
                <div class="form-column">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>

                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" required>

                    <label for="age">Your Age:</label>
                    <input type="number" id="age" name="age" placeholder="Enter your age" required min="18" max="65">

                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>

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
                </div>

                <!-- Second Column -->
                <div class="form-column">
                    <label for="contact">Contact Number:</label>
                    <input type="text" id="contact" name="contact" placeholder="Enter your contact number" required pattern="^\d{10}$">

                    <label for="address">Your Address:</label>
                    <textarea id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>

                    <!-- Comment Section -->
                    <label for="comments">Comments or Additional Information:</label>
                    <textarea id="comments" name="comments" rows="3" placeholder="Write any comments or additional info"></textarea>

                    <button type="submit">Submit</button>
                    <p id="donate-error-message" class="error"></p>
                </div>
            </div>
        </form>
    </div>

    <script>
        function validateDonateForm() {
            const name = document.getElementById("name").value.trim();
            const dob = document.getElementById("dob").value.trim();
            const age = parseInt(document.getElementById("age").value.trim());
            const contact = document.getElementById("contact").value.trim();
            const address = document.getElementById("address").value.trim();
            const errorMessage = document.getElementById("donate-error-message");

            // Validation
            if (!name || !dob || !age || !contact || !address) {
                errorMessage.textContent = "All fields are required. Please fill them out.";
                return false;
            }

            if (age < 18 || age > 65) {
                errorMessage.textContent = "Age must be between 18 and 65 to donate blood.";
                return false;
            }

            if (!/^\d{10}$/.test(contact)) {
                errorMessage.textContent = "Please enter a valid 10-digit contact number.";
                return false;
            }

            errorMessage.textContent = ""; // Clear error message
            return true; // Allow form submission
        }
    </script>

 <!-- Including footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/BloodDonation/Frontend/Footer/footer.php'; ?>

</body>
</html>
