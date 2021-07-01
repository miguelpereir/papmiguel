<?php
include_once("../includes/body.inc.php");
top_admin();
//$txt = addslashes($_POST['txt']);
$sql = "Select * from treinadores inner join equipas on treinadorEquipaID=equipaID ";

$result = mysqli_query($con, $sql);
?>

<div class="container" align="center">
    <h1>Lista dos Treinadores</h1>

    Pesquisar:<br><input type="text" id="search">
    <div class="row">
        <div class="col-md-11" align='left'>
            <a  class='btn btn-primary' href="admin_equipas.php"><i class='fas fa-arrow-left' > Back</i></a>
        </div>
        <div class="1"  align='left'>
            <a class='btn btn-success' href="adicionar_treinadores.php"><i > Adiciona</i></a>
        </div>
    </div>
    <div id="tableContent">

    </div>

</div>
<?php

bot_admin(TREINADORES);
?>