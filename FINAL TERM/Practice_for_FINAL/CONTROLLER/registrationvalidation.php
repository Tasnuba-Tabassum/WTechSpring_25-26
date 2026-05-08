<?php

$name="";
$password="";
$vaidpassword = "";

if($_SERVER["REQUEST METHOD"]=="POST")
    {
        $name=$_POST["name"];
        $password=$_POST["password"];

        if(!empty($name) && strlen($name)>=5)
            {
                echo "User name {$name}";
            }
            else{
                echo "User name must be at least 5 characters";
            }

            if(strlen($password)>4)
                {
                    $vaidpassword = $password;
                    echo "Password {$password}";
                }
                else{
                    $vaidpassword = "invalid password";
                }
    }
?>