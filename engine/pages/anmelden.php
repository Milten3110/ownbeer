<html>
<head>
    <?php
        include_once "../helper/sessionStart.php"
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
            include "../helper/navBar.php"
        ?>
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

</html>