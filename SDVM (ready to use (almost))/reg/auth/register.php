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
    $fullname = $_POST['fullname'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $password = $_POST['password'];
    $region = $_POST['region'];
    $city = $_POST['city'];
    $phonemun = $_POST['phonemun'];
    $email = $_POST['email'];
    $about = $_POST['about'];

    // photo checkout
    $photoName = $_FILES['photo']['name'];
    $photoTmpName = $_FILES['photo']['tmp_name'];
    $photoSize = $_FILES['photo']['size'];
    $photoError = $_FILES['photo']['error'];
    $photoType = $_FILES['photo']['type'];

    $photoExt = strtolower(pathinfo($photoName, PATHINFO_EXTENSION));
    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($photoExt, $allowed)) {
        if ($photoError === 0) {
            if ($photoSize < 5000000) { // photo size (5MB)
                $photoNewName = uniqid('', true) . "." . $photoExt;
                $photoDestination = 'uploads/' . $photoNewName;
                move_uploaded_file($photoTmpName, $photoDestination);
            } else {
                echo "The file size is too large!";
            }
        } else {
            echo "File upload error!";
        }
    } else {
        echo "Unsupported file type!";
    }

    // password hash
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // SQL
    $stmt = $conn->prepare("INSERT INTO users (name, birthdate, photo, gender, country, password_hash, region, city, phone, email, about) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $fullname, $birthdate, $photoDestination, $gender, $country, $hashedPassword, $region, $city, $phonemun, $email, $about);

    if ($stmt->execute()) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("location: profile.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
