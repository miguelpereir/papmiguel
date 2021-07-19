<?php
include_once("includes/body.inc.php");
top(TEAMS);
$sql = "select equipaId,equipaNome,equipaEmblemaURL, sum(pontoValor) as totalPts
from equipas left join pontos on equipaId=pontoEquipaId
group by 1
order by totalPts desc";
$result = mysqli_query($con, $sql);
?>

    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="container">

                <?php
                $contador = 0;
                while ($dados = mysqli_fetch_array($result)) {
                    $contador++;
                    $id = $dados['equipaId'];
                    $sql = "select count(pontoJogoId) as totalJogos
                    from pontos where pontoEquipaId =$id";
                    $resJogos = mysqli_query($con, $sql);
                    $dadosJogos = mysqli_fetch_array($resJogos);

                    $sql = "select count(pontoJogoId) as totalV
	        from  pontos where pontoResultado='V' and pontoEquipaId =$id";
                    $resV = mysqli_query($con, $sql);
                    $dadosV = mysqli_fetch_array($resV);
                    $sql = "select count(pontoJogoId) as totalE
	        from  pontos where pontoResultado='E' and pontoEquipaId =$id";
                    $resE = mysqli_query($con, $sql);
                    $dadosE = mysqli_fetch_array($resE);
                    $sql = "select count(pontoJogoId) as totalD
	        from  pontos where pontoResultado='D' and pontoEquipaId =$id";
                    $resD = mysqli_query($con, $sql);
                    $dadosD = mysqli_fetch_array($resD);


                    $sql = "select sum(jogoCasaGolos) as totalGMCasa
                  from jogos where jogoCasaEquipaId=$id";
                    $resGMC = mysqli_query($con, $sql);
                    $dadosGMC = mysqli_fetch_array($resGMC);

                    $sql = "select sum(jogoForaGolos) as totalGMFora
                  from jogos where jogoForaEquipaId=$id";
                    $resGMF = mysqli_query($con, $sql);
                    $dadosGMF = mysqli_fetch_array($resGMF);

                    $sql = "select sum(jogoCasaGolos) as totalGSCasa
                  from jogos where jogoForaEquipaId=$id";
                    $resGSC = mysqli_query($con, $sql);
                    $dadosGSC = mysqli_fetch_array($resGSC);

                    $sql = "select sum(jogoForaGolos) as totalGSFora
                  from jogos where jogoCasaEquipaId=$id";
                    $resGSF = mysqli_query($con, $sql);
                    $dadosGSF = mysqli_fetch_array($resGSF);


                    ?>


                    <div class="col-md-3 column">
                        <div class="card">
                            <a href="equipa.php?id=<?php echo $dados['equipaId'] ?>"><img width="100%" src="<?php echo $dados['equipaEmblemaURL'] ?>" alt="">
                                <div class="">
                                    <a href="equipa.php?id=<?php echo $dados['equipaId'] ?>">
                                        <h4><?php echo $dados['equipaNome'] ?></h4></a>
                                    <p class="title"><?php echo $contador ?>º</p>
                                    <p>
                                        <!--<div class="center"><button class="button">Contact</button></div>-->
                                    </p>
                                </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </section>

<?php
bottom();
?>