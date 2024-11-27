<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Blood Donation Initiative</title>
   
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="/BloodDonation/Frontend/navbar.css">
    <link rel="stylesheet" href="/BloodDonation/Frontend/Footer/footer.css">

</head>
<body>

<!-- Including navbar -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/BloodDonation/Frontend/navbar.html'; ?>


    <div class="form-container">
        <h2>Sign Up</h2>
        <form action="../backend/signup.php" method="POST" onsubmit="return validateSignupForm()">
            <div class="form-grid">
                <!-- Donor's Name -->
                <div>
                    <label for="donor-name">Donor's Name:</label>
                    <input type="text" id="donor-name" name="donor-name" placeholder="Enter your name" required>
                </div>

                <!-- Date of Birth -->
                <div>
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" required onchange="calculateAge()">
                </div>

                <!-- Age -->
                <div>
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" readonly>
                </div>

                <!-- Gender -->
                <div>
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <!-- Mobile Number -->
                <div>
                    <label for="mobile">Mobile Number:</label>
                    <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" required pattern="[0-9]{10}">
                </div>

                <!-- Address -->
                <div>
                    <label for="address">Address:</label>
                    <textarea id="address" name="address" rows="2" placeholder="Enter your address" required></textarea>
                </div>

                <!-- Email -->
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <!-- Password -->
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required minlength="6">
                </div>
            </div>

            <button type="submit">Sign Up</button>
            <p id="error-message" class="error"></p>
        </form>
    </div>

    <script>
        function calculateAge() {
            const dob = document.getElementById("dob").value;
            const birthDate = new Date(dob);
            const ageField = document.getElementById("age");

            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const m = today.getMonth() - birthDate.getMonth();

            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            ageField.value = age;
        }

        function validateSignupForm() {
            const donorName = document.getElementById("donor-name").value;
            const dob = document.getElementById("dob").value;
            const age = document.getElementById("age").value;
            const gender = document.getElementById("gender").value;
            const mobile = document.getElementById("mobile").value;
            const address = document.getElementById("address").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const errorMessage = document.getElementById("error-message");

            if (!donorName || !dob || !age || !gender || !mobile || !address || !email || !password) {
                errorMessage.textContent = "Please fill in all fields.";
                return false;
            }

            const mobilePattern = /^[0-9]{10}$/;
            if (!mobilePattern.test(mobile)) {
                errorMessage.textContent = "Please enter a valid 10-digit mobile number.";
                return false;
            }

            const emailPattern = /^[^@]+@\w+(\.\w+)+$/;
            if (!emailPattern.test(email)) {
                errorMessage.textContent = "Please enter a valid email address.";
                return false;
            }

            if (password.length < 6) {
                errorMessage.textContent = "Password must be at least 6 characters.";
                return false;
            }

            errorMessage.textContent = "";
            return true;
        }
    </script>

<!-- Including footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/BloodDonation/Frontend/Footer/footer.php'; ?>

</body>
</html>
