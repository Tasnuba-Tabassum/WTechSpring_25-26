<?php
include "../CONTROLLER/registrationvalidation.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Registration Form </title>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td> <p style = 'color: red'> *REQUIRED FIELD </p> </td><br>
                </tr>
                <tr>
                    <td> <label for="UserName"> User Name: </label> </td>
                    <td> <input type="text" id="name" name="name"> <?php echo $name; ?> </td>
                    <td> <p style ='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="password">Passwrod: </label></td>
                    <td><input type="password" id="password" name="password"><?php echo $password ?></td>
                </tr>
                <tr>
                    <td><input type="submit" id="submit" name="submit" value="Submit"></td>
                </tr>
            </table>

        </form>
    </body>