<html>
<head>
    <title>Email</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 200px">
            <legend>EMAIL</legend>
            <input type="email" name="email" value="" > 
            <!-- placeholder="sample@example.com" -->
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>


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