<?php
include_once("../includes/body.inc.php");
top_admin();
$id = intval($_GET['id']);
$sql="select jogoId from jogos where jogoEquipaCasaId = $id or jogoEquipaForaId=$id order by jogoData desc limit 1";
$res=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($res);
$idJogo=$dados[0];

?>
    <div align="center" style="padding-bottom: 20px;"><h1>Editar Ultimo11</h1></div>
<h3> NOTA: ir buscar o ID do último jogo</h3>
    <div class="container" style=" background-image: url('../images/campo_2.png');width: 1115px; height: 749px">
        <form action="confirmaEdita11.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="jogoId" value="<?php echo $idJogo?>">
            <div class="row">
                <div class="col-md-12" style="padding-bottom: 50px;padding-top: 50px;">

                </div>
            </div>
            <div class="row">

                <div class="col-md-5">

                </div>
                <div class="col-md-2">
                    <select name="guardaRedes">
                        <option value="-1">Escolha o Guarda-Redes...</option>
                        <?php
                         $sql = "select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoCampo='guarda redes' and equipaJogadorEquipaId=$id  order by jogadorNome";
                        $result = mysqli_query($con, $sql);
                        while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $dados['jogadorId'] ?>"><?php echo $dados['jogadorNome'] ?></option>
                            <?php
                        }


                        ?>


                    </select>
                </div>
                <div class="col-md-5">

                </div>
            </div>

            <div class="row">
                <div class="col-md-12" style="padding-bottom: 80px;padding-top: 75px;">

                </div>
            </div>
            <div class="row">
                <div class="col-md-1 mt-4"></div>
                <div class="col-md-2 mt-4">
                    <select name="DefesaEsquerdo">
                        <option value="-1">Escolha o Defesa Esquerdo...</option>
                        <?php
                        $sql = "select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoCampo<>'Guarda redes' and equipaJogadorEquipaId=$id  order by jogadorNome";
                        $result = mysqli_query($con, $sql);
                        while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $dados['jogadorId'] ?>"><?php echo $dados['jogadorNome'] ?></option>
                            <?php
                        }


                        ?>

                    </select>
                </div>

                <div class="col-md-2 mt-4">
                    <select name="DefesaCentralEsquerdo">
                        <option value="-1">Escolha o Defesa Central Esquerdo...</option>
                        <?php
                        mysqli_data_seek($result,0);
                        while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $dados['jogadorId'] ?>"><?php echo $dados['jogadorNome'] ?></option>
                            <?php
                        }


                        ?>

                        </option>

                    </select>
                </div>
                <div class="col-md-2 mt-4">
                    <select name="DefesaCentralCentro">
                        <option value="-1">Escolha o Defesa Central Centro...</option>
                        <?php
                        mysqli_data_seek($result,0);
                        while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $dados['jogadorId'] ?>"><?php echo $dados['jogadorNome'] ?></option>
                            <?php
                        }


                        ?>

                        </option>

                    </select>
                </div>
                <div class="col-md-2 mt-4">
                    <select name="DefesaCentralDireito">
                        <option value="-1">Escolha o Defesa Central Direito...</option>
                        <?php
                        mysqli_data_seek($result,0);
                        while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $dados['jogadorId'] ?>"><?php echo $dados['jogadorNome'] ?></option>
                            <?php
                        }


                        ?>

                        </option>

                    </select>
                </div>
                <div class="col-md-2 mt-4">
                    <select name="DefesaDireito">
                        <option value="-1">Escolha o Defesa Direito...</option>
                        <?php
                        mysqli_data_seek($result,0);
                        while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $dados['jogadorId'] ?>"><?php echo $dados['jogadorNome'] ?></option>
                            <?php
                        }


                        ?>

                        </option>

                    </select>
                </div>

                <div class="col-md-1 mt-4"></div>
            </div>

            <div class="row">
                <div class="col-12" style="padding-bottom: 80px;padding-top: 75px;">

                </div>
            </div>

            <div class="row">

                <div class="col-md-1 mt-4">

                </div>
                <div class="col-md-2 mt-4">
                    <select name="MedioEsquerdo">
                        <option value="-1">Escolha o Medio Esquerdo...</option>
                        <?php
                        mysqli_data_seek($result,0);
                        while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $dados['jogadorId'] ?>"><?php echo $dados['jogadorNome'] ?></option>
                            <?php
                        }


                        ?>

                        </option>

                    </select>
                </div>
                <div class="col-md-2 mt-4">
                    <select name="MedioCentralEsquerdo">
                        <option value="-1">Escolha o Medio Central Esquerdo...</option>
                        <?php
                        mysqli_data_seek($result,0);
                        while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $dados['jogadorId'] ?>"><?php echo $dados['jogadorNome'] ?></option>
                            <?php
                        }


                        ?>

                    </select>
                </div>
                <div class="col-md-2 mt-4">
                    <select name="MedioCentralCentro">
                        <option value="-1">Escolha o Medio Central Centro...</option>
                        <?php
                        mysqli_data_seek($result,0);
                        while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $dados['jogadorId'] ?>"><?php echo $dados['jogadorNome'] ?></option>
                            <?php
                        }


                        ?>

                    </select>
                </div>
                <div class="col-md-2 mt-4">
                    <select name="MedioCentralDireito">
                        <option value="-1">Escolha o Medio Central Direito...</option>
                        <?php
                        mysqli_data_seek($result,0);
                        while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $dados['jogadorId'] ?>"><?php echo $dados['jogadorNome'] ?></option>
                            <?php
                        }


                        ?>

                    </select>
                </div>
                <div class="col-md-2 mt-4">
                    <select name="MedioDireito">
                        <option value="-1">Escolha o Medio Direito...</option>
                        <?php
                        mysqli_data_seek($result,0);
                        while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $dados['jogadorId'] ?>"><?php echo $dados['jogadorNome'] ?></option>
                            <?php
                        }


                        ?>

                    </select>
                </div>

                <div class="col-md-1 mt-4"></div>
            </div>

            <div class="row">
                <div class="col-12" style="padding-bottom: 80px;padding-top: 75px;">

                </div>
            </div>

            <div class="row">
                <div class="col-md-3 mt-4"></div>
                <div class="col-md-2 mt-4">
                    <select name="avancadoEsquerdo">
                        <option value="-1">Escolha o Avançado Esquerdo...</option>
                        <?php
                        mysqli_data_seek($result,0);
                        while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $dados['jogadorId'] ?>"><?php echo $dados['jogadorNome'] ?></option>
                            <?php
                        }


                        ?>

                    </select>
                </div>
                <p></p>
                <div class="col-md-2 mt-4">
                    <select name="avancadoCentro">
                        <option value="-1">Escolha o Avançado Centro...</option>
                        <?php
                        mysqli_data_seek($result,0);
                        while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $dados['jogadorId'] ?>"><?php echo $dados['jogadorNome'] ?></option>
                            <?php
                        }


                        ?>

                    </select>
                </div>

                <div class="col-md-2 mt-4">
                    <select name="avancadoDireito">
                        <option value="-1">Escolha o Avançado Direito...</option>
                        <?php
                        mysqli_data_seek($result,0);
                        while ($dados = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $dados['jogadorId'] ?>"><?php echo $dados['jogadorNome'] ?></option>
                            <?php
                        }


                        ?>

                    </select>
                </div>
                <div class="col-md-3 mt-4"></div>
            </div>
            <div class="row">
            <div class="col-md-12" style="padding-bottom: 35px;padding-top: 30px;">

            </div>
            </div>
            <div align="right">
                <input type="Submit" value="Confirmar"><br>
            </div>
        </form>
    </div>

<?php
bot_admin();
?>