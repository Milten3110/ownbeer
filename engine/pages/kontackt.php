<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="de">
        <title>OwnBeer - Kontacktformular</title>
        <link rel="stylesheet" href="../assets/css/responsiv.css">
    </head>

    <body>
        <!-- NavBar , auslagern da für die restlichen Seiten == -->
        <div class="navBar">
            <?php
                include "../helper/navBar.php"
            ?>
        </div>

        <h1>KontacktFormular</h1>

        <!-- TODO : VALID eingaben-->
        <form action="kontackt2.php" method="post">
            <label>
                Vornamen
                <input name="vorname" type="text" placeholder="vornamen">
            </label>

            <label>
                Nachnamen
                <input name="nachname" type="text" placeholder="nachnamen">
            </label>

            <label>
                Beruflich
                <input name="beruflich" id="beruflich" name="bOp" type="radio">
            </label>
            
            <label>
                Privat
                <input name="private" id="private" name="bOp" type="radio">
            </label>

            <!-- Name der Firma wen Firma ausgewählt ist-->            
            <label>
                Name der Firma
                <input type="text" placeholder="firmennamen">
            </label>

            <input type="submit" value="Weiter">
        </form>
    </body>
</html>