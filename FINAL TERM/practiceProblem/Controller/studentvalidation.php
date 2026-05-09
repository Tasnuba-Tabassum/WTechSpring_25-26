<?php
session_start();
$studentname="";
$marks="";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $studentname=$_POST["name"];
        $marks=$_POST["marks"];

        if(!empty($studentname))
        {
            echo "Student Name: ".$studentname."<br>";
        }
        else
        {
            echo "Student name is required.<br>";
        }

        if($marks>=50)
            {
                echo "Congratulations! You have passed the exam.";
            }
        else
            {
                echo "Sorry, you have failed the exam.";
            }

    }

?>
