<!-- <html>
<head>
    <title>HTML form</title>
</head>
<body>
    <form method="GET" action="" enctype="">
        VAT: <input type="number" name="vat" value="" ><br>
        Amount: <input type="number" name="amount" value="" ><br>
                  <input type="submit" name="submit" value="Submit" >
    </form>
</body>
</html> -->


<?php

// $Vat = $_REQUEST['vat'];
//  $Amount = $_REQUEST['amount'];


 $v =15/100;
$amount = 100000;

 $vat = $v*$amount;
echo $vat . "<br>";
echo "Total Amount (including VAT):  = " . $amount + $vat;
?>