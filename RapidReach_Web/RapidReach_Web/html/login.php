<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$success_message = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : '';
unset($_SESSION['errors']);
unset($_SESSION['success_message']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Registration Form</title>
    <link href="https://cdn.jsdelivr .net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/RapidReach_Web/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2 id="formTitle">Login</h2>
            <?php if ($success_message): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $success_message; ?>
                </div>
            <?php endif; ?>
            <?php if (count($errors) > 0): ?>
                <div class="alert alert-danger" role="alert">
                    <?php foreach ($errors as $error): ?>
                        <p><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <form id="loginForm" action="server.php" method="POST">
    <div class="mb-3">
        <input type="text" name="fullname" class="form-control" id="loginEmail" placeholder="Full Name" required>
    </div>
    <div class="mb-3">
        <input type="password" name="password" class="form-control" id="loginPassword" placeholder="Password" required>
    </div>
    <button type="submit" name="login_user" class="btn btn-primary w-100">Login</button>
</form>
<form id="registerForm" action="server.php" method="POST" style="display: none;">
    <div class="mb-3">
        <input type="text" name="fullname" class="form-control" id="registerName" placeholder="Full Name" required>
    </div>
    <div class="mb-3">
        <input type="email" name="email" class="form-control" id="registerEmail" placeholder="Email" required>
    </div>
    <div class="mb-3">
        <input type="password" name="password_1" class="form-control" id="registerPassword" placeholder="Password" required>
    </div>
    <div class="mb-3">
        <input type="password" name="password_2" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
    </div>
    <button type="submit" name="reg_user" class="btn btn-primary w-100">Register</button>
</form>


<div class="switch-slider" id="switchToggle">
    <div class="slider-circle"></div>
    <div class="slider-text">Register</div>
</div>

<script>
    document.getElementById('switchToggle').addEventListener('click', function () {
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');
        const sliderText = this.querySelector('.slider-text');
        
      
        if (loginForm.style.display === 'none') {
            loginForm.style.display = 'block';
            registerForm.style.display = 'none';
            sliderText.textContent = 'Register';
        } else {
            loginForm.style.display = 'none';
            registerForm.style.display = 'block';
            sliderText.textContent = 'Login';
        }
        
       
        this.classList.toggle('active');
    });
</script>
