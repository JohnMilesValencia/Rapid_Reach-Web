<?php
session_start();

$fullname = "";
$email = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'rapid reach');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Registration logic
if (isset($_POST['reg_user'])) {    
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    if (empty($fullname)) { array_push($errors, "Full name is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    $user_check_query = "SELECT * FROM users WHERE fullname='$fullname' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) {
        if ($user['fullname'] === $fullname) {
            array_push($errors, "Full name already exists");
        }
        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    if (count($errors) == 0) {
        $password = password_hash($password_1, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (fullname, email, password) VALUES('$fullname', '$email', '$password')";
        
        if (mysqli_query($db, $query)) {
            $_SESSION['success_message'] = "Registration successful! You can now log in.";
        } else {
            array_push($errors, "Error in registration: " . mysqli_error($db));
        }
    }
}

// Login logic
if (isset($_POST['login_user'])) {
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($fullname)) {
        array_push($errors, "Full name is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $query = "SELECT * FROM users WHERE fullname='$fullname'";
        $results = mysqli_query($db, $query);
        $user = mysqli_fetch_assoc($results);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['fullname'] = $fullname;
            $_SESSION['success_message'] = "You are now logged in";
            header('location: home.php');
            exit();
        } else {
            array_push($errors, "Wrong full name/password combination");
        }
    }
}

// Store errors and success message in session
if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;
}

// Redirect back to the form page
header('location: login.php');
exit();
?>
