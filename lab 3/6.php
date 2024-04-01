<?php
$arr = [
        ["Dhaka"],
        ["Chittagong"],
        ["Dinajpur"],
    ];
    $a = "Dhaka";
    $found = true;
    foreach ($arr as $s1)
{ 
    foreach($s1 as $s)
    
    if($a == $s)
    {
        $found = false;
        break;
    }

}
if($found == false)
{
    echo "Found";
}
else
{
    echo "Not Found ";
}
?>