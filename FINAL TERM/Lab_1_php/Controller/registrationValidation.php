<?php 

$name="";  //$name will store the user's name
$password ="";  //$password will store the user's password
$validpassword = "";  //$validpassword will store the password if it passes validation

if($_SERVER["REQUEST_METHOD"]=="POST")  //This checks whether the form was submitted using the POST method. $_SERVER is a PHP superglobal array    "REQUEST_METHOD" tells you how the page was requested    If the request is POST, the code inside the if block runs
    {
        $name = $_POST["name"];   //$_POST["name"] gets the value from an input field named name
        $password= $_POST["password"];  //$_POST["password"] gets the value from an input field named password
 
        $name = $_REQUEST["name"];   //These lines overwrite the earlier $_POST values So the previous two lines become unnecessary here
        $password= $_REQUEST["password"];

        if(!empty($name) && strlen($name)>=5)  //!empty($name) means the name is not empty and strlen($name)>=5 means the name has at least 5 characters
            {
                echo "User Name: ".$name;   //. joins strings in PHP
            }
            else{
                echo "UserName must be greater than 5 char";
            }


            if(strlen($password)>4)  //This checks whether the password length is more than 4 characters.
                {
                   $validpassword = $password;  //$validpassword gets the password value
                   echo "Password: ".$validpassword;  //it prints the password
                }
                else{
                    
                    $validpassword = "Password Must be 4 Digit minimum";  //If the password is too short: $validpassword stores an error message instead

                    
                }
    }
?>