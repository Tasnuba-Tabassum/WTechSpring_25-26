<?php
$name="";
$email="";
$username="";
$password="";
$confirm_password="";
$age="";
$gender="";
$course="";
$terms="";

$errors = array();

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    $name=($_POST["name"]);
    $email=($_POST["email"]);
    $username=($_POST["username"]);
    $password=($_POST["password"]);
    $confirm_password=($_POST["confirm_password"]);
    $age=($_POST["age"]);
    $gender=($_POST["gender"]);
    $course=($_POST["course"]);
    $terms=isset($_POST["Terms"]) ? $_POST["Terms"] : "";

    // Validation 1: All fields must not be empty
    if (empty($name)) echo "Full Name is required.";
    if (empty($email)) echo "Email is required.";
    if (empty($username)) echo "Username is required.";
    if (empty($password)) echo "Password is required.";
    if (empty($confirm_password)) echo "Confirm Password is required.";
    if (empty($age)) echo "Age is required.";
    if (empty($gender)) echo "Gender is required.";
    if (empty($course)) echo "Course is required.";
    if (empty($terms)) echo "Terms & Conditions must be accepted.";

    // Validation 3: Email must be a valid email format
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email must be a valid email format.";
    }

    // Validation 4: Username must be at least 5 characters long
    if (!empty($username) && strlen($username) < 5) {
        echo "Username must be at least 5 characters long.";
    }

    // Validation 5: Password must be at least 6 characters long
    if (!empty($password) && strlen($password) < 6) {
        echo "Password must be at least 6 characters long.";
    }

    // Validation 6: Password and Confirm Password must match
    if (!empty($password) && !empty($confirm_password) && $password !== $confirm_password) {
        echo "Password and Confirm Password must match.";
    }

    // Validation 7: Age must be 18 or above
    if (!empty($age) && (!is_numeric($age) || $age < 18)) {
        echo "Age must be 18 or above.";
    }

    
    }
?>