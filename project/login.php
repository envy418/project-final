<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="login-style.css"/>
</head>
<body>
<div class="login-box">
		<img src="images/2.PNG" class="avatar">
    <h2>Admin Login</h2>
    <form action="login_process.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    </div>
</body>
</html>