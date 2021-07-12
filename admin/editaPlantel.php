<?php
include_once("../includes/body.inc.php");
top_admin(COUNTRYS);
$id=-1;
if(isset($_GET['id']))
    $id=intval($_GET['id']);

$sql = "select * from equipajogadores";
$result = mysqli_query($con, $sql);
$resultPlantel = mysqli_query($con, $sql);
$dadosPlantel = mysqli_fetch_array($resultPlantel);
?>
<link href="../css/admin.css" rel="stylesheet">
<section id="contant" class="contant main-heading team">
    <div class="container" align="center">

        <div>
            <h1 align="center">Edita Pais </h1>
        </div>
        <div class="row" align="left">
            <form action="confirmaEditaPlantel.php" method="post" enctype="multipart/form-data">
                <div class="col-md-11">
                    <a href="plantel.php?id=<?php echo $id?>">
                        <button type="button" class="btn btn-black">Back</button>
                    </a>
                </div>
                <div class="col-md-01">
                    <input type="Submit" class="btn btn-primary" value="Edita"><br>
                </div>

                <div class="col-md-1"></div>
                <div class="col-md-5">

                    <input type="hidden" name="paisId" value="<?php echo $id ?>">
                    <label>Jogador:</label>
                    <select name="jogador">
                        <option value="-1">Escolha o jogador...</option>
                        <?php
                        $sql = "select * from jogadores order by jogadorNome";
                        $resultJogadores = mysqli_query($con, $sql);
                        while ($dadosJogadores = mysqli_fetch_array($resultJogadores)) {
                            ?>
                            <option value="<?php echo $dadosJogadores['jogadorId'] ?>"
                                <?php
                                if ($dadosPlantel['equipaJogadorJogadorId'] == $dadosJogadores['jogadorId'])
                                    echo " selected ";
                                ?>
                            >
                                <?php echo $dadosJogadores['jogadorNome'] ?>
                            </option>
                            <?php
                        }


                        ?>
                    </select>

                </div>

                <div class="col-md-5">
                    <label>Posição</label>
                    <select name="posicao">
                        <option value="-1">Escolha o Posicao...</option>
                        <?php
                        $sql = "select * from posicoes order by posicaoNome";
                        $resultPosicoes = mysqli_query($con, $sql);
                        while ($dadosPosicoes = mysqli_fetch_array($resultPosicoes)) {
                            ?>
                            <option value="<?php echo $dadosPosicoes['posicaoId'] ?>"
                                <?php
                                if ($dadosPlantel['equipaJogadorPosicaoId'] == $dadosPosicoes['posicaoId'])
                                    echo " selected ";
                                ?>
                            >
                                <?php echo $dadosPosicoes['posicaoNome'] ?>
                            </option>
                            <?php
                        }


                        ?>
                    </select>
                </div>

                <div class="col-md-1"></div>
                <label>Numero: </label>
                <input type="text" name="numeroJogador" value="<?php echo $dadosPlantel['equipaJogadorNumero'] ?>"><br>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
bottom_admin();
?>
