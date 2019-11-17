<!-- TODO -->
<!-- Kontackt Mit Session über Mehrere Seiten validieren -->
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
        <form action="" method="post">

            <?php
                if(strlen($_POST['nachname']) > 0){
                    echo 'Wie wünschen Sie Herr ' . $_POST['nachname'] . ' den Kontackt ?';
                }
                else{
                    echo 'Einige angaben auf der Vorhergehenden Kontacktseite wurden nicht eingetragen !';
                }
            ?>

            <label>
                Rückruf
                <input type="radio" name="kontacktArt">
                <input type="text" placeholder="nummer">
            </label>
            
            <label>
                Email
                <input type="radio" name="kontacktArt">
                <input type="text" placeholder="email">
            </label>
            
            <label>
                Brief
                <input type="radio" name="kontacktArt">
                <input type="text" placeholder="stadt">
            </label>


            <label>
                Teilen Sie uns bitte Ihr Anliegen mit
                <input type="text" placeholder="Ihr Anliegen">
            </label>

            <input type="submit" value="Senden">
        </form>
    </body>
</html>