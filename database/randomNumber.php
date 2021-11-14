<?php 
include_once "helper.php";
// PHP program to guess a number
    function randomNumber($number)
    {
        if(empty($number)){
            sendReply(400,"Enter something...");
        }
        elseif($number > 10 || $number < 1){
            sendReply(400,"Number shoud be between 1 to 10");
        }
        else{
            $randomNumber = mt_rand(1,10);
            if ($randomNumber == $number){
                sendReply(200,"Congratulation..! You guessed Right !".$randomNumber);
            }
            else if ($randomNumber != $number){
                sendReply(200,"Oops! Guess again..".$randomNumber);
            }
        }
    }
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $number = $_POST["number"];
        randomNumber($number);
    }
    else{
        sendReply(404,"Bad Request");
    }

?>

