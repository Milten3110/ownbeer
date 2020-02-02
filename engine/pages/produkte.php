<?php
    //  TODO: Aufgrund der Änderungen muss die funktionalität der produktkaufes geändert werden
    //  Erweiterte Interaktion mit der Datenbank notwendig
    
    include "helper/db_conn.php";
    include "helper/addDel_produktInWarenKorb.php";

    if (isset($_POST["kaufen"][0])) {
        addProdukt($_POST["kaufen"]);
    }

    $db = openDatabaseConnection();
    $result = $db->query("select * from product");

    echo "<form action='' method='POST'>";

    //<input name='id_".$row->pName ."' type='hidden' value=". $row->id ." >
    //<noscript><button name='" . $row->pName . "' class='btmInWarenKorb'>Kaufen</button></noscript>
    // KEY informationen beim Abfragen Herr Kruse Fragen
    //TODO: KeyValue als String
    echo "<div class='information'>";
    for ($index = 0; $index < $result->num_rows; ++$index) {
        $row = $result->fetch_object();
        echo "
                        <div class='produktBox' >
                            <span>
                                <p id='inf_" . $row->pName . "_lbl', class='inf_text'></p> 
                                <img class='img_formation' src='assets/bilder/" . $row->pName . ".jpg' alt='Stark Bier Faxe'>
                                
                                
                                <noscript><button name='kaufen[" . $index . "]' class='btmInWarenKorb'>Kaufen</button></noscript>
                            </span>
                        </div>";
    }
    echo "</div>";

    $result->free_result();
?>