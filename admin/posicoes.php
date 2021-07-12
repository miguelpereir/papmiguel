<?php
include_once("../includes/body.inc.php");
$id=-1;
if(isset($_GET['id']))
    $id=intval($_GET['id']);
top_admin(POSITIONS);
?>
    <input type="hidden" id="idPlantel" value="<?php echo $id?>">
    <section id="contant" class="contant main-heading team">
        <div class="container" align="center">
            <h1>Posições</h1>
            Pesquisar:<br><input type="text" id="search">

            <div id="tableContent">

            </div>
        </div>
    </section>
<?php
bottom_admin(POSICOES);
?>