<?php
include_once("../includes/body.inc.php");
top_admin();
$id=intval($_GET['id']);
?>
    <div align="center" style="padding-bottom: 20px;"><h1>Editar Ultimo11</h1></div>
    <div class="container">
        <form action="view.php" method="post" enctype="multipart/form-data">
        <div class="row">

            <div class="col-md-5">

            </div>
            <div class="col-md-2">
                <select name="guardaRedes">
                    <option value="-1">Escolha o Guarda-Redes...</option>
                    <?php
                    $sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoCampo='guarda redes' and equipaJogadorEquipaId=$id  order by jogadorNome";
                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
                        <?php
                    }


                    ?>


                    </option>
                </select>
            </div>
            <div class="col-md-5">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-bottom: 30px;padding-top: 30px;">

            </div>

            <div class="col-md-1 mt-4">

            </div>
            <div class="col-md-2 mt-4">
                <select name="DefesaEsquerdo">
                    <option value="-1">Escolha o Defesa Esquerdo...</option>
                    <?php
                    $sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoNome='Defesa Esquerdo' and equipaJogadorEquipaId=$id  order by jogadorNome";
                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
                        <?php
                    }


                    ?>

                </select>
            </div>
            <div class="col-md-2 mt-4">
                <select name="DefesaCentralEsquerdo">
                    <option value="-1">Escolha o Defesa Central Esquerdo...</option>
                    <?php
                    $sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoNome='Defesa Central Esquerdo' and equipaJogadorEquipaId=$id  order by jogadorNome";
                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
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
                    $sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoNome='Defesa Central Centro' and equipaJogadorEquipaId=$id  order by jogadorNome";
                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
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
                    $sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoNome='Defesa Central Direito' and equipaJogadorEquipaId=$id  order by jogadorNome";
                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
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
                    $sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoNome='Defesa Direito' and equipaJogadorEquipaId=$id  order by jogadorNome";
                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
                        <?php
                    }


                    ?>

                    </option>

                </select>
            </div>

            <div class="col-md-1 mt-4"></div>
        </div>

        <div class="col-12" style="padding-bottom: 30px;padding-top: 30px;">

        </div>

        <div class="row">

            <div class="col-md-1 mt-4">

            </div>
            <div class="col-md-2 mt-4">
                <select name="MedioEsquerdo">
                    <option value="-1">Escolha o Medio Esquerdo...</option>
                    <?php
                    $sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoNome='Medio Esquerdo' and equipaJogadorEquipaId=$id  order by jogadorNome";
                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
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
                    $sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoNome='Medio Central Esquerdo' and equipaJogadorEquipaId=$id  order by jogadorNome";
                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
                        <?php
                    }


                    ?>

                </select>
            </div>
            <div class="col-md-2 mt-4">
                <select name="MedioCentralCentro">
                    <option value="-1">Escolha o Medio Central Centro...</option>
                    <?php
                    $sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoNome='Medio Central Centro' and equipaJogadorEquipaId=$id  order by jogadorNome";
                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
                        <?php
                    }


                    ?>

                </select>
            </div>
            <div class="col-md-2 mt-4">
                <select name="MedioCentralDireito">
                    <option value="-1">Escolha o Medio Central Direito...</option>
                    <?php
                    $sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoNome='Medio Central Direito' and equipaJogadorEquipaId=$id  order by jogadorNome";
                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
                        <?php
                    }


                    ?>

                </select>
            </div>
            <div class="col-md-2 mt-4">
                <select name="MedioDireito">
                    <option value="-1">Escolha o Medio Direito...</option>
                    <?php
                    $sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoNome='Medio Direito' and equipaJogadorEquipaId=$id  order by jogadorNome";
                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
                        <?php
                    }


                    ?>

                </select>
            </div>

            <div class="col-md-1 mt-4"></div>
        </div>

        <div class="col-12" style="padding-bottom: 30px;padding-top: 30px;">

        </div>

        <div class="row">
            <div class="col-md-3 mt-4"></div>
            <div class="col-md-2 mt-4">
                <select name="avancadoEsquerdo">
                    <option value="-1">Escolha o Avançado Esquerdo...</option>
                    <?php
                    $sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoNome='Avançado Esquerdo' and equipaJogadorEquipaId=$id  order by jogadorNome";
                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
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
                    $sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoNome='Avançado Centro' and equipaJogadorEquipaId=$id  order by jogadorNome";
                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
                        <?php
                    }


                    ?>

                </select>
            </div>

            <div class="col-md-2 mt-4">
                <select name="avancadoDireito">
                    <option value="-1">Escolha o Avançado Direito...</option>
                    <?php
                    $sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoNome='Avançado Direito' and equipaJogadorEquipaId=$id  order by jogadorNome";
                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
                        <?php
                    }


                    ?>

                </select>
            </div>
            <div class="col-md-3 mt-4"></div>
        </div>
        <div class="col-12" style="padding-bottom: 30px;padding-top: 30px;">

        </div>
        <div align="right">
            <input type="Submit" value="Confirmar"><br>
        </div>
    </div>
<?php
bot_admin();
?>