<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    if (empty($email)) {
        echo "Cannot be empty";
    } else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: 3.php");
            exit();
        } else {
            echo "Must be a valid email address (i.e anything@example.com) ";
        }
    }
}
?>