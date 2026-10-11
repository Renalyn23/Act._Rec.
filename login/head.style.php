<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login — Garfield Paradise</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    body {
        background: url('../assets/print.jpg') no-repeat center center fixed;
        background-size: cover;
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 40px 20px;
        font-family: 'Segoe UI', Roboto, sans-serif;
        margin: 0;
    }

    .auth-card {
        background: rgba(255, 255, 255, 0.92);
        border-radius: 20px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        padding: 2.5rem;
        max-width: 420px;
        width: 100%;
        margin: 0 auto;
    }

    .cat-icon {
        color: #ffb300;
        font-size: 1.8rem;
        margin-right: 0.5rem;
    }

    .btn-garfield {
        background-color: #ff8c00;
        border: none;
    }

    .btn-garfield:hover {
        background-color: #e67e00;
    }

    .error {
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 0.25rem;
        display: block;
    }

    .success-msg {
        color: #198754;
        margin-top: 1rem;
        text-align: center;
    }

    a {
        color: #0066cc;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>