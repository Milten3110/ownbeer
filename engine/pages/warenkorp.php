<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="de">
        <link rel="stylesheet" href="../assets/css/responsiv.css">
    </head>

    <body>
        <!-- Menue -->
        <div>
            <?php
                include "../helper/sessionStart.php";
                include "../helper/navBar.php";

                if(include "../helper/_islogged.php"){
                    echo "<span>" . 'Hier stehen Ihre Produkte drinnen' .  "</span>";
                }
                else{
                    echo "<span>" . 'Sie Sind nicht angemeldet !!' .  "</span>";
                }
            ?>
        </div>
        
        <!-- Warenkorp -->
        <div>

        </div>
        
    </body>
</html>