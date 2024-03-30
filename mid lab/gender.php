<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null;

    if (!empty($gender)) {
        header("Location: 5.php");
        exit();
    }
}
?>