<?php

$name ="";
$password ="";
$validpassword = "";
$email = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $password = $_POST["password"]; 
    $email = $_POST["email"];

    $name = $_REQUEST["name"];
    $password = $_REQUEST["password"];  
    $email = $_REQUEST["email"];

    if(!empty($name) && strlen($name)>5){
        echo "User Name: ".$name;
    }
    else{
        $name = "User Name is required and must be more than 5 characters";
    }

    if(!empty($password) && strlen($password)>8){
        $validpassword = $password;
        echo " Password: ".$validpassword;
    }
    else{
        $validpassword = "Password is required and must be more than 8 characters";
    }   

    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo " Email: ".$email;
    }
    else{
        $email = "Email is required and must be a valid email address";
    }
}
?>