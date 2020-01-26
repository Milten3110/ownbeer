<?php
    // Anpassen !
    // PC und Laptop haben unterschiedliche User dadurch doppel belegung


    //$user = "root";
    $user = "andy";
    //$password = "newPw";
    $password = "andy3110";
    
    $database = "ownbeer";
    $dbServer = "localhost";

    $db = mysqli_connect($dbServer,$user,$password,$database) or die('DB Connect error !');

    
    function openDatabaseConnection(){
        $user = "andy";
        $password = "andy3110";
        $database = "ownbeer";
        $dbServer = "localhost";
    
        $db = mysqli_connect($dbServer,$user,$password,$database) or die('DB Connect error !');

        return $db;
    }

    return $db;
?>