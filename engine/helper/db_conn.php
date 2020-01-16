<?php
    // Anpassen !
    $user = "root";
    $password = "newPw";
    $database = "ownbeer";
    $dbServer = "localhost";

    $db = mysqli_connect($dbServer,$user,$password,$database) or die('DB Connect error !');

    
    function openDatabaseConnection(){
        $user = "root";
        $password = "newPw";
        $database = "ownbeer";
        $dbServer = "localhost";
    
        $db = mysqli_connect($dbServer,$user,$password,$database) or die('DB Connect error !');

        return $db;
    }

    return $db;
?>