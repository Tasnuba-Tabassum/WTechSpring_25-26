<?php
session_start();

$submittedData = $_SESSION["submitted_data"] ?? null;

if ($submittedData === null) {
    header("Location: registration.php");
    exit();
}

unset($_SESSION["submitted_data"]);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Submitted Information</title>
    </head>
    <body>
        <h2>Submitted Information</h2>

        <p><strong>Name:</strong> <?php echo htmlspecialchars($submittedData["name"]); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($submittedData["email"]); ?></p>
        <p><strong>Comment:</strong> <?php echo htmlspecialchars($submittedData["comment"]); ?></p>
        <p><strong>Gender:</strong> <?php echo htmlspecialchars($submittedData["gender"]); ?></p>
        <p><strong>URL:</strong> <?php echo htmlspecialchars($submittedData["website"]); ?></p>

        <p><a href="registration.php">Back to registration form</a></p>
    </body>
</html>
