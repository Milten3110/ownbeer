<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="de">
        <!-- Responsiv Abfrage -->
        <link rel="stylesheet" href="assets/css/responsiv.css">
        <title>Wilkommen bei OwnBeer</title>

    </head>

    <body>

    <!-- NavBar 
        TODO: NavBar umarbeiten so dass einzelstehende Html/Php elemente sind
        Bad: momentan via Php html elemente erzeugens
    -->

    <div class="navBar">
        <?php
            include "./helper/sessionStart.php";
            //include "./helper/db_conn.php"; // test rauswerfen dannach
        ?>
    </div>

    
    <!-- NavBar-->
    <div id="navBar">
        <div>
            <p id="lblStartseite"><a href="">Startseite</a></p>
        </div>

        <div>
            <p id="lblEvents"><a href="./pages/events.php">Events</a></p>
        </div>        
        
        <div>
            <p id="lblProdukte"><a href="./pages/produkte.php">Produkte</a></p>
        </div>        
        
        <div>
            <p id="lblAngebote"><a href="./pages/angebote.php">Angebote</a></p>
        </div>        
        
        <div>
            <p id="lblWarenkorb"><a href="./pages/warenkorp.php">Warenkorb</a></p>
        </div>        
        
        <div>
            <p id="lblKontackt"><a href="./pages/kontackt.php">Kontackt</a></p>
        </div>        
        
        <div>
            <p id="lblAnmelden"><a href="./pages/anmelden.php">Anmelden</a></p>
        </div>

        <div>
            <p id="lblRegestrieren"><a href="./pages/regestrieren.php">Regestrieren</a></p>
        </div>
    </div>
    






    </body>

    <footer>
        <div>
            <p>Impressum</p>
        </div>
    </footer>
</html>