<html>
<head>
    <title>Form</title>
</head>
<body>

    

    <table border="1" cellspacing="0" width="500">
        <tr height="100px"> 
            <td valign = top align="left" >
		
                <h1>xx</h1>
            </td>
            
        </tr>

        <tr>
            <td align="left" colspan="2">
                <form method="post" action=""enctype = "">
                    <fieldset>
                        <legend><b>REGISTRATION</b></legend>
                        
                               FIRST NAME:              <input type="text" name="first name" value="" /> <br><hr>
                               LAST NAME:               <input type="text" name="last name" value="" /> <br><hr>
                               PHONE NUMBER:            <input type="text" name="number" value="" /> <br><hr>
                               Email:                   <input type="text" name="Email" value="" /> <br><hr>
                               Username:                <input type="text" name="Username" value="" /> <br><hr>
                               Password:                <input type="password" name="Password" value="" /> <br><hr>
                               Confirm Password:        <input type="password" name="Confirm Password" value="" /> <br><hr>
                             <fieldset> 
                               <legend><b>GENDER</b></legend>
                                                        <input type="radio" name="gender" value="" /> Male
                                                        <input type="radio" name="gender" value="" /> Female
                                                        <input type="radio" name="gender" value="" /> Other <br><hr>
                            </fieldset> 
                            <fieldset>
                               <legend><b>DATE OF BIRTH</b></legend>
                               <label for="day">dd</label>
		<input type="number" name="day" id="day" min="0" max="31" required />

		<label for="month">mm</label>
		<input type="number" name="month" id="month" min="1" max="12" required />

		<label for="year">yyyy</label>
		<input type="number" name="year" id="year" min="1900" max="2016" required />
		<hr>
		<input type="submit" name="" value="Submit" >
        <?php 
        include("email.php");
        include("name validation.php");
        include("gender.php");
        include("dob.php");
   ?>
        
                           </fieldset>                           
                                                       <br><input type="submit" name="" value="Submit" /><t><input type="button" name="" value="Reset" />
                    </fieldset>
                </form>
            </td>
        </tr>
    
    </table>
</body>
</html>