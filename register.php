<?php
$nameErr = $emailErr = $passErr = $confirmErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name validation
    if (empty(trim($_POST["name"]))) {
        $nameErr = "Full name is required";
    } elseif (!preg_match("/^[a-zA-Z-' ]{3,}$/", trim($_POST["name"]))) {
        $nameErr = "Only letters and spaces allowed; min 3 characters";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }

    // Email validation
    if (empty(trim($_POST["email"]))) {
        $emailErr = "Email is required";
    } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", trim($_POST["email"]))) {
        $emailErr = "Invalid email format";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    // Password validation
    if (empty($_POST["password"])) {
        $passErr = "Password is required";
    } elseif (strlen($_POST["password"]) < 5) {
        $passErr = "Password must be at least 5 characters";
    }

    // Confirm password
    if (empty($_POST["confirm_password"])) {
        $confirmErr = "Please confirm password";
    } elseif (!empty($_POST["password"]) && $_POST["password"] !== $_POST["confirm_password"]) {
        $confirmErr = "Passwords do not match";
    }

    // If no errors
    if (empty($nameErr) && empty($emailErr) && empty($passErr) && empty($confirmErr)) {
        echo "<div class='alert alert-success text-center mt-4'>✅ Registration successful! Welcome, $name!</div>";
        // In real app: save to DB, redirect to login.php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'register/header.php' ?>

</head>

<body>
    <?php include 'register/content.php' ?>



</html>