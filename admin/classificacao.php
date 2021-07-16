<?php
include_once("../includes/body.inc.php");
top_admin(CLASSIFICACAO);
$sql="select equipaId,equipaNome, sum(pontoValor) as totalPts
from equipas left join pontos on equipaId=pontoEquipaId
group by 1
order by totalPts desc";
$result = mysqli_query($con, $sql);


?>

    <section id="contant" class="contant main-heading team">
        <div class="container" align="center">
            <h1>Classificação</h1>
            <div class="feature-matchs" >
                <table class="table table-bordered table-hover">
                    <thead >
                    <tr>
                        <td colspan="12" align='right'>
                            <a href="jogos.php"><i class='btn btn-success'>Jogos</i></a>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Equipa</th>
                        <th>Jogos</th>
                        <th>Pontos</th>
                        <th>Vitórias</th>
                        <th>Empates</th>
                        <th>Derrotas</th>
                        <th>Golos M. </th>
                        <th>Golos S. </th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $contador=0;
                    while ($dados = mysqli_fetch_array($result)) {
                        $contador++;
                        $id=$dados['equipaId'];
                        $sql="select count(pontoJogoId) as totalJogos
                    from pontos where pontoEquipaId =$id";
                        $resJogos=mysqli_query($con,$sql);
                        $dadosJogos=mysqli_fetch_array($resJogos);

                        $sql="select count(pontoJogoId) as totalV
	        from  pontos where pontoResultado='V' and pontoEquipaId =$id";
                        $resV=mysqli_query($con,$sql);
                        $dadosV=mysqli_fetch_array($resV);
                        $sql="select count(pontoJogoId) as totalE
	        from  pontos where pontoResultado='E' and pontoEquipaId =$id";
                        $resE=mysqli_query($con,$sql);
                        $dadosE=mysqli_fetch_array($resE);
                        $sql="select count(pontoJogoId) as totalD
	        from  pontos where pontoResultado='D' and pontoEquipaId =$id";
                        $resD=mysqli_query($con,$sql);
                        $dadosD=mysqli_fetch_array($resD);



                        $sql="select sum(jogoCasaGolos) as totalGMCasa
                  from jogos where jogoCasaEquipaId=$id";
                        $resGMC=mysqli_query($con,$sql);
                        $dadosGMC=mysqli_fetch_array($resGMC);

                        $sql="select sum(jogoForaGolos) as totalGMFora
                  from jogos where jogoForaEquipaId=$id";
                        $resGMF=mysqli_query($con,$sql);
                        $dadosGMF=mysqli_fetch_array($resGMF);

                        $sql="select sum(jogoCasaGolos) as totalGSCasa
                  from jogos where jogoForaEquipaId=$id";
                        $resGSC=mysqli_query($con,$sql);
                        $dadosGSC=mysqli_fetch_array($resGSC);

                        $sql="select sum(jogoForaGolos) as totalGSFora
                  from jogos where jogoCasaEquipaId=$id";
                        $resGSF=mysqli_query($con,$sql);
                        $dadosGSF=mysqli_fetch_array($resGSF);



                        ?>

                        <tr>
                            <td ><?php echo $contador?></td>
                            <td><?php echo $dados['equipaNome'] ?></td>
                            <td><?php echo $dadosJogos['totalJogos']?></td>
                            <td><?php echo $dados['totalPts'] ?></td>
                            <td><?php echo $dadosV['totalV'] ?></td>
                            <td><?php echo $dadosE['totalE'] ?></td>
                            <td><?php echo $dadosD['totalD'] ?></td>
                            <td><?php echo $dadosGMC['totalGMCasa']+$dadosGMF['totalGMFora'] ?></td>
                            <td><?php echo $dadosGSC['totalGSCasa']+$dadosGSF['totalGSFora'] ?></td>

                        </tr>

                        <?php
                    }

                    ?>
                    <!--
                    /*select clubes.*, sum(pontos.pontoValor) as pontos from pontos
                    inner join jogos on jogos.jogoId = pontos.pontoJogoId
                    inner join clubes on clubes.clubeId = jogos.jogoCasaClubeId or clubes.clubeId = jogos.jogoForaClubeId
                    group by clubes.clubeId
                    order by pontos desc
                    ;*/
                    -->
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
            </div>
        </div>
    </section>
<?php
bottom_admin();
?>