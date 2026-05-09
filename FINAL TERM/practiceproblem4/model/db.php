<?php
class db{
    function connection()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "university_db";

        $connection = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        return $connection;
    }

    function registration($connection, $students, $name, $email, $age, $department)
    {
        $sql = $connection->prepare("INSERT INTO $students (name, email, age, department) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssis", $name, $email, $age, $department);
        $result = $sql->execute();
        $sql->close();
        return $result;
    }

    }

?>