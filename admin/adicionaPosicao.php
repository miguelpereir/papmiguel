<?php
include_once("../includes/body.inc.php");
top_admin(SQUAD);
$id = -1;
if (isset($_GET['id']))
    $id = intval($_GET['id']);
?>
<link href="../css/admin.css" rel="stylesheet">
<section id="contant" class="contant main-heading team">
    <div class="container" align="center">


        <div>
            <h1 align="center">Adiciona Posição </h1>
        </div>

        <div class="row" align="left">
            <form action="confirmaNovaPosicao.php" method="post" enctype="multipart/form-data">
                <div class="col-md-10">
                    <a href="posicoes.php">
                        <button type="button" class="btn btn-black">Back</button>
                    </a>
                </div>
                <div class="col-md-02">
                    <input type="Submit" class="btn btn-success" value="Adiciona"><br>
                </div>

                <br>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <label>Nome: </label>
                    <input type="text" name="nomePosicao"><br>
                    <br>
                </div>
                <div class="col-md-5">

                    <label>No Campo:</label>
                    <select name="campoPosicao">
                        <option value="-1">Escolha a posicao...</option>
                        <option value="1">Guarda redes</option>
                        <option value="2">Defesa</option>
                        <option value="3">Médio</option>
                        <option value="4">Avançado</option>
                    </select>
                </div>


                <div class="col-md-1"></div>
            </form>
        </div>
    </div>
</section>
<?php
bottom_admin(PLANTEL);
?>
