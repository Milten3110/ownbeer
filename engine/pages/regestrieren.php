<html>
<head>
    <meta charset="UTF-8">
    <meta lang="de">
    <!-- Responsiv -->
    <link rel="stylesheet" href="../assets/css/responsiv.css">
    <title>Regestrieren</title>

    <?php
        include_once "../helper/sessionStart.php"
    ?>
    
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
            <input type="password" name="userPw1" placeholder="passwort">
        </label>
        <label>Passwort wiederholen
            <input type="password" name="userPw2" placeholder="passwort">
        </label>

        <label>Email Adresse
            <input type="text" name="userEmail1" placeholder="email">
        </label>
        <label>Email Adresse wiederholen
            <input type="text" name="userEmail2" placeholder="email">
        </label>

      <br> <br> <br>

        <!-- Persönliche Informationen -->
        <label>Vornamen
            <input type="text" name="vorname" placeholder="vornamen">
        </label>

        <label>Nachnamen
            <input type="text" name="nachname" placeholder="rufname">
        </label>

        <br> <br> <br>

        <!-- Geschlecht -->
        <label>Geschlecht
            <select name="geschlecht">
                <option value="1"     >Neutral</option>
                <option value="1"    >Männlich</option>
                <option value="1"    >Weiblich</option>
            </select>
        </label>

        <br> <br> <br>
        <!-- Produktvorlieben -->
        <div>
            <Span>Vorlieben</Span>

            <br>
            
            <label>
                <input type="checkbox" name="stark"> Starkbier
            </label>
            <label>
                <input type="checkbox" name="weiss"> Weißbier
            </label>
                <input type="checkbox" name="keller"> Kellerbier
            </label>
            
            <label>
                <input type="checkbox" name="fass"> Fassbier
            </label>
            
            <label>
                <input type="checkbox" name="pils"> Pils
            </label>
            <label>
                <input type="checkbox" name="dunkel"> Dunkelbier
            </lable>
                
            <label>
                <input type="checkbox" name="weizen"> Weizenbier
            </label>

            <label>        
                <input type="checkbox" name="fest"> Festbier
            </label>
            
            <label>       
                <input type="checkbox" name="mixery"> Mixery Bier
            </label>
        </div>


        <!-- Regestrierung abschicken -->
        <input type="submit">
    </form>
</body>
</html>