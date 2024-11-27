<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Blood Donation Initiative</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="/BloodDonation/Frontend/navbar.css">
    <link rel="stylesheet" href="/BloodDonation/Frontend/Footer/footer.css">
</head>
<body>

<!-- Including navbar -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/BloodDonation/Frontend/navbar.html'; ?>

    <div class="form-container">
        <form action="../backend/login.php" method="POST" onsubmit="return validateLoginForm()">
            <h2>Login</h2>

            <!-- Email Input -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <!-- Password Input -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <!-- Error Message -->
            <p id="login-error-message" class="error"></p>

            <!-- Submit Button -->
            <button type="submit">Login</button>

            <!-- Links for Forgot Password and Sign Up -->
            <p class="links">
                <a href="forgot_password.html">Forgot Password?</a>
            </p>
            <p class="links">
                Do you have an account? <a href="/BloodDonation/Frontend/Forms/signup.php" class="signup">Sign Up</a>
            </p>
        </form>
    </div>

    <script>
        function validateLoginForm() {
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const errorMessage = document.getElementById("login-error-message");

            // Clear previous error message
            errorMessage.textContent = "";

            // Check if email is empty
            if (!email) {
                errorMessage.textContent = "Email is required.";
                return false;
            }

            // Email validation (basic format check)
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email)) {
                errorMessage.textContent = "Please enter a valid email address.";
                return false;
            }

            // Check if password is empty
            if (!password) {
                errorMessage.textContent = "Password is required.";
                return false;
            }

            // Password validation (minimum length of 6 characters)
            if (password.length < 6) {
                errorMessage.textContent = "Password must be at least 6 characters long.";
                return false;
            }

            return true; // Form is valid, allow submission
        }
    </script>

<!-- Including footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/BloodDonation/Frontend/Footer/footer.php'; ?>

</body>
</html>
