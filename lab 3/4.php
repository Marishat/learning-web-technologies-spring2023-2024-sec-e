<?php
$no1=2;
$no2=3;
$no3=1;
if ($no1 > $no2)
{
    if($no1 > $no3)
    {
        echo "The largest number is no1 " . $no1 ;
echo "<br>";
    }

    else
    {
        echo "The largest number is no3 " . $no3 ;
        echo "<br>";
    }
}
else{
    echo "The largest number is no2 " . $no2 ;
    echo   "<br>";
}