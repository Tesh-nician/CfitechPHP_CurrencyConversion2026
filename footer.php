<?php
include "functions/functionsDate.php";
?>


<div class="footer-container" >
    <div class="box-row">

            <div class="bottom-item"><a href="./index"> Home</a></div>
            <div class="bottom-item"><a href="session_actuelle.php"> Debug</a></div>
            <div class="bottom-item"><a href="reset_sessions.php"> Reset</a></div>
        </div>

    <div class="box-row">
        <div class="bottom-item2"> <?PHP echo date_aujourdhui()   ?></div>
        <div class="bottom-item2"> <?PHP echo time_aujourdhui()   ?></div>
        <div class="bottom-item2">Jonathan Deroo</div>
    </div>

    </div>


</footer>

</div>
</body>
</html>