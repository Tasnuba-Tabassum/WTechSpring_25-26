<?php 
session_start();

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

$datafile ="../data.json";


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];

    $name = $_REQUEST["name"];              
    $email = $_REQUEST["email"];
    $website = $_REQUEST["website"];
    $comment = $_REQUEST["comment"];
    $gender = $_REQUEST["gender"];


    //name validation
    if(empty($name)){
        echo "Name is required </br>";
    }
    elseif(!empty($name) && strlen($name)>3){
        $_SESSION["name"] = $name;
        echo "Name: ".$name ."</br>";
    }
    else{
        echo "UserName must be greater than 3 char </br>";
    }

    //email validation
    if (empty($email)) {
        echo "Email is required </br>";
    }
    elseif(!empty($email)){
        echo "Email: ".$email ."</br>";
    }

    //website validation
    if (empty($website)) {
        $website = "";
    } 
    elseif(!empty($website)){
        echo "Website: ".$website ."</br>";
    }


    //gender validation
    if (isset($gender) && $gender=="female"){
        echo "Gender: ".$gender ."</br>";
    }
    elseif (isset($gender) && $gender=="male"){
        echo "Gender: ".$gender ."</br>";
    }
    elseif (isset($gender) && $gender=="other"){
        echo "Gender: ".$gender ."</br>";
    }
    else{
        echo "Please select a gender </br>";
    }
    
    //echo comment
    if(!empty($comment)){
        echo "Comment: ".$comment ."</br>";
    }

        $formdata = array("Name"=>$name, "Email"=>$email, "Website"=>$website, "Comment"=>$comment, "Gender"=>$gender);

        $data = file_get_contents($datafile);
        $arr_data = json_decode($data, true);

        $arr_data[] = $formdata;
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
        file_put_contents($datafile, $jsondata);

}