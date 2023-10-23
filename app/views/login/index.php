<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="<?php echo BASEURL ?>/login">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
    <?php 
        if(isset($_GET['error'])){
            echo("Username or password is incorrect!");
            echo("Or maybe you haven't verified your email yet!");
        }
    ?>
</body>
</html>
