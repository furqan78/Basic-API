<?php
include_once "helper.php";
//PHP program to find a year is leap year or not
    function yearCheck($year)
    {
        switch($year)
        {
           case empty($year): 
            sendReply(400,"enter something or year cannot be zero");
            break;

           case $year <= 0: 
            sendReply(400,"Year shoud be greater than zero");
            break;

           case $year % 400 == 0: 
            sendReply(200,"It is leap Year");
            break;

           case $year % 4 == 0: 
            sendReply(200,"It is leap Year");
            break;
            
           case $year % 100 == 0:
            sendReply(400,"It is not a leap Year");
            break;
        
           case $year % 100 != 0:
            sendReply(400,"It is not a leap Year");
            break;
         }
    }
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $year = (int)$_POST['year'];
        yearCheck($year);
        
    }
    else{
        sendReply(400,"Bad Request");
    }
?>