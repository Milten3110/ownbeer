<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="de">
        <title>OwnBeer - Produkte</title>
        <link rel="stylesheet" href="../assets/css/responsiv.css">
    </head>

    <body>
        <!-- Menue -->
        <div>
            <?php
                include "../helper/navBar.php";
                include "../helper/sessionStart.php";

            ?>
        </div>    

        <form action="../helper/add_produktInWarenKorb.php" method="POST">
        <!-- Informationen zu den Aktuellen angeboten-->
        <div class="information">
            <div>
                <span class="info_text01">
                    <p class="inf_text" id="inf_01_lbl"></p>
                </span>
                <img class="img_formation" src="../assets/bilder/astra-radler.jpg" alt="Astra Radler-Bier">
                <br>
                <button name="astra" class="eingabeDerProdukteSyle" >In Warenkorpd</button>
            </div>

            <div>
                <span>
                    <p class="inf_text" id="inf_02_lbl"></p>
                    <img class="img_formation" src="../assets/bilder/canadian.jpg" alt="Canadian Bier">
                </span>
                <br>
                <button name="canadian" class="eingabeDerProdukteSyle">In Warenkorpd</button>
            </div>

            <div>
                <span>
                    <p class="inf_text" id="inf_03_lbl"></p>
                    <img class="img_formation" src="../assets/bilder/faxe-startkbier.jpg" alt="Stark Bier Faxe">
                </span>
                <br>
                <button name="faxe" class="eingabeDerProdukteSyle">In Warenkorpd</button>
            </div>

            <div>
                <span>
                    <p class="inf_text" id="inf_04_lbl"></p>
                    <img class="img_formation" src="../assets/bilder/guinnes.jpg" alt="Guinnes Bier">
                </span>
                <br>
                <button name="guinnes" class="eingabeDerProdukteSyle">In Warenkorpd</button>
            </div>

            <div>
                <span>
                    <p class="inf_text" id="inf_05_lbl"></p>
                    <img class="img_formation" src="../assets/bilder/paulaner-Weizen.jpg" alt="Paulaner Hefe-Weizen">
                </span>
                <br>
                <button name="paulaner" class="eingabeDerProdukteSyle">In Warenkorpd</button>
            </div>

            <div>
                <span>
                    <p class="inf_text" id="inf_06_lbl"></p>
                    <img class="img_formation" src="../assets/bilder/pilsenerUrquell-Pils.jpg" alt="Urquell Pilsener">
                </span>
                <br>
                <button name="urquell" class="eingabeDerProdukteSyle">In Warenkorpd</button>
            </div>
        </div>
        </form>

        
    </body>
</html>