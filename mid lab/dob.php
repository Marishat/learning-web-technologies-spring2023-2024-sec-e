<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $day = $_POST['day'];
    $month = $_REQUEST['month'];
    $year = $_REQUEST['year'];

    if(empty($day) || empty($month) || empty($year)) {
        echo "Please fill all the information";
    } else {
        if ($day < 1 || $day > 31) {
            echo "Day must be between 0-31";
        } else if ($month < 1 || $month > 12) {
            echo "Month must be between 1-12";
        } else if ($year < 1900 || $year > 2016) {
            echo "Year must be between 1900-2016";
        } else {
            header("Location:form.php");
            exit();
        }
    }
}
?>