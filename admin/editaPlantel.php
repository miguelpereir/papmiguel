<?php
include_once("../includes/body.inc.php");
top_admin(SQUAD);
$idJog=intval($_GET['idJog']);
$idEq=intval($_GET['idEq']);

$sql = "select * from equipajogadores inner join jogadores on equipaJogadorJogadorId=jogadorId where equipaJogadorJogadorId=$idJog and equipaJogadorEquipaId=$idEq";
$result = mysqli_query($con, $sql);
$dadosPlantel = mysqli_fetch_array($result);
?>
<link href="../css/admin.css" rel="stylesheet">
<section id="contant" class="contant main-heading team">
    <div class="container" align="center">

        <div>
            <h1 align="center">Edita Plantel</h1>
        </div>
        <div class="row" align="left">
            <form action="confirmaEditaPlantel.php" method="post" enctype="multipart/form-data">
                <div class="col-md-11">
                    <a href="plantel.php?id=<?php echo $idEq?>">
                        <button type="button" class="btn btn-black">Back</button>
                    </a>
                </div>
                <div class="col-md-01">
                    <input type="Submit" class="btn btn-primary" value="Edita"><br>
                </div>

                <div class="col-md-1"></div>
                <div class="col-md-5">

                    <input type="hidden" name="jogadorId" value="<?php echo $idJog ?>">
                    <input type="hidden" name="equipaId" value="<?php echo $idEq ?>">
                    <label>Jogador:</label>
                    <input disabled type="text" value="<?php echo $dadosPlantel['jogadorNome'] ?>">

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
