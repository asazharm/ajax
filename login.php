<?php
session_start();

if (isset($_SESSION['USER'])) {
header('location: /');
}
?>

<html lang="en">
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>

        <form class="container mb-3" method="post" id="loginForm" style="margin-top: 40vh">
            <input class="form-control" type="text" placeholder="Login" name="login"><br>
            <input class="form-control" type="password" placeholder="Password" name="password"><br>
            <button class="form-control btn btn-success" type="submit" id="loginBtn">Sign in</button>
        </form>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="assets/main.js"></script>
    </body>
</html>
