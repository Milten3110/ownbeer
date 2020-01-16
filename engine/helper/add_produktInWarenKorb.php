<?php
    //hier wird jetzt via form ein element zur SessionSHoppingart hinzugefügt
    $astra = isset($_POST['astra']) ? 1 : 0; 
    $faxe = isset($_POST['faxe']) ? 1 : 0; 
    $paulaner = isset($_POST['paulaner']) ? 1 : 0; 
    $guinnes = isset($_POST['guinnes']) ? 1 : 0; 
    $canadian = isset($_POST['canadian']) ? 1 : 0; 
    $urquell = isset($_POST['urquell']) ? 1 : 0; 



    if($astra){
        echo 'astra wurde in den Wahrenkorp gelegt';
    }
    else if($faxe){
        echo 'faxe wurde in den Wahrenkorp gelegt';
    }
    else if($paulaner){
        echo 'paulaner wurde in den Wahrenkorp gelegt';
    }
    else if($guinnes){
        echo 'guinnes wurde in den Wahrenkorp gelegt';
    }
    else if($canadian){
        echo 'canadian wurde in den Wahrenkorp gelegt';
    }
    else if($urquell){
        echo 'urquell wurde in den Wahrenkorp gelegt';
    }

    else{

    }

    
?>