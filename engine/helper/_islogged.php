<?php
    //include "sessionStart.php";
    if(isset($_SESSION['userName'])){
        return true;
    }
    else{
        return false;
    }
?>