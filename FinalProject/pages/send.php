<?php
include "./config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $first = $_POST["first_name"];
    $last = $_POST["last_name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $message = $_POST["message"];

    $stmt = $conn->prepare("INSERT INTO inquiries (first_name, last_name, email, contact, message) 
                            VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first, $last, $email, $contact, $message);

    if ($stmt->execute()) {
        header("Location: thankyou.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
