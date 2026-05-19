<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"] ?? "";


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Valid email";
    } else {
        $message = "Invalid email";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Email Validation</title>
</head>

<body>

    <h2>Email Validation Form</h2>

    <form method="POST">

        <label for="email">Enter Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <button type="submit">Submit</button>

    </form>

    <?php

    if ($message != "") {
        echo "<h3>$message</h3>";
    }
    ?>

</body>

</html>