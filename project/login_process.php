<?php

$admin_username = "admin";
$admin_password = "useradmin";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $admin_username && $password === $admin_password) {
   
    header("Location: admin_panel.php");
    exit();
} else {
    echo "Invalid credentials";
}
?>