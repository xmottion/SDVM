<?php
session_start();

$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "user_profiles";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error connecting to the database: " . $conn->connect_error);
}

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}


$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $_SESSION['email']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();

    echo "<h2>User profile</h2>";
    echo "<img src='" . $user['photo'] . "' alt='Profile photo' width='200'><br>";
    echo "Name: " . $user['name'] . "<br>";
    echo "Birth date: " . $user['birthdate'] . "<br>";
    echo "Gender: " . $user['gender'] . "<br>";
    echo "Country: " . $user['country'] . "<br>";
    echo "Region: " . $user['region'] . "<br>";
    echo "City: " . $user['city'] . "<br>";
    echo "Phone: " . $user['phone'] . "<br>";
    echo "Email: " . $user['email'] . "<br>";
    echo "About: " . $user['about'] . "<br>";

    echo "<a href='logout.php'>Exit</a>";
} else {
    echo "User not found.";
}

$stmt->close();
$conn->close();
?>
