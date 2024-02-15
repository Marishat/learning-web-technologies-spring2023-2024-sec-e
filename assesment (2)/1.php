 <!-- <html>
 <head>
    <title>HTML form</title>
</head>
<body>
    <form method="GET" action="" enctype="">
        length: <input type="number" name="length" value="" ><br>
        width: <input type="number" name="width" value="" ><br>
                  <input type="submit" name="submit" value="Submit" >
    </form>
</body>
</html> -->


<?php

$length = 2;
$width = 4;

// $length = $_REQUEST['length'];
// $width = $_REQUEST['width'];

$Rectangle = $length*$width;
$perimeter = 2*($length+$width) ;
echo "The area of rectangle is = {$Rectangle} " . "<br>";
echo "The area of perimeter is = {$perimeter}". "<br>";
?>

