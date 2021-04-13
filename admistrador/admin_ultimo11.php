<?php
include_once("../includes/body.inc.php");
top_admin();
$txt = addslashes($_POST['txt']);
$sql = "Select * from equipas  where equipaNome LIKE '$txt%'";

$result = mysqli_query($con, $sql);
?>
    <div class="container" align="center">
        <h1>Lista dos equipas</h1>
        <tr>
            <td><a href="admin_equipas.php"><button type="button" class="btn btn-success">Equipas</button></a>
                <a href="admin_noticias.php"><button type="button" class="btn btn-success">Noticias</button></a>
                <a href="admin_paises.php"><button type="button" class="btn btn-success">Paises</button></a>
                <a href="admin_jogadores.php"><button type="button" class="btn btn-success">Jodadores</button></a>
                <a href="admin_posicoes.php"><button type="button" class="btn btn-success">Posições</button></a>
                <a href="admin_treinadores.php"><button type="button" class="btn btn-success">Treinadores</button></a>
                <a href="admin_ultimo11.php"><button type="button" class="btn btn-success">Ultimo 11</button></a>
        </tr>
        <br>
        Pesquisar:<br><input type="text" id="search">
    </div>
    <table  class='table table-striped' align="center" width="100%">

        <tr>
            <th>Nome</th>
            <th>Editar</th>
        </tr>

        <?php
        while ($dados = mysqli_fetch_array($result)) {
            ?>

            <tr>
                <td><?php echo $dados['equipaNome'] ?></td>
                <td><a href="edita_ultimo11.php?id=<?php echo $dados['equipaId'] ?>"> <i class="fas fa-edit text-primary"></i></a></td>
            </tr>
            <?php
        }
        ?>

    </table>
    <!--
    <div class="container" align="center">
        <h1>Sporting</h1>
        <div class="campo" >
            <div class="guardaRedes">
                <img class="plantel" src="equipas/scp/adan.jpg" width="80">
                <br>
                Adán
            </div>
            ----------------
            <div class="defesaDireito">
                <img class="plantel" src="equipas/scp/porro.jpg" width="80">
            </div>
            ----------------
        <div class="defesaCentralDireito">
            <img class="plantel" src="equipas/scp/gonçalo_inacio.jpg" width="80">
            <br>
            Gonçalo Inacio
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
        -----------------
                <div class="defesaEsquerdo">
                    <img class="plantel" src="equipas/scp/porro.jpg" width="80">
                </div>
        ------------------
        <div class="centralDireito">
            <img class="plantel" src="equipas/scp/porro.jpg" width="80">
            <br>
            Pedro Porro
        </div>
        <div class="centralCentralDireito">
            <img class="plantel" src="equipas/scp/joao_palhinha.jpg" width="80">
            <br>
            João Palhinha
        </div>
        <div class="centralCentralEsquerdo">
            <img class="plantel" src="equipas/scp/joao_mario.jpg" width="80">
            <br>
            João Mario
        </div>
        <div class="centralEsquerdo">
            <img class="plantel" src="equipas/scp/nuno_mendes.jpg" width="80">
            <br>
            Nuno Mendes
        </div>
        <div class="avancadoDireito">
            <img class="plantel" src="equipas/scp/p.gonçalves.jpg" width="80">
            <br>
            P. Gonçalves
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
    -->


<?php

bot_admin();
?>