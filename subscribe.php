<?php
$conn = mysqli_connect("localhost", "root", "", "travel_blogs");
// die("connection failed");
if (!$conn) {
    die("connection failed");
} else {
    $email = $_GET['email_'];
    $sql = "INSERT INTO users (email) VALUES ('$email')";
    if (mysqli_query($conn, $sql)) {
        header("Location: http://localhost/blogethon/style.html");
    } else {
        echo "Data not inserted successfully.";
    }
}
