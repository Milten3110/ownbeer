<!-- NavBars für die Navigationsseiten-->
<!-- todo : variablen für die änderung er pfade-->
<?php
    //  Variable für den Upload zwischen Local und Online
    //  PFAD für WebSpace ownbeer.4lima.de/pages/abmelden.php

    
    //  Startseite 
    $temp = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

    //echo var_dump($_SERVER['HTTP_HOST']);
    //echo var_dump($_SERVER['PHP_SELF']);

    
    //  Nach login die Menue Seiten
    if(isset($_SESSION['userName']) && $_SERVER['PHP_SELF'] != '/ownbeer/engine/index.php'){
        echo "
        <div>
            <a href='../'               >Home</a>
            <a href='events.php'        >Events</a>
            <a href='produkte.php'      >Produkte</a>
            <a href='angebote.php'      >Angebote</a>
            <a href='warenkorp.php'     >Warenkorp</a>
            <a href='kontackt.php'      >Kontackt</a>
            <a href='abmelden.php'      >Abmelden</a>
            <a href='regestrieren.php'  >Regestrieren</a>
            <a href='impressum.php'     >Impressum</a>
        </div>
        ";
        
    }

    //  Startseite
    elseif($_SERVER['PHP_SELF'] === '/ownbeer/engine/index.php'){
        
        if(isset($_SESSION['userName'])){
            echo "
                <div>
                    <a href='./engine/'                        >Home</a>
                    <a href='./pages/events.php'        >Events</a>
                    <a href='./pages/produkte.php'      >Produkte</a>
                    <a href='./pages/angebote.php'      >Angebote</a>
                    <a href='./pages/warenkorp.php'     >Warenkorp</a>
                    <a href='./pages/kontackt.php'      >Kontackt</a>
                    <a href='./pages/abmelden.php'      >Abmelden</a>
                    <a href='./pages/regestrieren.php'  >Regestrieren</a>
                    <a href=''                          >Impressum</a>
                </div>
            ";
        }
        
        //  Nicht Angemeldet auf Startseite
        else{
            echo "
            <div>
                <a href='./'                        >Home</a>
                <a href='./pages/events.php'        >Events</a>
                <a href='./pages/produkte.php'      >Produkte</a>
                <a href='./pages/angebote.php'      >Angebote</a>
                <a href='./pages/warenkorp.php'     >Warenkorp</a>
                <a href='./pages/kontackt.php'      >Kontackt</a>
                <a href='./pages/anmelden.php'      >Anmelden</a>
                <a href='./pages/regestrieren.php'  >Regestrieren</a>
                <a href=''                          >Impressum</a>
            </div>
            ";
        }
    }

    //  Vor Login die Menue Seiten
    else{
        echo "
        <div class='navBar'>
            <a href='../'                       >Home</a>
            <a href='events.php'        >Events</a>
            <a href='produkte.php'      >Produkte</a>
            <a href='angebote.php'      >Angebote</a>
            <a href='warenkorp.php'     >Warenkorp</a>
            <a href='kontackt.php'      >Kontackt</a>
            <a href='anmelden.php'      >Anmelden</a>
            <a href='regestrieren.php'  >Regestrieren</a>
            <a href='impressum.php'     >Impressum</a>
        <div>
        ";
    }

    /** Korrekte Pfade für die OnlineSeite
     * 
     * (<!-- NavBars für die Navigationsseiten-->
     *<!-- todo : variablen für die änderung er pfade-->
     *<?php
     *    //  Variable für den Upload zwischen Local und Online
     *    //  PFAD für WebSpace ownbeer.4lima.de/pages/abmelden.php
     *
     *    
     *    //  Startseite 
     *    $temp = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
     *
     *    //echo var_dump($temp);
     *    
     *    //  Nach login die Menue Seiten
     *    if(isset($_SESSION['userName']) && $temp != 'index.php'){
     *        echo "
     *        <a href='../'               >Home</a>
     *        <a href='events.php'        >Events</a>
     *        <a href='produkte.php'      >Produkte</a>
     *        <a href='angebote.php'      >Angebote</a>
     *        <a href='warenkorp.php'     >Warenkorp</a>
     *        <a href='kontackt.php'      >Kontackt</a>
     *        <a href='abmelden.php'      >Abmelden</a>
     *        <a href='regestrieren.php'  >Regestrieren</a>
     *        <a href='impressum.php'     >Impressum</a>
     *        ";
     *        
     *    }
     *
     *
     *
     *    //  Startseite
     *    elseif($temp == 'index.php'){
     *        
     *        if(isset($_SESSION['userName'])){
     *            echo "
     *                <a href='./engine/'                        >Home</a>
     *                <a href='./pages/events.php'        >Events</a>
     *                <a href='./pages/produkte.php'      >Produkte</a>
     *                <a href='./pages/angebote.php'      >Angebote</a>
     *                <a href='./pages/warenkorp.php'     >Warenkorp</a>
     *                <a href='./pages/kontackt.php'      >Kontackt</a>
     *                <a href='./pages/abmelden.php'      >Abmelden</a>
     *                <a href='./pages/regestrieren.php'  >Regestrieren</a>
     *                <a href=''                          >Impressum</a>
     *            ";
     *        }
     *        
     *        //  Nicht Angemeldet auf Startseite
     *        else{
     *            echo "
     *            <a href=''                        >Home</a>
     *            <a href='./pages/events.php'        >Events</a>
     *            <a href='./pages/produkte.php'      >Produkte</a>
     *            <a href='./pages/angebote.php'      >Angebote</a>
     *            <a href='./pages/warenkorp.php'     >Warenkorp</a>
     *            <a href='./pages/kontackt.php'      >Kontackt</a>
     *            <a href='./pages/anmelden.php'      >Anmelden</a>
     *            <a href='./pages/regestrieren.php'  >Regestrieren</a>
     *            <a href=''                          >Impressum</a>
     *            ";
     *        }
     *    }
     *
     *    //  Vor Login die Menue Seiten
     *    else{
     *        echo "
     *        <a href='../'               >Home</a>
     *        <a href='events.php'        >Events</a>
     *        <a href='produkte.php'      >Produkte</a>
     *        <a href='angebote.php'      >Angebote</a>
     *        <a href='warenkorp.php'     >Warenkorp</a>
     *        <a href='kontackt.php'      >Kontackt</a>
     *        <a href='anmelden.php'      >Anmelden</a>
     *        <a href='regestrieren.php'  >Regestrieren</a>
     *        <a href='impressum.php'     >Impressum</a>
     *        ";
     *    }
     *?>
     *)
     * 
     */

?>


