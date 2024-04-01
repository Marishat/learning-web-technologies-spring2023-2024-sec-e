<?php
if(isset($_POST['register'])){

if(!empty($_POST['name']) && !empty($_POST['contact_no']) && !empty($_POST['username']) && !empty($_POST['password'])){
    $name = $_POST['name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
     

    $sql ="INSERT INTO user (name,contact_no,username, password) VALUES ('$name', '$contact_no', '$username', '$password')";
    try{
        mysqli_query($conn, $sql);
        echo "User Registered!<br>";
    }
    catch(mysqli_sql_exception){
        echo "Couldn't Register! <br>";
    }

} else {
    echo "Form fields are missing!";
}
}
?>