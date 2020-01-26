<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="de">
        <title>OwnBeer - Kontacktformular</title>
        <link rel="stylesheet" href="../assets/css/responsiv.css">

        <?php
            include "../helper/sessionStart.php"
        ?>
        
    </head>

    <body>
        <noscript>
            <h1 class="noJsTxt">Sie verwenden kein JavaScript!</h1>
        </noscript>

            <!-- NavBar-->
        <div id="navBar">
            <div>
                <p id="lblStartseite"><a href="../index.php">Startseite</a></p>
            </div>

            <div>
                <p id="lblEvents"><a href="events.php">Events</a></p>
            </div>        

            <div>
                <p id="lblProdukte"><a href="produkte.php">Produkte</a></p>
            </div>        

            <div>
                <p id="lblAngebote"><a href="angebote.php">Angebote</a></p>
            </div>        

            <div>
                <p id="lblWarenkorb"><a href="warenkorp.php">Warenkorb</a></p>
            </div>        

            <div>
                <p id="lblKontackt"><a href="">Kontackt</a></p>
            </div>        

            <div>
                <p id="lblAnmelden">
                    <a href= 
                            <?php 
                                if(isset($_SESSION['userName']) && $_SESSION['userName'] != ""){
                                    echo './abmelden.php';
                                }
                                else{
                                    echo './anmelden.php'; 
                                }

                            ?> 
                        > 
                        <?php 
                            if(isset($_SESSION['userName']) && $_SESSION['userName'] != ""){
                                echo 'Abmelden';
                            }
                            else{
                                echo 'Anmelden'; 
                            }
                        ?>
                    </a>
                </p>
            </div>

            <div>
                <p id="lblRegestrieren"><a href="regestrieren.php">Regestrieren</a></p>
            </div>
        </div>






    
        <h1>KontacktFormular</h1>

        <!-- TODO : VALID eingaben-->
        <form action="" method="post">
            <label>
                Vornamen
                <input name="vorname" type="text" placeholder="vornamen">
            </label>

            <label>
                Nachnamen
                <input name="nachname" type="text" placeholder="nachnamen">
            </label>

            <label>
                Beruflich
                <input name="beruflich" id="beruflich" name="bOp" type="radio">
            </label>
            
            <label>
                Privat
                <input name="private" id="private" name="bOp" type="radio">
            </label>

            <!-- Name der Firma wen Firma ausgewählt ist-->            
            <label>
                Name der Firma
                <input type="text" placeholder="firmennamen">
            </label>

            <label>
                Rückruf
                <input type="radio" name="kontacktArt">
                <input type="text" placeholder="nummer">
            </label>
            
            <label>
                Email
                <input type="radio" name="kontacktArt">
                <input type="text" placeholder="email">
            </label>
            
            <label>
                Brief
                <input type="radio" name="kontacktArt">
                <input type="text" placeholder="stadt">
            </label>


            <label>
                Teilen Sie uns bitte Ihr Anliegen mit
                <input type="text" placeholder="Ihr Anliegen">
            </label>

            <input type="submit" value="Absenden">
        </form>
    </body>


    <footer>
        <div>
            <p>Impressum</p>
        </div>
    </footer>
</html>