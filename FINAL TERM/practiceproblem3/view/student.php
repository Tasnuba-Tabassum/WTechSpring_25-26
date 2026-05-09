<?php
include "../controller/studentbalidation.php";
?>

<!DOCTYPE html>
<html?>
    <body>
        <form method="POST" action="">
            <table>
                <tr>
                    <td><label for="name">Full Name: </label></td>
                    <td><input type="text" name="name"></td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="email">Email: </label></td>
                    <td><input type="text" name="email"></td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="username">Username: </label></td>
                    <td><input type="text" name="username"></td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="password">Password: </label></td>
                    <td><input type="password" name="password"></td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="confirm_password">Confirm Password: </label></td>
                    <td><input type="password" name="confirm_password"></td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="age">Age: </label></td>
                    <td><input type="number" name="age" min="0"></td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender: </label></td>
                    <td><input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                    </td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="course">Course selection: </label></td>
                    <td><select name="course">
                        <option value="bsc">BSc</option>
                        <option value="msc">MSc</option>
                        <option value="phd">PhD</option>
                    </select></td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="Terms">Terms and Conditions: </label></td>
                    <td><input type="checkbox" name="Terms" value="accepted"> I accept the terms and conditions</td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Register"></td>
                </tr>
            </table>
        </form>
    </body>
</html>