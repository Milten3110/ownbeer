<!-- Php Funktionen -->
<?php
    $userName    =   $_POST['userName'];
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


    //  Validierung min 6 Zeichen
    //  [a-zA-z]+[0-9]
    //  TODO
    //  Wiederholenden Code in eine Funktion schreiben mit Param des zu prüfenden Strings
    if(strlen($userName) >= 6 && strlen($userName) <= 18){

        // Parsen userName auf erlaubte werte
        for($index = 0; $index < strlen($userName); ++ $index){

            // TODO : echo off
            if(in_array($userName[$index],$erlaubteKleinBuchstaben)){
                echo 'klein' . "<br>";
            }

            else if(in_array($userName[$index],$erlaubteGrossBuchstaben)){
                echo 'gross' . "<br>";
            }

            
            else if(in_array($userName[$index],$erlaubteZahlen)){
                echo 'number' . "<br>";
            }

            else{
                die('Unzulässige Zeichen im Benutzernamen !');
            }
        }

        //  Pw länge Prüfen
        if(strlen($userPw1) >= 6 && strlen($userPw1) <= 18){
            
            //  ist pw gleich ?
            if($userPw1 === $userPw2){
                
                // Parsen pw auf erlaubte werte
                for($index = 0; $index < strlen($userPw1); ++ $index){
                    // TODO : echo off
                    if(in_array($userPw1[$index],$erlaubteKleinBuchstaben)){
                        echo 'klein' . "<br>";
                    }
                    else if(in_array($userPw1[$index],$erlaubteGrossBuchstaben)){
                        echo 'gross' . "<br>";
                    }
                    else if(in_array($userPw1[$index],$erlaubteZahlen)){
                        echo 'number' . "<br>";
                    }
                    else{
                        die('Unzulässige Zeichen im Password !');
                    }
                }
                
                //  ist email gleich ?
                if($userEmail1 === $userEmail2){

                    // Parsen email auf erlaubte werte
                    for($index = 0; $index < strlen($userEmail1); ++ $index){
                        // TODO : echo off
                        if(in_array($userEmail1[$index],$erlaubteKleinBuchstaben)){
                            echo 'klein' . "<br>";
                        }
                        else if(in_array($userEmail1[$index],$erlaubteGrossBuchstaben)){
                            echo 'gross' . "<br>";
                        }
                        else if(in_array($userEmail1[$index],$erlaubteZahlen)){
                            echo 'number' . "<br>";
                        }
                        else if(in_array($userEmail1[$index],$erlaubtesSonderzeichen)){
                            echo 'sonderzeichen'. "<br>";                        }
                        else{
                            die('Unzulässige Zeichen in der Email !');
                        }
                    }

                    //  Vornamen und Nachnamen Prüfen
                    for($index = 0; $index < strlen($vorname); ++$index){
                        if(in_array(strtolower($vorname[$index]),$erlaubteKleinBuchstaben)){
                            echo 'vorname[index] true' . "<br>";
                        }
                        else{
                            die('Unzulässige Zeichen bei Vornamen!');
                        }
                    }
                    for($index = 0; $index < strlen($nachname); ++$index){
                        if(in_array(strtolower($nachname[$index]),$erlaubteKleinBuchstaben)){
                            echo 'nachname[index] true' . "<br>";
                        }
                        else{
                            die('Unzulässige Zeichen bei Nachnamen!');
                        }
                    }

                    //  TODO : daten in db schreiben 

                    echo "<br> <br>" . 'JETZ WIRD IN DIE DB GESCHRIEBEN !';
                    
                }
                else{
                    echo 'Die Emails stimmen nicht überein !';
                }
            }
            else{
                echo "Die Passwörter stimmen nicht überein !";
            }
        }
        else{
            echo 'Das Passwort ist zu kurz oder zu lang, max 18 zeichen und min 6.';
        }
    }
    else{
        echo 'Der Eingegebene Benutzername ist zu lang oder zu kurz!';
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