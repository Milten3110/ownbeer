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
        <!-- NavBar , auslagern da für die restlichen Seiten == -->
        <div class="navBar">
            <?php
            ?>
        </div>

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
            <p id="lblAnmelden"><a href="anmelden.php">Anmelden</a></p>
        </div>

        <div>
            <p id="lblRegestrieren"><a href="regestrieren.php">Regestrieren</a></p>
        </div>
    </div>

        <h1>KontacktFormular</h1>

        <!-- TODO : VALID eingaben-->
        <form action="kontackt2.php" method="post">
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

            <input type="submit" value="Weiter">
        </form>
    </body>


    <footer>
        <div>
            <p>Impressum</p>
        </div>
    </footer>
</html>