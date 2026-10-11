<?php
$emailErr = $passErr = "";
$email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["email"]))) {
        $emailErr = "Email is required";
    } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", trim($_POST["email"]))) {
        $emailErr = "Invalid email format";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    if (empty(trim($_POST["password"]))) {
        $passErr = "Password is required";
    }
    if (empty($emailErr) && empty($passErr)) {
        $success = "✅ Login successful! Welcome back!";

    }
}
?>
<?php include 'login/header.php' ?>

<section class="auth-card">
    <?php include 'login/form.php' ?>
</section>
</main>
<?php include 'login/footer.php' ?>