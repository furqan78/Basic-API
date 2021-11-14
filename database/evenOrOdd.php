<?php
include_once "helper.php";

// PHP Program for multiplaction Table

    function evenOrOdd($number)
    {
        if(empty($number)){
            sendReply(400,"Enter something");
        }
        else{
            if($number % 2 == 0)
                sendReply(200,$number." is Even number");
            sendReply(200,$number." is an Odd number");
        }
        
    }
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $number = $_POST['number'];
        evenOrOdd($number);
    }
    else{
        sendReply(400,"Bad Request");
    }
?>