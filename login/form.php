<?php if (!empty($success)): ?>
    <div class="success-msg"><?php echo $success; ?></div>
<?php endif; ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>"
            placeholder="name@example.com">
        <span class="error"><?php echo $emailErr; ?></span>
    </div>
    <div class="mb-4">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
        <span class="error"><?php echo $passErr; ?></span>
    </div>
    <button type="submit" class="btn btn-garfield w-100 text-white fw-medium">Login</button>
</form>
<footer class="mt-4">
    <p class="text-center mb-2">
        Don't have an account? <a href="register.php">Register here</a>
    </p>
    <p class="text-center mb-0">
        <a href="index.php"><i class="fas fa-arrow-left me-1"></i> Back to Home</a>
    </p>
</footer>