<?php
include_once("../includes/body.inc.php");
top_admin();
?>
    <div class="container" align="center">
            <h1>Admin </h1>
        <a href="admin_equipas.php"><button type="button" class="btn btn-success">Equipas</button></a>
        <a href="admin_noticias.php"><button type="button" class="btn btn-success">Noticias</button></a>
        <a href="admin_paises.php"><button type="button" class="btn btn-success">Paises</button></a>
        <a href="admin_jogadores.php"><button type="button" class="btn btn-success">Jodadores</button></a>
        <a href="admin_posicoes.php"><button type="button" class="btn btn-success">Posições</button></a>
        <a href="admin_treinadores.php"><button type="button" class="btn btn-success">Treinadores</button></a>
        <a href="admin_plantel.php"><button type="button" class="btn btn-success">Plantel</button></a>
        <a href="admin_ultimo11.php"><button type="button" class="btn btn-success">Ultimo 11</button></a>

    </div>
<?php
bot_admin();
?>