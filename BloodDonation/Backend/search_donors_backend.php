<?php  
// Database connection
include 'dbconn.php';

// Process form data
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search'])) {
    $blood_group = $_POST['blood_group'];
    $city = $_POST['city'];

    // Fetch matching donors
    $sql = "SELECT name, blood_group, city, contact, email, age, gender, last_donation_date, available 
            FROM donors 
            WHERE blood_group = ? AND city = ?";
    $stmt = $conn->prepare($sql);

    // Check if the statement prepared correctly
    if (!$stmt) {
        die("Error in SQL preparation: " . $conn->error);
    }

    $stmt->bind_param("ss", $blood_group, $city);
    $stmt->execute();
    $result = $stmt->get_result();

    $stmt->close();
}
if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>Name</th>
    <th>Blood Group</th>
    <th>City</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Last Donation Date</th>
    <th>Availability</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
        // Convert availability to readable format
        $availability = $row['available'] ? "Available" : "Not Available";
        echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['blood_group']}</td>
        <td>{$row['city']}</td>
        <td>{$row['contact']}</td>
        <td>{$row['email']}</td>
        <td>{$row['age']}</td>
        <td>{$row['gender']}</td>
        <td>{$row['last_donation_date']}</td>
        <td>{$availability}</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No donors found for the selected criteria.</p>";
} 
$conn->close();
?>
