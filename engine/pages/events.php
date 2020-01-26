<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="de">
        <title>OwnBeer - Events</title>
        <link rel="stylesheet" href="../assets/css/responsiv.css">
    </head>

    <body>  
        <?php
            include "../helper/sessionStart.php";
        ?>

        <noscript>
            <h1 class="noJsTxt">Sie verwenden kein JavaScript!</h1>
        </noscript>
        


        <!-- NavBar-->
        <div id="navBar">
            <div>
                <p id="lblStartseite"><a href="../index.php">Startseite</a></p>
            </div>

            <div>
                <p id="lblEvents"><a href="">Events</a></p>
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

        
        Events
    </body>

    <footer>
        <div>
            <p>Impressum</p>
        </div>
    </footer>
</html>