<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "users");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Fetch user data
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // Verify password
    if (password_verify($password, $user['password'])) {
        header("Location: home.php");
        exit();
        
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No account found with that email.";
}

$conn->close();
?>
