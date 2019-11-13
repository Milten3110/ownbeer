<html>
<head>
    <meta charset="UTF-8">
    <meta lang="de">
</head>


<body>
    <!-- NavBar , auslagern da für die restlichen Seiten == -->
    <div class="navBar">
        <?php
            include "../helper/navBar.php"
        ?>
    </div>

    
    <form action="">
        <!-- Benötigte Informationen zum Regestrieren-->
        <label>Benutzernamen</label>
        <input type="text" placeholder="benutzer">

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

        <!-- Persönliche Informationen -->
        <label>Vornamen
            <input type="text" placeholder="vornamen">
        </label>

        <label>Nachnamen
            <input type="text" placeholder="rufname">
        </label>

        <!-- Geschlecht -->
        <label>Geschlecht
            <select>
                <option value="">Neutral</option>
                <option value="">Männlich</option>
                <option value="">Weiblich</option>
            </select>
        </label>

        <!-- Produktvorlieben -->
        <label>Vorlieben
            <input type="checkbox">
        </label>


    </form>
</body>
</html>