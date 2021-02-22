<?php


session_start();
require_once '../db.php';



if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $query = "SELECT `id`, `login`, `password` FROM `users` WHERE `password` = '$password' AND `login` = '$login'";
    $select = mysqli_query($db, $query);

    if (mysqli_num_rows($select) > 0){
        $_SESSION['USER'] = [
            'name' => $login
        ];
        $response = [
            'status' => true,
            'url' => '/'
        ];
        echo json_encode($response);
    }else{
        $response = [
          'status' => false,
          'message' => 'Bad password or login'
        ];
        echo json_encode($response);
    }
}

