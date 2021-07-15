<?php
include_once ("includes/body.inc.php");

$sql="select clubeId,clubeNome, sum(pontoValor) as totalPts
from clubes left join pontos on clubeId=pontoClubeId
group by 1
order by totalPts desc";
$result = mysqli_query($con, $sql);

drawTop();
?>

<div class="container" style="margin-top: 5%;">
    <!-- Heading Row -->
    <div class="row my-4">
        <div class="col-4 ">
            <a class="btn btn-primary1" href="classificacaoMarcadores.php"> Classificacao Marcadores</a>

            <h1 align="center"><img src="./imgs/123.jpg""></h1>


        </div>



    </div>


    <table class="table table-striped table-hover">
        <thead >
        <tr style="background-color: #000000;color: white;">
            <th class="text-center" width="10%">Posicao</th>
            <th class="text-center" width="20%">Clube</th>
            <th class="text-center" width="10%">Jogos</th>
            <th class="text-center" width="10%">Vitorias</th>
            <th class="text-center" width="10%">Empates</th>
            <th class="text-center" width="10%">Derrotas</th>
            <th class="text-center" width="10%">Golos Marcados</th>
            <th class="text-center" width="10%">Golos Sofridos</th>
            <th class="text-center" width="10%">Pontos</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $contador=0;
        while ($dados = mysqli_fetch_array($result)) {
            $contador++;
            $id=$dados['clubeId'];
            $sql="select count(pontoJogoId) as totalJogos
                    from pontos where pontoClubeId =$id";
            $resJogos=mysqli_query($con,$sql);
            $dadosJogos=mysqli_fetch_array($resJogos);

            $sql="select count(pontoJogoId) as totalV
	        from  pontos where pontoResultado='V' and pontoClubeId =$id";
            $resV=mysqli_query($con,$sql);
            $dadosV=mysqli_fetch_array($resV);
            $sql="select count(pontoJogoId) as totalE
	        from  pontos where pontoResultado='E' and pontoClubeId =$id";
            $resE=mysqli_query($con,$sql);
            $dadosE=mysqli_fetch_array($resE);
            $sql="select count(pontoJogoId) as totalD
	        from  pontos where pontoResultado='D' and pontoClubeId =$id";
            $resD=mysqli_query($con,$sql);
            $dadosD=mysqli_fetch_array($resD);



            $sql="select sum(jogoCasaGolos) as totalGMCasa
                  from jogos where jogoCasaClubeId=$id";
            $resGMC=mysqli_query($con,$sql);
            $dadosGMC=mysqli_fetch_array($resGMC);

            $sql="select sum(jogoForaGolos) as totalGMFora
                  from jogos where jogoForaClubeId=$id";
            $resGMF=mysqli_query($con,$sql);
            $dadosGMF=mysqli_fetch_array($resGMF);

            $sql="select sum(jogoCasaGolos) as totalGSCasa
                  from jogos where jogoForaClubeId=$id";
            $resGSC=mysqli_query($con,$sql);
            $dadosGSC=mysqli_fetch_array($resGSC);

            $sql="select sum(jogoForaGolos) as totalGSFora
                  from jogos where jogoCasaClubeId=$id";
            $resGSF=mysqli_query($con,$sql);
            $dadosGSF=mysqli_fetch_array($resGSF);



            ?>

            <tr class="active" data-number="1">
                <td align="center"><?php echo $contador?></td>
                <td><a class="nolink"><?php echo $dados['clubeNome'] ?></a></td>
                <td align="center"><a class="nolink"><?php echo $dadosJogos['totalJogos'] ?></a></td>
                <td align="center"><a class="nolink"><?php echo $dadosV['totalV'] ?></a></td>
                <td align="center"><a class="nolink"><?php echo $dadosE['totalE'] ?></a></td>
                <td align="center"><a class="nolink"><?php echo $dadosD['totalD'] ?></a></td>
                <td align="center"><a class="nolink"><?php echo $dadosGMC['totalGMCasa']+$dadosGMF['totalGMFora'] ?></a></td>
                <td align="center"><a class="nolink"><?php echo $dadosGSC['totalGSCasa']+$dadosGSF['totalGSFora'] ?></a></td>
                <td align="center"><a class="nolink"><?php echo $dados['totalPts'] ?></a></td>a
            </tr>

            <?php
        }

        ?>

/*select clubes.*, sum(pontos.pontoValor) as pontos from pontos
                    inner join jogos on jogos.jogoId = pontos.pontoJogoId
                    inner join clubes on clubes.clubeId = jogos.jogoCasaClubeId or clubes.clubeId = jogos.jogoForaClubeId
                    group by clubes.clubeId
                    order by pontos desc
                    ;*/
                <?php
        /*
              while ($row = $result->fetch_assoc()) {
                   echo "<tr>";
                   echo '<td>'. $row[""] . '</td>';
                   echo '<td> <a href="./brunoFernandes.php">'. $row["numero"] . "</a></td>";
                   echo '<td>'. $row["nome"] . '</td>';
                   echo '<td>'. $row["posicao"] . '</td>';
                   echo '<td>'. $row["nacionalidade"] . '</td>';
                   echo "</tr>";
               }
*/
        ?>

        </tbody>
        </tr>
    </table>
    <p>
    </p>
</div>
<?php
drawBottom();
?>
