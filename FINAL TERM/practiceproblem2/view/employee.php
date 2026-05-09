<?php
include "../controller/employeevalidation.php";
?>

<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="">
            <table>
                <tr>
                    <td><p style='color:green'>Employee Leave Evaluation</p></td>
                </tr>
                <tr>
                    <td><label for="name">Employee Name: </label></td>
                    <td><input type="text" name="name"></td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="department">Employee Department: </label></td>
                    <td><input type="text" name="department"></td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                 <tr>
                    <td><label for="number">Number of leave days: </label></td>
                    <td><input type="text" name="number"></td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>