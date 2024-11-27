<?php
include 'dbconn.php'; // Ensure correct file path

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST['name'], $_POST['blood_type'], $_POST['quantity'], $_POST['contact'])) {
        // Sanitize and validate inputs
        $name = $conn->real_escape_string(trim($_POST['name']));
        $blood_type = $conn->real_escape_string(trim($_POST['blood_type']));
        $quantity = filter_var($_POST['quantity'], FILTER_VALIDATE_FLOAT);
        $contact = $conn->real_escape_string(trim($_POST['contact']));

        if (!$quantity || $quantity <= 0) {
            echo "Error: Invalid blood quantity.";
        } elseif (strlen($contact) < 10) {
            echo "Error: Contact information must be at least 10 characters.";
        } else {
            // Use prepared statements for better security
            $stmt = $conn->prepare("INSERT INTO blood_requests (name, blood_type, quantity, contact) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssds", $name, $blood_type, $quantity, $contact);

            if ($stmt->execute()) {
                echo "Blood request submitted successfully!";
            } else {
                echo "Error: Could not submit your request. Please try again.";
            }

            $stmt->close();
        }
    } else {
        echo "Error: All fields are required.";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Error: Invalid request method.";
}
?>
