<!-- TODO -->
<!-- Kontackt Mit Session über Mehrere Seiten validieren -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="de">
        <title>OwnBeer - Kontacktformular</title>
        <link rel="stylesheet" href="../assets/css/responsiv.css">

        <?php
        include_once "../helper/sessionStart.php"
        ?>
    </head>

    <body>
        <!-- NavBar , auslagern da für die restlichen Seiten == -->
        <div class="navBar">
            <?php
            ?>
        </div>

        <h1>KontacktFormular-Jetz TestSeite</h1>

        <?php
            include "../helper/db_conn.php";
            $db = openDatabaseConnection();
            $result = $db->query("select * from product");
            
            //echo var_dump($result) . "<br>";

            echo "<div class='information'>";
            for($index = 0; $index < $result->num_rows; ++$index){
                $row = $result->fetch_object();
                
                //echo $row->pName . "<br>";
                echo "
                
                    <div class='produktBox'>
                        <span>
                            <p id='inf_" . $row->pName . "_lbl', class='inf_text'></p>
                            <img class='img_formation' src='../assets/bilder/". $row->pName .".jpg' alt='Stark Bier Faxe'>
                        </span>
                    </div>";
            }

            echo "</div>";
            
            

            
        ?>
    </body>
</html>