<?php
include 'dbconn.php'; // Database connection file
session_start(); // Start the session to access session variables

// Check if the form is submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming the user is logged in and their user ID is stored in the session
    $user_id = $_SESSION['user_id'];

    // Get the form data
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $blood_type = $_POST['blood_type'];
    $comments = $_POST['comments'];

    // Step 1: Check if the user is eligible to donate
    $query = "SELECT donation_date FROM donations WHERE user_id = $user_id ORDER BY donation_date DESC LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $last_donated_date = $row['donation_date'];
        
        // Calculate the difference between today and the last donation date
        $today = new DateTime();
        $last_donated = new DateTime($last_donated_date);
        $interval = $today->diff($last_donated);

        if ($interval->m < 3 && $interval->y == 0) {
            // If less than 3 months, show an error message
            echo "<script>alert('You cannot donate yet. Please wait for " . (3 - $interval->m) . " more months.'); window.location.href = 'donate_blood.php';</script>";
            exit(); // Stop the rest of the process
        }
    }

    // Step 2: Insert the donation record into the database
    // Assuming the user is eligible, we now insert the donation record
    $query = "INSERT INTO donations (user_id, donation_date) VALUES ($user_id, NOW())";
    
    if (mysqli_query($conn, $query)) {
        // Donation recorded successfully, show success message and redirect
        echo "<script>alert('Thank you for donating blood!'); window.location.href = 'success_page.php';</script>";
    } else {
        // If there was an error while inserting the donation
        echo "<script>alert('Error recording donation. Please try again.'); window.location.href = 'donate_blood.php';</script>";
    }

    // Close the database connection
    $conn->close();
}
?>
