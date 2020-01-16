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
            include "./helper/navBar.php";
            //include "./helper/db_conn.php"; // test rauswerfen dannach
        ?>
    </div>

    
    <!-- Wilkommenstexte -->
    <div id="home" >
        <div id="txt_bannerWillkommen">
            <p>Willkommen bei OwnBeer</p>
        </div>

        <div class="homeSpicker">
            <span>
                Wir haben etwas neues für Ihren Genuss !
            </span>

            <span>
                Wir haben etwas neues für Ihren Genuss !
            </span>
        </div> 
    </div>
    






    </body>
</html>