<?php
    $lblAnmeldenAbmelden;
    $pfadAnmeldenAbmelden;

    //Abfrage ob Angemeldet ist oder nicht
    if(isset($_SESSION['userName']) && $_SESSION['userName'] != ""){
        $pfadAnmeldenAbmelden = '?p=abmelden';
        $lblAnmeldenAbmelden = 'Abmelden';
    }
    else{
        $pfadAnmeldenAbmelden = '?p=anmelden';
        $lblAnmeldenAbmelden = 'Anmelden'; 
    }
         
            echo "div id='navBar'>
                <div>
                    <p id='lblStartseite'> <a href='?p=home'>Home</a></p>
                </div>
    
                <div>
                    <p id='lblEvents'><a href='?p=events'>Events</a></p>
                </div>        
    
                <div>
                    <p id='lblProdukte'><a href='?p=produkte'>Produkte</a></p>
                </div>        
    
                <div>
                    <p id='lblAngebote'><a href='?p=angebote'>Angebote</a></p>
                </div>        
    
                <div>
                    <p id='lblWarenkorb'><a href='?p=warenkorp'>Warenkorb</a></p>
                </div>        
    
                <div>
                    <p id='lblKontackt'><a href='?p=kontackt'>Kontackt</a></p>
                </div>        
    
                <div>
                    <p id='lblAnmelden'>
                        <a href=". $pfadAnmeldenAbmelden ." 
                            >
                            ". $lblAnmeldenAbmelden ."
                        </a>
                    </p>
                </div>
    
                <div>
                    <p id='lblRegestrieren'><a href='?p=regestrieren'>Regestrieren</a></p>
                </div>"
            ;
?>