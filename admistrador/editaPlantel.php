<?php
include_once("../includes/body.inc.php");
top_admin();
$id = intval($_GET['id']);

$sql = "select * from equipajogadores";
$result = mysqli_query($con, $sql);
$resultPlantel = mysqli_query($con, $sql);
$dadosPlantel = mysqli_fetch_array($resultPlantel);

?>
    <div class="container" align="center">

        <div>
            <h1 align="center">Edita treinador </h1>
        </div>
        <div align="left">
            <a href="admin_plantel.php?id=<?php echo $id ?>">
                <button type="button" class="btn btn-success">Back</button>
            </a>
        </div>
        <div align="left">
            <br>
            <form action="confirmaEditaTreinador.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="equipaId" value="<?php echo $id ?>">
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
                <br>
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
                <br>
                <label>Nome: </label>
                <input type="text" name="jogadorNumero" value="<?php echo $dadosPlantel['equipaJogadorNumero'] ?>"><br>

                <input type="Submit" value="Edita"><br>
            </form>
        </div>
    </div>
<?php
bot_admin();
?>