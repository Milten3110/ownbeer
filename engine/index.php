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

    
    <!-- NavBar-->
    <div id="navBar">
        <div>
            <p id="lblStartseite"></p>
        </div>

        <div>
            <p id="lblEvents"></p>
        </div>        
        
        <div>
            <p id="lblProdukte"></p>
        </div>        
        
        <div>
            <p id="lblAngebote"></p>
        </div>        
        
        <div>
            <p id="lblWarenkorb"></p>
        </div>        
        
        <div>
            <p id="lblKontackt"></p>
        </div>        
        
        <div>
            <p id="lblAnmelden"></p>
        </div>

        <div>
            <p id="lblRegestrieren"></p>
        </div>
    </div>
    






    </body>

    <footer>
        <div>
            <p>Impressum</p>
        </div>
    </footer>
</html>