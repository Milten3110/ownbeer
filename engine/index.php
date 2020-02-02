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
        <!-- Session -->
        <?php
            include "helper/sessionStart.php";
        ?>

        <noscript>
            <h3 class="noJsTxt">Sie verwenden kein JavaScript!</h3>
        </noscript>
    
        <!-- NavBar-->
        <div id="navBar">
            <?php
                include "helper/navBar.php";
            ?>
        </div>
        
        <!-- Routing Berreich-->
        <!-- Durch die umstrukturierung von href"page auf dynamisch mittels GET sind einige Design fehler vorhanden-->
        <!-- TODO: design fehler logik ausbessern-->
        <div>
            <?php
                if(isset($_GET['p'])){

                    switch ($_GET['p']) {
                        case 'home':
                            include "pages/information.php";
                            break;
                        case 'produkte':
                            include "./pages/produkte.php";
                            # code...
                            break;
                        case 'warenkorp':
                            include "./pages/warenkorp.php";
                            break;
                        case 'anmelden':
                            include "./pages/anmelden.php";
                            break;
                        case 'abmelden':
                            include "./pages/abmelden.php";
                            break;
                        case 'regestrieren':
                            include "./pages/regestrieren.php";
                            break;
                        case 'kontackt':
                            include "./pages/kontackt.php";
                            break;
                        case 'events':
                            include "./pages/events.php";
                            break;
                        case 'angebote':
                            include "./pages/angebote.php";
                            break;
                        case 'docu':
                        break;
                        default:
                            //  404 Fehler Seite
                            # code...
                            include "./pages/error_404.php";
                            break;
                    }
                }
                else{
                    //default, start auf engine
                    header("Location: ?p=home");
                }
            ?>
        </div>
    </body>

    <footer>
        <div>
            <p>Impressum</p>
        </div>
    </footer>
</html>