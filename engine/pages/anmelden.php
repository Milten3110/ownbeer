<html>
<head>
    <?php
        include "../helper/sessionStart.php"
    ?>
    
    <meta charset="UTF-8">
    <meta lang="de">
    <!-- Responsiv Abfrage -->
    <link rel="stylesheet" href="../assets/css/responsiv.css">
</head>

<body>
    <!-- NavBar , auslagern da für die restlichen Seiten == -->
    <div class="navBar">
        <?php
        ?>
    </div>

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
            <p id="lblWarenkorb"><a href="warenkorp.php">Warenkorb</a></p>
        </div>        
        
        <div>
            <p id="lblKontackt"><a href="kontackt.php">Kontackt</a></p>
        </div>        
        
        <div>
            <p id="lblAnmelden"><a href="">Anmelden</a></p>
        </div>

        <div>
            <p id="lblRegestrieren"><a href="regestrieren.php">Regestrieren</a></p>
        </div>
    </div>



    <div>
        <!-- Form Anmeldung, valid in _anmeld.php -->
        <form action="../helper/_anmeld.php" method="post">
            <label>
                Benutzernamen:
                <input type="text" name="username" placeholder="benutzernamen">
            </label>

            <label>
                Password:
                <input name ="userpw" type="password">
            </label>

            <input type="submit" value="Anmelden">
        </form>
    </div>
    

</body>

<footer>
        <div>
            <p>Impressum</p>
        </div>
    </footer>
</html>