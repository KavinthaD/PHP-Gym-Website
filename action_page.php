<?php
$servername = "localhost";
$username = "root";  // Replace with your MySQL username
$password = "";  // Replace with your MySQL password
$dbname = "sanzeus_gym";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['f_name']);
    $lastName = htmlspecialchars($_POST['l_name']);
    $email = htmlspecialchars($_POST['email']);
    $phoneNumber = htmlspecialchars($_POST['p_no']);
    $address = htmlspecialchars($_POST['address']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $condition = htmlspecialchars($_POST['condition']);
    $conditionDetails = htmlspecialchars($_POST['condition_details']);
    $attendedGym = htmlspecialchars($_POST['attended_gym']);
    $membershipType = htmlspecialchars($_POST['membership_type']);

    $stmt = $conn->prepare("INSERT INTO registration (first_name, last_name, email, phone_number, address, dob, gender, condition, condition_description, attended_gym, membership_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssiissi", $firstName, $lastName, $email, $phoneNumber, $address, $dob, $gender, $condition, $conditionDetails, $attendedGym, $membershipType);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
