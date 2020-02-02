<?php
    echo "
        <h1>KontacktFormular</h1>

        <!-- TODO : VALID eingaben-->
        <form action='' method='post'>
            <label>
                Vornamen
                <input name='vorname' type='text' placeholder='vornamen'>
            </label>

            <label>
                Nachnamen
                <input name='nachname' type='text' placeholder='nachnamen'>
            </label>

            <label>
                Beruflich
                <input name='beruflich' id='beruflich' name='bOp' type='radio'>
            </label>
            
            <label>
                Privat
                <input name='private' id='private' name='bOp' type='radio'>
            </label>

            <!-- Name der Firma wen Firma ausgewählt ist-->            
            <label>
                Name der Firma
                <input type='text' placeholder='firmennamen'>
            </label>

            <label>
                Rückruf
                <input type='radio' name='kontacktArt'>
                <input type='text' placeholder='nummer'>
            </label>
            
            <label>
                Email
                <input type='radio' name='kontacktArt'>
                <input type='text' placeholder='email'>
            </label>
            
            <label>
                Brief
                <input type='radio' name='kontacktArt'>
                <input type='text' placeholder='stadt'>
            </label>


            <label>
                Teilen Sie uns bitte Ihr Anliegen mit
                <input type='text' placeholder='Ihr Anliegen'>
            </label>

            <input type='submit' value='Absenden'>
        </form>
    ";
?>