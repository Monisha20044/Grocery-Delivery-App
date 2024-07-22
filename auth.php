<?php
session_start();

// Check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Redirect to login page if not logged in
function redirectToLogin() {
    if (!isLoggedIn()) {
        header('Location: login.php');
        exit();
    }
}

// Logout function
function logout() {
    session_destroy();
    header('Location: login.php');
    exit();
}
?>
