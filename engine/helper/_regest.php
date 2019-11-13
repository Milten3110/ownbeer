<?php
    $userNme = $_POST['userName'];

    //  Validierung min 6 Zeichen
    //  [a-zA-z]+[0-9]
    if(strlen($userNme) >= 6){    
        //echo var_dump($_POST);
    }
    else{
        echo 'Der Eingegebene Benutzername ist zu kurz';
    }
?>

<!-- Zurück zum Regestrierungsprozess führen-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="de">
        <title>Regestrieren</title> 
    </head>
    
    <body>
        <form action="../pages/regestrieren.php">
            <input type="submit" value="Zurück">  
        </form>
    </body>
</html>