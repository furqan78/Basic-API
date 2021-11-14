<?php

include_once "helper.php";
include_once "dbconnect.php";
session_start();

function login($conn)
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)){
        sendReply(400, "Please fill all fields!");
    }
    
    $exist_sql = "SELECT * FROM `users` WHERE Email = '$email'";
    $result = mysqli_query($conn, $exist_sql);
    if (!$result){
        sendReply(503, "Something Went Wrong. Try again later");
    }
    if(mysqli_num_rows($result) > 0){
        $data = $result->fetch_assoc();
        if($password != $data["Password"]){
            sendReply(401,"Invalid Password");
        }
        else{
            $_SESSION['name'] = $data['Name'];
            sendReply(200,"Success ".$_SESSION['name']);
        }
    }
    else{
        sendReply(401,"Invalid Email");
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    login($conn);
}
else{
    sendReply(400,"Bad Request");
}
?>
