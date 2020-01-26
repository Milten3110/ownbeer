<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="de">
        <link rel="stylesheet" href="../assets/css/responsiv.css">
    </head>

    <body>
        <?php
            include "../helper/sessionStart.php";
        ?>

        <noscript>
            <h1 class="noJsTxt">Sie verwenden kein JavaScript!</h1>
        </noscript>

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


        
        <!-- Warenkorp -->
        <!-- Tabelle -->
        <div class="warenkorb">
            <!-- Php For aufgbauend-->
            <?php
            if(!isset($_SESSION['userName']) && $_SESSION['userName'] == ""){
                echo "<h2 class='txtNichtangemeldet'>Sie sind nicht Angemeldet, melden Sie sich an!</h2>";
            }
            
            else{
                echo  "<table class='tableWarenKorp'>
                    <tr>
                        <th> Produkte </th>
                        <th> Preis </th>
                        <th> Anzahl </th>
                        <th> Gesamtpreis </th>
                        <th> Optionen </th>
                    </tr>
                        ";

                    for($index = 0; $index < 10; ++$index){
                         echo "<tr><td>" . $index . "</td></tr>";
                        }  
                    echo "</table>";
                }
            ?>

        </div>
        

        <p>kaufen</p>
    </body>


    <footer>
        <div>
            <p>Impressum</p>
        </div>
    </footer>
</html>