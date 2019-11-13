<html>
<head>
    <meta charset="UTF-8">
    <meta lang="de">
    <!-- Responsiv -->
    <link rel="stylesheet" href="../assets/css/responsiv.css">
    <title>Regestrieren</title>
</head>


<body>
    <!-- NavBar , auslagern da für die restlichen Seiten == -->
    <div class="navBar">
        <?php
            include "../helper/navBar.php"
        ?>
    </div>


    <form action="../helper/_regest.php" method="post">
        <!-- Benötigte Informationen zum Regestrieren-->
        <label>Benutzernamen</label>
        <input name="userName" type="text" placeholder="0">

        <label>Passwort
        <input type="password" placeholder="passwort">
        </label>
        <label>Passwort wiederholen
            <input type="password" placeholder="passwort">
        </label>

        <label>Email Adresse
            <input type="text" placeholder="email">
        </label>
        <label>Email Adresse wiederholen
            <input type="text" placeholder="email">
        </label>

      <br> <br> <br>

        <!-- Persönliche Informationen -->
        <label>Vornamen
            <input type="text" placeholder="vornamen">
        </label>

        <label>Nachnamen
            <input type="text" placeholder="rufname">
        </label>

        <br> <br> <br>

        <!-- Geschlecht -->
        <label>Geschlecht
            <select>
                <option value="">Neutral</option>
                <option value="">Männlich</option>
                <option value="">Weiblich</option>
            </select>
        </label>

        <br> <br> <br>
        <!-- Produktvorlieben -->
        <div>
            <Span>Vorlieben</Span>

            <br>
            
            <label>
                <input type="checkbox"> Starkbier
                <input type="checkbox"> Weißbier
                <input type="checkbox"> Kellerbier
            </label>
            
            <label>
                <input type="checkbox"> Fassbier
                <input type="checkbox"> Pils
                <input type="checkbox"> Dunkelbier
            </lable>
                
            <label>
                <input type="checkbox"> Weizenbier
                <input type="checkbox"> Festbier
                <input type="checkbox"> Mixery Bier
            </label>
        </div>


        <!-- Regestrierung abschicken -->
        <input type="submit">
    </form>
</body>
</html>