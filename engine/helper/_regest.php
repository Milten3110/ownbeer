<!-- Php Funktionen -->
<?php
    $userNme    =   $_POST['userName'];
    $userPw1    =   $_POST['userPw1'];
    $userPw2    =   $_POST['userPw2'];
    $userEmail1 =   $_POST['userEmail1'];
    $userEmail2 =   $_POST['userEmail2'];

    $vorname    =   $_POST['vorname'];
    $nachname   =   $_POST['nachname'];
    $geschlecht =   $_POST['geschlecht'];   
    
    //  Int, 0 = false, 1 = true
    $starkbier  =   isset($_POST['stark'])  ? 1 : 0;
    $weissbier  =   isset($_POST['weiss'])  ? 1 : 0;
    $kellerbier =   isset($_POST['keller']) ? 1 : 0;
    $fassbier   =   isset($_POST['fass'])   ? 1 : 0;
    $pils       =   isset($_POST['pils'])   ? 1 : 0;
    $dunkelbier =   isset($_POST['dunkel']) ? 1 : 0;
    $weizenbier =   isset($_POST['weizen']) ? 1 : 0;
    $festbier   =   isset($_POST['fest'])   ? 1 : 0;
    $mixerybier =   isset($_POST['mixery']) ? 1 : 0;



    //  Validierung min 6 Zeichen
    //  [a-zA-z]+[0-9]
    //  TODO : Reulären ausdruck zur Validierung
    if(strlen($userNme) >= 6){    
    }
    else{
        echo 'Der Eingegebene Benutzername ist zu kurz';
    }

    //  Passwörter erlauben 
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