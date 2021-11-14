<?php
// PHP Program to find Factorial of a number
include_once "helper.php";
function findFactorial($number){
    $factorial = 1;
    if($number < 0){
        sendReply(400,"Enter Positive number");
    }
    else if ($number == 1 || $number == 0 )
    {
        sendReply(200,"Factorail of ".$number." is ".$factorial);
    }
    else if($number > 1)
    {
        
        for ($x=$number; $x>=1; $x--)  
        {  
            $factorial = $factorial * $x;  
        }
        sendReply(200,"Factorail of ".$number." is ".$factorial);
    }
    else{
        sendReply(400,"Something went wrong...");
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $number = $_POST['factorial'];  
    findFactorial($number);   
}
else{
    sendReply(400,"Bad Request");
}
?>