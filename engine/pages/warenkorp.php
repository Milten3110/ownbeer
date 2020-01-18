<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="de">
        <link rel="stylesheet" href="../assets/css/responsiv.css">
    </head>

    <body>
        <!-- Menue -->
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
                <p id="lblWarenkorb"><a href="">Warenkorb</a></p>
            </div>        
                
            <div>
                <p id="lblKontackt"><a href="kontackt.php">Kontackt</a></p>
            </div>        
                
            <div>
                <p id="lblAnmelden"><a href="anmelden.php">Anmelden</a></p>
            </div>

            <div>
                <p id="lblRegestrieren"><a href="regestrieren.php">Regestrieren</a></p>
            </div>
        </div>
        <div>
            <?php
                include "../helper/sessionStart.php";

                if(include "../helper/_islogged.php"){
                    //echo "<span>" . 'Hier stehen Ihre Produkte drinnen' .  "</span>";

                    //call php script der die Produkte im Wahrenkorp anzeigt
                    
                }
                else{
                    //echo "<span>" . 'Sie Sind nicht angemeldet !!' .  "</span>";
                }
            ?>
        </div>


        
        <!-- Warenkorp -->
        <div>

        </div>
        
    </body>


    <footer>
        <div>
            <p>Impressum</p>
        </div>
    </footer>
</html>