
<html>
<head>
    <title>Name Form</title>
</head>
<body>  
    <form method="post" action="">
        <fieldset style="width: 200px;">
            <legend>NAME</legend>
            <input type="text" name="name" value="" /> <br>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    if (empty($name)) {
        echo "Can not be empty";
    } else {
        $wordCount = str_word_count($name);

        if ($wordCount >= 2 && isValidName($name)) {
            header("Location: 2.php");
            exit();
        } else {
            echo " 1. Contains at least two words<br>
            2. Must starts with a letter <br>
            3. Can contains letters, period, and dash only";
        }
    }
}

function isValidName($name) {
    $validChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz.- ';
    for ($i = 0; $i < strlen($name); $i++) {
        if (strpos($validChars, $name[$i]) === false) {
            return false;
        }
    }
    return true;
}
?>
