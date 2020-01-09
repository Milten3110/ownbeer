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
    
    <!-- NavBar -->
    <div class="navBar">
        <?php
            include "./helper/sessionStart.php";
            include "./helper/navBar.php";
        ?>
    </div>

    
    <!-- Informationen zu den Aktuellen angeboten-->
    <div class="information">

        <div>
            <span class="info_text01">
                <p id="inf_01_lbl"></p>
            </span>
            <img class="img_formation" src="assets/bilder/astra-radler.jpg" alt="Astra Radler-Bier">
        </div>

    </div>

    <div class="information">
        <div>
            <span>
                <p id="inf_02_lbl"></p>
                <img class="img_formation" src="assets/bilder/canadian.jpg" alt="Canadian Bier">
            </span>
        </div>
    </div>
    
    <div class="information">
        <div>
            <span>
                <p id="inf_03_lbl"></p>
                <img class="img_formation" src="assets/bilder/faxe-startkbier.jpg" alt="Stark Bier Faxe">
            </span>
        </div>
    </div>

    <div class="information">
        <div>
            <span>
                <p id="inf_04_lbl"></p>
                <img class="img_formation" src="assets/bilder/guinnes.jpg" alt="Guinnes Bier">
            </span>
        </div>
    </div>

    <div class="information">
        <div>
            <span>
                <p id="inf_05_lbl"></p>
                <img class="img_formation" src="assets/bilder/paulaner-Weizen.jpg" alt="Paulaner Hefe-Weizen">
            </span>
        </div>
    </div>

    <div class="information">
        <div>
            <span>
                <p id="inf_06_lbl"></p>
                <img class="img_formation" src="assets/bilder/pilsenerUrquell-Pils.jpg" alt="Urquell Pilsener">
            </span>
        </div>
    </div>
    
    <div class="information">
        <div>
            <span>
                <p id=""></p>
                <img class="img_formation" src="" alt="">
            </span>
        </div>
    </div>
    </body>
</html>