<?php
include_once "helper.php";
// PHP program to convert temperature from degree Celsius to Fahrenheit and Fahrenheit to Celcius

    // celsius to fahrenheit conversion
    function celciusToFahrenheit($temperature)
    {
        $fahrenheitTemperature = (float)(($temperature * (9/5)) + 32);
        sendReply(200,"Temperature in Fahrenheit: ".$fahrenheitTemperature);
        
    }

    // fahrenheit to celsius conversion
    function fahrenheitToCelcius($temperature)
    {
        $celciusTemperature = (float)(($temperature - 32) * (5/9));
        sendReply(200,"Temperature in Celcius: ".$celciusTemperature);
        
    }


    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $temperature = (float)$_POST["temperature"];
        $type = $_POST["type"];
        if(empty($type) || empty($temperature)){
            sendReply(400,"Please fill all the fields.");
        }
        else{
            if ($type == "Celcius"){
                fahrenheitToCelcius($temperature);
            }
            else if ($type == "Fahrenheit"){
                celciusToFahrenheit($temperature);
            }
            else{
                sendReply(400,"Select correct Type[Celcius/Fahrenheit]");
            }
        }
    }
    
    else{
        sendReply(400,"Bad Request");
    }

?>

