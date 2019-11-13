<?php
    
    $userNme = $_POST['userName'];

    //  Validierung min 6 Zeichen
    //  [a-zA-z]+[0-9]
    if(strlen($userNme) >= 6){    
        echo var_dump($_POST);
    }
?>