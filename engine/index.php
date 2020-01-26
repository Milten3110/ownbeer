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
        <?php
            include "./helper/sessionStart.php";
        ?>
        <noscript>
            <h1 class="noJsTxt">Sie verwenden kein JavaScript!</h1>
        </noscript>
    
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

            <!-- Link ändern beim Abmelden-->
            <div>
                <p id="lblAnmelden">
                    <a href= 
                            <?php 
                                if(isset($_SESSION['userName']) && $_SESSION['userName'] != ""){
                                    echo './pages/abmelden.php';
                                }
                                else{
                                    echo './pages/anmelden.php'; 
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
                <p id="lblRegestrieren"><a href="./pages/regestrieren.php">Regestrieren</a></p>
            </div>
        </div>
    
        <!-- Begrüsungstext-->
        <div class="firstInformationText">
            <p>Neuigkeiten</p>
        </div>

        <!-- Informationsanzeige-->
        <div class="cssWraper">
            <div>
                <p>Unser neues produkt ist nun eingetroffen und bereit zum Probieren !</p>
                <p>Durch den Kühlen und herben geschmackt schmeckt es ziemlich herb.</p>
                <p>Aber Probieren Sie es lieber zu etwas Fleisch.</p>
                <img class="imgBox" src="./assets/bilder/astra.jpg" alt="Astra Bier Foto">
            </div>

            <div>
                <p>Ab den 22.02.2022 eröffnet unsere 1 Filialle und dazu begrüßen</p>
                <p>wir alle Interessenten recht Herzlich.</p>
                <p>Kommen Sie doch vorbei und schauen Sie unser Gut an.</p>
            </div>

            <div>
                <p>
                    20.02.2019 <br>
                    et magnis dis parturient montes, nascetur ridiculus 
                    mus. Donec quam felis, ultricies nec, pellentesque 
                    eu, pretium quis, sem. Nulla consequat massa quis 
                    enim. Donec pede justo, fringilla vel, aliquet nec, 
                    vulputate eget, arcu. In enim justo, rhoncus ut, 
                    imperdiet a, venenatis vitae, justo. Nullam dictum 
                    felis eu pede 
                    mollis pretium. Integer tincidunt. Cras dapibus. 
                    Vivamus elementum semper nisi. Aenean vulputate 
                    eleifend tellus. Aenean leo ligula, porttitor eu, 
                    consequat vitae, eleifend ac, enim. Aliquam lorem ante, 
                    dapibus in, viverra quis, feugiat a, tellus. Phasellus 
                    viverra nulla ut metus varius laoreet. Quisque rutrum. 
                    Aenean imperdiet. Etiam ultricies nisi vel augue. 
                    Curabitur ullamcorper ultricies nisi
                </p>               
            </div>
            
            <div>
                <p>
                    15.01.1990 <br>
                    et magnis dis parturient montes, nascetur ridiculus 
                    mus. Donec quam felis, ultricies nec, pellentesque 
                    eu, pretium quis, sem. Nulla consequat massa quis 
                    enim. Donec pede justo, fringilla vel, aliquet nec, 
                    vulputate eget, arcu. In enim justo, rhoncus ut, 
                    imperdiet a, venenatis vitae, justo. Nullam dictum 
                    felis eu pede 
                    mollis pretium. Integer tincidunt. Cras dapibus. 
                    Vivamus elementum semper nisi. Aenean vulputate 
                    eleifend tellus. Aenean leo ligula, porttitor eu, 
                    consequat vitae, eleifend ac, enim. Aliquam lorem ante, 
                    dapibus in, viverra quis, feugiat a, tellus. Phasellus 
                    viverra nulla ut metus varius laoreet. Quisque rutrum. 
                    Aenean imperdiet. Etiam ultricies nisi vel augue. 
                    Curabitur ullamcorper ultricies nisi
                </p>
            </div>

            <div>
                <p>
                    01.01.1990 <br>
                    et magnis dis parturient montes, nascetur ridiculus 
                    mus. Donec quam felis, ultricies nec, pellentesque 
                    eu, pretium quis, sem. Nulla consequat massa quis 
                    enim. Donec pede justo, fringilla vel, aliquet nec, 
                    vulputate eget, arcu. In enim justo, rhoncus ut, 
                    imperdiet a, venenatis vitae, justo. Nullam dictum 
                    felis eu pede 
                    mollis pretium. Integer tincidunt. Cras dapibus. 
                    Vivamus elementum semper nisi. Aenean vulputate 
                    eleifend tellus. Aenean leo ligula, porttitor eu, 
                    consequat vitae, eleifend ac, enim. Aliquam lorem ante, 
                    dapibus in, viverra quis, feugiat a, tellus. Phasellus 
                    viverra nulla ut metus varius laoreet. Quisque rutrum. 
                    Aenean imperdiet. Etiam ultricies nisi vel augue. 
                    Curabitur ullamcorper ultricies nisi
                </p>
            </div>
        </div>





    </body>

    <footer>
        <div>
            <p>Impressum</p>
        </div>
    </footer>
</html>