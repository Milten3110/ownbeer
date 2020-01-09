<?php
    $username = isset($_POST['username']) ? $_POST['username'] : 'null' ;
    $userpw = isset($_POST['userpw']) ? $_POST['userpw'] : 'null';

    session_start();


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

    include "./db_conn.php";
    //insert
    //$db->query("insert into benutzer (userName,userPw,email,shoppingcart,orders) values ('andy', 123, 'qqq@a.de', 1, 1)");
    

    // TODO: fehler behebn test datensätzte in die Datenbank einpflegen

    // abfrage
    $temp = $db->query("select * from user where userName='" . $username . "' and userPw='" . $userpw . "'");
    if($temp){
        echo var_dump(($temp));
        $temp = $temp->fetch_assoc();
    }

    $_SESSION['userName'] = $temp['userName'];
    //echo 'Hallo ' . $_SESSION['userName'];
    // navbar Nach dem zuweisen aufrufen !!!
    // include_once "./navBar.php";
    
    header("Location: ../")
    //echo var_dump($rs);

?>

<!-- Zurück zum Anmeldeprozess führen-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="de">
        <title>Anmelden</title> 
    </head>
    
    <body>
        <form action="../pages/anmelden.php">
            <input type="submit" value="Zurück">  
        </form>
    </body>
</html>
