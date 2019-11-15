<?php
    $username = isset($_POST['username']) ? $_POST['username'] : 'null' ;
    $userpw = isset($_POST['userpw']) ? $_POST['userpw'] : 'null';



    if(strlen($username) < 6 ||strlen($username) > 18){
        die('Zeichen über/unter-schreitung bei Benutzernamen !');
    }
    if(strlen($userpw) > 18 ||strlen($userpw) < 6){
        die('Zeichen über/unter-schreitung bei Passwort !');
    }

    //  Validieren
    //  siehe _reged.php
    
    //  TODO : mit benutzernamen oder Email adresse anmelden
    $erlaubteKleinBuchstaben = 
    [
        'a','b','c','d','e','f','g','h','i','j','k','l'
        ,'m','n','o','p','q','r','s','t','u','v','w','x','y','z'
    ];
$erlaubteGrossBuchstaben = 
    [
        'A','B','C','D','E','F','G','H','I','J','K','L'
        ,'M','N','D','P','Q','R','S','T','U','V','w','X','Y','Z'
    ];
$erlaubteZahlen = 
    [
        '0','1','2','3','4','5','6','7','8','9'
    ];
$erlaubtesSonderzeichen = 
    [
        '@','.'
    ];


    //  usernameCorrect correct eingegeben ?
    for($index = 0; $index < strlen($username); ++$index){
        
        // Gross buchstaben
        if(in_array($username[$index], $erlaubteGrossBuchstaben)){

        }
        
        else if (in_array($username[$index],$erlaubteKleinBuchstaben)){

        }

        else if (in_array($username[$index],$erlaubteZahlen)){

        }

        else{
            die('Falsche Zeichen bei Benutzername eingegeben !');
        }
    }

    //  userPassword Correct eingegeben ?
    for($index = 0; $index < strlen($userpw); ++$index){
        if(in_array($userpw[$index],$erlaubteGrossBuchstaben)){

        }

        else if(in_array($userpw[$index],$erlaubteKleinBuchstaben)){

        }

        else if (in_array($userpw[$index],$erlaubteZahlen)){

        }
        else{
            die('Falsche Zeichen bei Password eingegeben !');
        }
    }


    //  Login Session Start !!
    ######################################################################################
    ######################################################################################
    ######################################################################################
    ######################################################################################
    ######################################################################################
    

?>

<!-- Zurück zum Anmeldeprozess führen-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="de">
        <title>Regestrieren</title> 
    </head>
    
    <body>
        <form action="../pages/anmelden.php">
            <input type="submit" value="Zurück">  
        </form>
    </body>
</html>
