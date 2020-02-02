<?php 
    function openDatabaseConnection(){
        $user = "andy";
        $password = "andy3110";
        $database = "ownbeer";
        $dbServer = "localhost";
    
        $db = mysqli_connect($dbServer,$user,$password,$database) or die('DB Connect error !');

        return $db;
    }
?>