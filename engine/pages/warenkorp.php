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
            include "../helper/db_conn.php";
            
            $conn =  openDatabaseConnection();
            $gesamtPreis = 0;
            $result = $conn->query("select * from product");
            $MAXPRODUKTE = $result->num_rows;
            
            //$row = $result->fetch_object();
            //echo var_dump($row);

            //  TODO mit der Datenbank Syncronosieren
            $pNameArray = ['Astra','Guinnes','Faxe','Paulaner','Urquell','Canadian'];

            if(!isset($_SESSION['userName']) && $_SESSION['userName'] == ""){
                echo "<h2 class='txtNichtangemeldet'>Sie sind nicht Angemeldet, melden Sie sich an!</h2>";
            }
            
            else{
                //

                echo  "<table class='tableWarenKorp'>
                    <tr>
                        <th> Produkt Name </th>
                        <th> Preis </th>
                        <th> Anzahl </th>
                        <th> Gesamtpreis </th>
                        <th> Optionen </th>
                    </tr>
                        ";
                    
                        //  Auslese vom Result & DB
                    for($index = 0; $index < $MAXPRODUKTE; ++$index){
                        $row = $result->fetch_object();
                        if(@$_SESSION[$row->pName] > 0){
                            echo "
                                <tr><td>". $row->pName ."</td>
                                    <td>". $row->price ." €</td>
                                    <td>". $_SESSION[$row->pName]."</td>
                                    <td>". ($row->price * $_SESSION[$row->pName])." €</td>
                                    <td> 
                                        <form action='#' method='POST'>
                                            <button name='add".$row->pName."'>One Add</button> 
                                            <button name='del'>One Del</button> 
                                        </form>
                                    </td>
                                </tr>";

                                if(array_key_exists('add'. $row->pName, @$_POST)) { 
                                    //call function 
                                    if(@$_SESSION[$row->pName] > 0){
                                        @$_SESSION[$row->pName] += 1;
                                        header('Location:warenkorp.php');
                                    }
                                } 
                            } 
                            @$gesamtPreis += ($row->price * $_SESSION[$row->pName]); 
                        }
                    }
                    echo "
                        <tr>
                        <td></td><td></td><td></td><td> Alles zusammen </td><td>". $gesamtPreis . " €</td>
                        </tr>
                        </table>
                    ";
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