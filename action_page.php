<?php
// Start the session to store error messages
session_start();

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

// Sanitize the input
$email = htmlspecialchars($_POST['email']);
$phoneNumber = htmlspecialchars($_POST['phone_number']);

// Prepare and execute the SELECT statement to check for existing email or phone number
$stmt = $conn->prepare("SELECT * FROM registration WHERE email = ? OR phone_number = ?");
$stmt->bind_param("ss", $email, $phoneNumber);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Check which field is already registered
    $row = $result->fetch_assoc();
    if ($row['email'] == $email) {
        $_SESSION['error'] = "This email is already registered.";
    } else if ($row['phone_number'] == $phoneNumber) {
        $_SESSION['error'] = "This phone number is already registered.";
    }
    // Redirect back to the form with the error message
    header("Location: register.php");
    exit();
} else {
    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO registration (first_name, last_name, email, phone_number, address, dob, gender, `condition`, condition_description, attended_gym, membership_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssiissi", $firstName, $lastName, $email, $phoneNumber, $address, $dob, $gender, $condition, $conditionDetails, $attendedGym, $membershipType);

    // Set parameters and execute the INSERT statement
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $address = htmlspecialchars($_POST['address']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $condition = htmlspecialchars($_POST['condition']);
    $conditionDetails = htmlspecialchars($_POST['condition_description']);
    $attendedGym = htmlspecialchars($_POST['attended_gym']);
    $membershipType = htmlspecialchars($_POST['membership_type']);

    if ($stmt->execute()) {
        $_SESSION['success'] = "New record created successfully";
    } else {
        $_SESSION['error'] = "Error: " . $stmt->error;
    }

    // Redirect back to the form with the success message
    header("Location: register.php");
    exit();
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
