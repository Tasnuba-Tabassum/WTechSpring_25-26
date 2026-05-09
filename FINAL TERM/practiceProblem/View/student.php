<?php
include "../Controller/studentvalidation.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RESULT OF MIDTERM EXAMINATION</title>
    </head>
    <body>
        <form method="POST" action = "../Controller/studentvalidation.php">
        <table>
            <tr>
                <td><p style = 'color:red'> RESULT OF MIDTERM EXAMINATION</p></td>
            </tr>
            <tr>
                <td><label for="name">Student Name: </label></td>
                <td><input type="text" name="name" ><?php echo $studentname ?></td>
                <td style= " color:red">*</td>
            </tr>
            <tr>
                <td><label for="marks">Marks: </label></td>
                <td><input type="text" name="marks" ><?php echo $marks ?></td>
                <td style= " color:red">*</td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
    </body>
</html>