<?php 
include "../controller/indexValidation.php";    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Log in Form</title>
</head>
<body>
    <form method = "post" action="">
        <table>
            <tr>
                <td><p style='color: red'>*Required Field</p></td>
            </tr>
            <tr>
                <td><label for="UserName">User Name:</label></td>
                <td><input type="text" id="name" name="name"><?php echo $name; ?></td>
                <td><p style='color: red'>*</p></td>

            </tr>
            <tr>
                <td><label for="email">Email: </label></td>
                <td><input type="email" id="email" name="email"><?php echo $email ?></td>
            </tr>

            <tr>
                <td><label for="password">Password: </label></td>
                <td><input type="password" id="password" name="password"><?php echo $password ?></td>   
            </tr>

            <tr>
                <td><input type="submit" id="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>