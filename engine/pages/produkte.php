<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="de">
        <title>OwnBeer - Produkte</title>
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
                <p id="lblEvents"><a href="events.php">Events</a></p>
            </div>        

            <div>
                <p id="lblProdukte"><a href="">Produkte</a></p>
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
        
        <!--../helper/add_produktInWarenKorb.php -->
        <form action="" method="POST">
        
        <!-- Informationen zu den Aktuellen angeboten-->
            <?php
                include "../helper/db_conn.php";
                include "../helper/addDel_produktInWarenKorb.php";

                $db = openDatabaseConnection();
                $result = $db->query("select * from product");
                
                echo "<div class='information'>";
                for($index = 0; $index < $result->num_rows; ++$index){
                    $row = $result->fetch_object();            
                    echo "
                        <div class='produktBox'>
                            <span>
                                <p id='inf_" . $row->pName . "_lbl', class='inf_text'></p>
                                <img class='img_formation' src='../assets/bilder/". $row->pName .".jpg' alt='Stark Bier Faxe'>
                                <noscript><button name='". $row->pName . "' class='btmInWarenKorb'>Kaufen</button></noscript>
                            </span>
                        </div>";
                }
                echo "</div>";

                $result->free_result();

                //  Produkte Hinzufügen und auf der Seite Bleiebn
                if(array_key_exists('guinnes', $_POST)) { 
                    //call function 
                    addProdukt('guinnes');
                } 
                else if(array_key_exists('astra', $_POST)) { 
                    addProdukt('astra');
                }
                else if(array_key_exists('faxe', $_POST)) { 
                    addProdukt('faxe');
                }
                else if(array_key_exists('urquell', $_POST)) { 
                    addProdukt('urquell');
                }
                else if(array_key_exists('paulaner', $_POST)) { 
                    addProdukt('paulaner');
                }
                else if(array_key_exists('canadian', $_POST)) { 
                    addProdukt('canadian');
                }
            ?>

        </form>
        
    </body>


    <footer>
        <div>
            <p>Impressum</p>
        </div>
    </footer>
</html>