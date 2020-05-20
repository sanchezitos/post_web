<?php
session_start();
?>
<html>
    <h1>Eliminar cuenta</h1>
    <div class="letra"><b><i>Atención!!</i></b> Si elimina su cuenta, no podrá recuperarla después.</div>
    <br>
    <div id="elm" >
    <div class="panel panel-default">
        <div class="panel-body">
            <center>
                <form action="elm_perf.php" method="post">
                    <label>Está a punto de eliminar su cuenta ¿Está seguro?</label>
                    <input type="submit" value="Si, estoy seguro">
                    <input type="button" Onclick="location.href='index.php'" value="Mejor no">
                </form>
            </center>
        </div>
    </div>
    </div>
</html>
