<!-- backend/get_donors.php -->
<?php
include 'db.php';

$sql = "SELECT name, blood_type, contact FROM donors";
$result = $conn->query($sql);

$donors = array();
while($row = $result->fetch_assoc()) {
    $donors[] = $row;
}
echo json_encode($donors);
$conn->close();
?>

<!-- backend/get_donors.php -->
<!-- Securing The Dashboard -->
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    echo json_encode(array("error" => "Unauthorized"));
    exit;
} 
?>
