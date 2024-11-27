<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Donors</title>

    <link rel="stylesheet" href="/BloodDonation/Frontend/search.css"> 
    <link rel="stylesheet" href="/BloodDonation/Frontend/navbar.css">
    <link rel="stylesheet" href="/BloodDonation/Frontend/Footer/footer.css"> <!-- Footer CSS -->

</head>
<body>

<!-- Including navbar -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/BloodDonation/Frontend/navbar.html'; ?>


    <div class="search-form">
        <h1>Search Donors</h1>
        <form action="../Backend/search_donors_backend.php" method="POST"> <!-- Points to backend -->
            <label for="blood_group">Blood Group:</label>
            <select name="blood_group" id="blood_group" required>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" placeholder="Enter city" required>

            <button type="submit" name="search">Search</button>
        </form>
        <div class="show-doner-list">
        </div>
    </div>

<!-- Including footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/BloodDonation/Frontend/Footer/footer.php'; ?>

</body>
</html>
