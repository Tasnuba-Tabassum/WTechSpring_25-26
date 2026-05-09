<?php
include "../controller/registrationvalidation.php";
?>

<!DOCTYPE html>
<html>
    <body>
        <form>
            <table>
                <tr>
                    <td><label for="name">Name: </label></td>
                    <td><input type="text" name="name" id="name"></td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="email">Email: </label></td>
                    <td><input type="text" name="email" id="email"></td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="age">Age: </label></td>
                    <td><input type="number" name="age" id="age"></td>
                    <td><p style='color:red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="department">Department: </label></td>
                    <td>
                        <select name="department" id="department">
                            <option value="">Select Department</option>
                            <option value="IT">IT</option>
                            <option value="HR">HR</option>
                            <option value="Finance">Finance</option>
                        </select>
                    </td>
                    <td><p style='color:red'>*</p></td>
                    <tr>
                    <td><input type="submit" value="Register"></td>
                    </tr>
                </tr>
            </table>
        </form>
    </body>
</html>