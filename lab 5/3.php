<html>
<head>
	<title>DATE OF BIRTH</title>
</head>
<body>
	<form method="post" action="">
	<fieldset style="width: 350px;">
		<legend>Date of Birth</legend>

		<label for="day">dd</label>
		<input type="number" name="day" id="day" min="1" max="31" required />

		<label for="month">mm</label>
		<input type="number" name="month" id="month" min="1" max="12" required />

		<label for="year">yyyy</label>
		<input type="number" name="year" id="year" min="1900" max="2100" required />
		<hr>
		<input type="submit" name="" value="Submit" >
	</fieldset>	
	</form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $day = $_POST['day'];
    $month = $_REQUEST['month'];
    $year = $_REQUEST['year'];

    if(empty($day) || empty($month) || empty($year)) {
        echo "Please fill all the information";
    } else {
        if ($day < 1 || $day > 31) {
            echo "Day must be between 1-31";
        } else if ($month < 1 || $month > 12) {
            echo "Month must be between 1-12";
        } else if ($year < 1953 || $year > 1998) {
            echo "Year must be between 1953-1998";
        } else {
            header("Location: 4.php");
            exit();
        }
    }
}
?>




    <!-- <form method="" action="" enctype="">
        
        <fieldset style = "width: 300 px;">
            <legend>Dath of birth</legend>       
         <input type="date" name="" value="" /> <br>
         <input type="submit" name="" value="Submit" formaction="5.html"/><br>
          <br> </br> -->
         <!-- <p>____________</p>
          </fieldset>
        
          </form>
</body>
</html> -->