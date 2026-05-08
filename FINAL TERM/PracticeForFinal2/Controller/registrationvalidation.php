<?php 

session_start();

$name ="";
$password="";
$datafile ="../data.json";  //will save user data, stores file path


if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST["name"];
        $password = $_POST["password"];

        if(!empty($name) && strlen($name)>=5 && strlen($password)>=4)
            {
                $_SESSION["name"] = $name; //stores username in session, remembers user until they close the browser
                setcookie('name', $name, time()+3600, "/");  //expires after 1hour
                echo "Login Successful";

                $formdata = array("Name"=>$name, "Password"=>$password); //associative array to store user data

                if(file_exists($datafile)) //checks if data file exists if it does, reads existing data and decodes it into an array, if not, initializes an empty array
                    {
                        $existdata = file_get_contents($datafile); //reads all data from file
                        $tempdata = json_decode($existdata, true); //converts into php array
                    }
                    else{
                        $tempdata = array();
                    }

                    if(!is_array($tempdata))
                        {
                            $tempdata = array(); 
                        }
                    $tempdata [] = $formdata; //adds new user data to array
                    $jsondata = json_encode($tempdata, JSON_PRETTY_PRINT); //converts array back to json format with pretty print for readability
                if(file_put_contents($datafile,$jsondata)!== false) //writes json data to file, checks if write operation was successful
                    {
                        echo "Data Saved";
                    }
                    else{
                        echo "Please Try Again";
                    }
                $data = file_get_contents($datafile); //reads all data from file
                $mydata = json_decode($data);
            }
            else{
                echo "Please try again!";
            }

        if(isset($_SESSION["name"]) || isset($_COOKIE["name"])) //checks if session or cookie is set, if either is true, welcomes user back, otherwise prompts to log in again
            {
                echo "Welcome Back";
            }
        else{
        echo "pLease log in again!"; 
            }
    }


?>