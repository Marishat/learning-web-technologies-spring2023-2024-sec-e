<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>
    <h2>Add Employee</h2>
    <form action="add_employee.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="contact_no">Contact No:</label><br>
        <input type="text" id="contact_no" name="contact_no"><br>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
       
        <input type="submit" name="register" value ="Register">
    </form>
</body>
</html>
<?php
include '../model/db.php'; // Include the database connection file
include '../controller/regcheck.php';
?>
