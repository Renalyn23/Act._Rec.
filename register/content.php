<main class="w-100">
    <section class="register-card">
        <header class="text-center mb-4">
            <h2 class="d-flex align-items-center justify-content-center">
                <i class="fas fa-cat cat-icon"></i> Create Account
            </h2>
            <p class="text-muted">Join Garfield Paradise today!</p>
        </header>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>"
                    placeholder="Juan Dela Cruz">
                <span class="error"><?php echo $nameErr; ?></span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>"
                    placeholder="name@example.com">
                <span class="error"><?php echo $emailErr; ?></span>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="At least 5 characters">
                <span class="error"><?php echo $passErr; ?></span>
            </div>
            <div class="mb-4">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                    placeholder="Re-enter password">
                <span class="error"><?php echo $confirmErr; ?></span>
            </div>
            <button type="submit" class="btn btn-garfield w-100 text-white fw-medium">Register</button>
        </form>
        <footer class="mt-4">
            <p class="text-center mb-2">
                Already have an account? <a href="login.php">Login here</a>
            </p>
            <p class="text-center mb-0">
                <a href="index.php" class="d-inline-flex align-items-center">
                    <i class="fas fa-arrow-left me-1"></i> Back to Home
                </a>
            </p>
        </footer>
    </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>