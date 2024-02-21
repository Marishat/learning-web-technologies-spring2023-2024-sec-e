<html>
<head>
    <title>Form</title>
</head>
<body>
  

    <form method="" action="" enctype="">
    <fieldset style = "width: 200px">
            <legend>Gender</legend>  
        Blood Group:        
        <select name=""> 
          <option value="">A+</option>
          <option value="">A-</option>
          <option value="">B+</option>
          <option value="">B-</option>
          <option value="">O+</option>
          <option value="">O-</option>
          <option value="">AB+</option>
          <option value="">AB-</option>
        </select> <br> <hr>
        <input type="submit" name="" value="Submit" ><br>
          </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBloodGroup = $_POST['bloodGroup']; 
    
    if (empty($selectedBloodGroup)) {
        echo "Please select a blood group.";
    } elseif ($selectedBloodGroup === "Select Blood Group") {
        echo "Please select a valid blood group.";
    } else {
        echo "Validation successful. Selected blood group: $selectedBloodGroup";
    }
}
?>