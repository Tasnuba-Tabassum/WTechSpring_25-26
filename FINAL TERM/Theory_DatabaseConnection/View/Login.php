<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
    </head>
    <body>
        <form method="POST" action="..Controller/loginvalidation.php">
            <?php
            echo "<h1 style='color: blue'>LOGIN PAGE</h1>";
            ?>
            <table>
                <tr>
                    <td><label for="username">Username: </label></td>
                    <td><input type="text" name="name" id="name" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password: </label></td>
                    <td><input type="password" name="password" id="password" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="login"></td>
                </tr>
            </table>
        </form>
    </body>
</html>