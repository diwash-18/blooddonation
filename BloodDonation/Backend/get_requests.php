<!-- backend/get_requests.php -->
<?php
include 'db.php';

$sql = "SELECT name, blood_type, quantity, contact, requested_at FROM blood_requests";
$result = $conn->query($sql);

$requests = array();
while($row = $result->fetch_assoc()) {
    $requests[] = $row;
}
echo json_encode($requests);
$conn->close();
?>
