<?php
include "../model/db.php";
session_start();

$name="";
$email="";
$age="";
$department="";
$datafile="../data.json";

if($_SERVER["REQUEST_METHOD"]=="POST")          
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $age=$_POST["age"];
        $department=$_POST["department"];

        if(!empty($name) && strlen($name)>5)
            {
                $_SESSION["name"]=$name;
                setcookie('name', $name, time() + 3600, "/");

                $formdata = array('name' => $name,'email' => $email,'age' => $age,'department' => $department
);
                if(file_exists($datafile))
                    {
                        $existdata = file_get_contents($datafile);
                        $tempdata = json_decode($existdata,true);
                    }
                    else
                    {
                       $tempdata = array();
                    }
                    if(!is_array($tempdata))
                    {
                        $tempdata = array();
                    }
                    
                    $tempdata[] = $formdata;
                    $jsondata= json_encode($tempdata, JSON_PRETTY_PRINT);
                    if(file_put_contents($datafile, $jsondata) !== false)
                    {
                        echo "Registration Successful.";
                    }
                    else
                    {
                        echo "Error saving data.";
                    }
                    $data = file_get_contents($datafile);
                    $mydata = json_decode($data);

                    $database = new db();
                    $connection = $database->connection();
                    $result = $database->registration($connection,"students",$name, $email, $age, $department);
                    if($result)
                        {
                            echo "Registration Successful.";
                        }
                        else
                        {
                            echo "Error saving data.";
                        }
                        if(isset($_SESSION["name"]))
                            {
                                echo "Welcome, " . $_SESSION["name"] . "!";
                            }
                            else
                            {
                                echo "Session not set.";
                            }

            }

            }
    

?>