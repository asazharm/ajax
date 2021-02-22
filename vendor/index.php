<?php

session_start();

require_once '../db.php';

if (isset($_GET['query'])){
    $httpQuery = $_GET['query'];
    $httpQueryParams = isset($_GET['params']) ? $_GET['params'] : null;
    switch ($httpQuery){
        case $httpQuery === 'getTempTitles':
            $sqlQuery = "SELECT `title`, `id` FROM `templates`";
            $select = mysqli_query($db, $sqlQuery );
            if (mysqli_num_rows($select) > 0){
                $response = [];
                for ($i=1; $i <= mysqli_num_rows($select); $i++ ){
                    array_push($response, mysqli_fetch_assoc($select));
                }
                echo json_encode($response);
            }
            break;
        case $httpQuery === 'getTempContent' && isset($httpQueryParams):
            $sqlQuery = "SELECT `content` FROM `templates` WHERE `id` = '$httpQueryParams'";
            $select = mysqli_query($db, $sqlQuery );
            if (mysqli_num_rows($select) > 0){
                $response = mysqli_fetch_assoc($select);
                echo json_encode($response);
            }
    }
}



if (isset($_POST['userAction'])){
    switch ($_POST['userAction']){
        case $_POST['userAction'] === 'logout':
            unset($_SESSION['USER']);
            $response = [
                'status'=> true,
                'url'=>'login.php'
            ];
            echo json_encode($response);
    }
}