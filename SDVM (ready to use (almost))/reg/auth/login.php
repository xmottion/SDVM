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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password_hash'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            header("location: profile.php");
            exit;
        } else {
            $error = "Wrong password";
        }
    } else {
        $error = "Wrong email.";
    }

    $stmt->close();
}

$conn->close();
?>
