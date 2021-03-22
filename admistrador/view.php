<?php
include_once("../includes/body.inc.php");
top_admin();
$sql="select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  where posicaoCampo='guarda redes' and equipaJogadorEquipaId=$id  order by jogadorNome";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
    <div class="container" align="center">
        <h1>Sporting</h1>
        <div class="campo" >
            <div class="guardaRedes" >
                <img class="plantel" src="../<?php echo $dados['jogadorFotoURL'] ?>" width="80">
                <br>
                <?php echo $dados['jogadorNome'] ?>
            </div>
            <!--
            <div class="defesaDireito">
                <img class="plantel" src="equipas/scp/porro.jpg" width="80">
            </div>
            -->
            <div class="defesaCentralDireito">
                <img class="plantel" src="equipas/scp/gon�alo_inacio.jpg" width="80">
                <br>
                Gon�alo Inacio
            </div>

            <div class="defesaCentral">
                <img class="plantel" src="equipas/scp/S.Coates.jpg" width="80">
                <br>
                S. Coates
            </div>

            <div class="defesaCentralEsquerdo">
                <img class="plantel" src="equipas/scp/z.feddal.jpg" width="80">
                <br>
                Z. Feddal
            </div>
            <!--
                    <div class="defesaEsquerdo">
                        <img class="plantel" src="equipas/scp/porro.jpg" width="80">
                    </div>
            -->
            <div class="centralDireito">
                <img class="plantel" src="equipas/scp/porro.jpg" width="80">
                <br>
                Pedro Porro
            </div>
            <div class="centralCentralDireito">
                <img class="plantel" src="equipas/scp/joao_palhinha.jpg" width="80">
                <br>
                Jo�o Palhinha
            </div>
            <div class="centralCentralEsquerdo">
                <img class="plantel" src="equipas/scp/joao_mario.jpg" width="80">
                <br>
                Jo�o Mario
            </div>
            <div class="centralEsquerdo">
                <img class="plantel" src="equipas/scp/nuno_mendes.jpg" width="80">
                <br>
                Nuno Mendes
            </div>
            <div class="avancadoDireito">
                <img class="plantel" src="equipas/scp/p.gon�alves.jpg" width="80">
                <br>
                P. Gon�alves
            </div>
            <div class="avancadoCentral">
                <img class="plantel" src="equipas/scp/tiago_tomas.jpg" width="80">
                <br>
                Tiago Tomas
            </div>
            <div class="avancadoEsquerdo">
                <img class="plantel" src="equipas/scp/nuno_santos.jpg" width="80">
                <br>
                Nuno Santos

            </div>
            <div class="treinador">
                <img class="plantel" src="equipas/scp/ruben_amorim.png" width="80">
                <br>
                Ruben Amorim
            </div>

        </div>
    </div>

    </div>
<?php

bot_admin();
?>