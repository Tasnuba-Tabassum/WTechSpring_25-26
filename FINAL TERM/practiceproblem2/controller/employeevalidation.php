<?php
$name="";
$department="";
$number="";

if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    $name = $_POST["name"];
    $department = $_POST["department"];
    $number = $_POST["number"];

    if(!empty($name))
        {
            echo "Employee Name: {$name} <br>";
        }
        else
        {
            echo "Employee Name is required <br>";
        }
    if(!empty($department))
        {
            echo "Employee Department: {$department} <br>";
        }
    else
        {
            echo "Employee Department is required <br>";
        }
    if(!empty($number)&& $number<=5)
        {
            echo "Number of leave days: {$number} <br>";
            echo "Leave Approved";
        }
    else
        {
            echo "Number of leave days: {$number} <br>";
            echo "Pending Approval";
        }
}
?>