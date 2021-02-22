<?php

session_start();
if (!isset($_SESSION['USER'])){
    header('location:login.php');
}

require_once 'db.php';


?>


<html lang="en">
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

<form class="container" method="post" id="templateForm" style="margin-top: 40vh">
    <label>Select template</label>
    <div class="input-group mb-3">
        <textarea id="templateContent" class="form-textarea form-control" aria-label="With textarea"></textarea>
    </div>

    <div class="input-group mb-3">
        <select class="form-select" id="templatesSelect"></select>
        <button class="btn btn-outline-secondary" type="button" id="templateLoadBtn">Load</button>
    </div>
    <button class="btn btn-success" type="button" id="logoutBtn">Logout</button>
</form>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="assets/index.js"></script>
</body>
</html>