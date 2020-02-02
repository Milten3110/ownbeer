<!-- Warenkorp -->
<!-- Tabelle -->
<?php
    include 'helper/db_conn.php';
    
    $conn =  openDatabaseConnection();
    $gesamtPreis = 0;
    $result = $conn->query("select * from product");
    $MAXPRODUKTE = $result->num_rows;
    
    //$row = $result->fetch_object();
    //echo var_dump($row);
    
    //  TODO mit der Datenbank Syncronosieren
    $pNameArray = ['Astra','Guinnes','Faxe','Paulaner','Urquell','Canadian'];
    
    if(!isset($_SESSION['userName']) && @$_SESSION['userName'] == ""){
        echo "<h2 class='txtNichtangemeldet'>Sie sind nicht Angemeldet, melden Sie sich an!</h2>";
    }
    
    else{
        //
        echo "<div class='warenkorb'>";
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
                                <button name='del".$row->pName."'>One Del</button> 
                            </form>
                        </td>
                    </tr>";
                    if(array_key_exists('add'. $row->pName, @$_POST)) { 
                        @$_SESSION[$row->pName] += 1;
                        header('Location:warenkorp.php');
                    } 
                    else if(array_key_exists('del'.$row->pName,@$_POST)){
                        if(@$_SESSION[$row->pName] > 0){
                            @$_SESSION[$row->pName] -=1;
                            header('Location: warenkorp.php');
                        }
                    }
                } 
                @$gesamtPreis += ($row->price * $_SESSION[$row->pName]); 
            }

        echo "
            <tr>
            <td></td><td></td><td></td><td> Alles zusammen </td><td>". $gesamtPreis . " €</td>
            </tr>
            </table>
        
        </div>";
    }
?>