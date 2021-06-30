<?php
include_once("../includes/body.inc.php");
top_admin();
//$txt = addslashes($_POST['txt']);
//$sql = "Select * from equipas ";

//$result = mysqli_query($con, $sql);

?>


    <div class="container" align="center">
        <h1>Lista das Equipas</h1>
        Pesquisar:<br><input  type="text" id="search">
        <div class="row">
            <div class="col-md-12 " align="right">
                <a href="admin_treinadores.php"><i class='btn btn-warning'> Treinadores</i></a>
                <a href="adicionar_equipas.php"><i class='btn btn-success'> Adiciona</i></a>
            </div>
    </div>
        <div id="tableContent">

        </div>
    </div>
<?php
bot_admin(EQUIPAS);
?>



