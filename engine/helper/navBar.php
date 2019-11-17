<!-- NavBars für die Navigationsseiten-->

<?php
    //  Startseite 
    $temp = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

    //  Nach login die Menue Seiten
    if(isset($_SESSION['userName']) && $temp != 'localhost/ownbeer/engine/index.php'){
        echo "
        <a href='../'               >Home</a>
        <a href='events.php'        >Events</a>
        <a href='produkte.php'      >Produkte</a>
        <a href='angebote.php'      >Angebote</a>
        <a href='warenkorp.php'     >Warenkorp</a>
        <a href='kontackt.php'      >Kontackt</a>
        <a href='abmelden.php'      >Abmelden</a>
        <a href='regestrieren.php'  >Regestrieren</a>
        <a href='impressum.php'     >Impressum</a>
        ";
        
    }

    //  Startseite
    elseif($temp == 'localhost/ownbeer/engine/index.php'){
        
        if(isset($_SESSION['userName'])){
            echo "
                <a href=''                        >Home</a>
                <a href='./pages/events.php'        >Eventss</a>
                <a href='./pages/produkte.php'      >Produkte</a>
                <a href='./pages/angebote.php'      >Angebote</a>
                <a href='./pages/warenkorp.php'     >Warenkorp</a>
                <a href='./pages/kontackt.php'      >Kontackt</a>
                <a href='./pages/abmelden.php'      >Abmelden</a>
                <a href='./pages/regestrieren.php'  >Regestrieren</a>
                <a href=''                          >Impressum</a>
            ";
        }
        else{
            echo "
            <a href=''                        >Home</a>
            <a href='./pages/events.php'        >Eventss</a>
            <a href='./pages/produkte.php'      >Produkte</a>
            <a href='./pages/angebote.php'      >Angebote</a>
            <a href='./pages/warenkorp.php'     >Warenkorp</a>
            <a href='./pages/kontackt.php'      >Kontackt</a>
            <a href='./pages/anmelden.php'      >Anmelden</a>
            <a href='./pages/regestrieren.php'  >Regestrieren</a>
            <a href=''                          >Impressum</a>
            ";
            echo "<br> startseite";
        }
    }

    //  Vor Login die Menue Seiten
    else{
        echo "
        <a href='../'               >Home</a>
        <a href='events.php'        >Events</a>
        <a href='produkte.php'      >Produkte</a>
        <a href='angebote.php'      >Angebote</a>
        <a href='warenkorp.php'     >Warenkorp</a>
        <a href='kontackt.php'      >Kontackt</a>
        <a href='anmelden.php'      >Anmelden</a>
        <a href='regestrieren.php'  >Regestrieren</a>
        <a href='impressum.php'     >Impressum</a>
        ";
    }

    //echo var_dump($_SESSION['userName']);
?>
