<?php
include_once("includes/body.inc.php");
top();
$sql2 = "Select * from noticias limit 3";
$result2 = mysqli_query($con, $sql2);

$sql = "select equipaId,equipaNome, sum(pontoValor) as totalPts
from equipas left join pontos on equipaId=pontoEquipaId
group by 1
order by totalPts desc limit 5";
$result = mysqli_query($con, $sql);

$sql3 = "select * from jogos";
$result3 = mysqli_query($con, $sql3);
$dados3 = mysqli_fetch_array($result3);

?>
    <!-- <div class="matchs-info">
         <div class="col-md-6 col-sm-6 col-xs-12">
             <div class="row">
                 <div class="full">
                     <div class="matchs-vs">
                         <div class="vs-team">
                             <div class="team-btw-match">
                                 <ul>
                                     <li>
                                         <img src="images/img-03.png" alt="">
                                         <span>Footbal Team</span>
                                     </li>
                                     <li class="vs"><span>vs</span></li>
                                     <li>
                                         <img src="images/img-04.png" alt="">
                                         <span>Super Team Club</span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="col-md-6 col-sm-6 col-xs-12">
             <div class="row">
                 <div class="full">
                     <div class="right-match-time">
                         <h2>Next Match</h2>
                         <ul id="countdown-1" class="countdown">
                             <li><span class="days">10 </span>Day</li>
                             <li><span class="hours">5 </span>Hours</li>
                             <li><span class="minutes">25 </span>Minutes</li>
                             <li><span class="seconds">10 </span>Seconds</li>
                         </ul>
                         <span>12/02/2017 /19:00pm</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     -->
    <section id="contant" class="contant">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                    <aside id="sidebar" class="left-bar">
                        <div class="banner-sidebar">
                            <img class="img-responsive" src="images/img-05.jpg" alt="#"/>
                            <h3>Lorem Ipsum is simply dummy text..</h3>
                        </div>
                    </aside>
                    <h4>Match Fixture</h4>
                    <aside id="sidebar" class="left-bar">
                        <div class="feature-matchs">
                            <div class="team-btw-match">
                                <?php
                                $sqlEquipas = "Select jogos.*, e1.equipaNome as casa, e2.equipaNome as fora,
                                    f1.equipaEmblemaUrl as foto1,f2.equipaEmblemaURL as foto2,
                                    id1.equipaId as idcasa,id2.equipaId as idfora
                                    from equipas as e1 inner join jogos on e1.equipaId=jogos.jogoCasaEquipaId 
                                    inner join equipas as e2 on e2.equipaId=jogos.jogoForaEquipaId
                                    inner join equipas as f1 on f1.equipaId=jogos.jogoCasaEquipaId
                                    inner join equipas as f2 on f2.equipaId=jogos.jogoForaEquipaId
                                    inner join equipas as id1 on id1.equipaId=jogos.jogoCasaEquipaId
                                    inner join equipas as id2 on id2.equipaId=jogos.jogoForaEquipaId limit 5";

                                $resultEquipas = mysqli_query($con, $sqlEquipas);
                                while ($dadosEquipas = mysqli_fetch_array($resultEquipas)) {
                                    ?>
                                    <ul>
                                        <li>
                                            <a href="equipa.php?id=<?php echo $dadosEquipas['idcasa'] ?>"><img width="40%" src="<?php echo $dadosEquipas['foto1'] ?>" alt=""></a>
                                            <a href="equipa.php?id=<?php echo $dadosEquipas['idcasa'] ?>"><span><?php echo $dadosEquipas['casa'] ?></span></a>
                                        </li>
                                        <li class="vs"><span><?php echo $dadosEquipas['jogoCasaGolos'] ?></span></li>
                                        <li class="vs"><span>vs</span></li>
                                        <li class="vs"><span><?php echo $dadosEquipas['jogoForaGolos'] ?></span></li>
                                        <li>
                                            <a href="equipa.php?id=<?php echo $dadosEquipas['idfora'] ?>"><img width="40%" src="<?php echo $dadosEquipas['foto2'] ?>" alt=""></a>
                                            <a href="equipa.php?id=<?php echo $dadosEquipas['idfora'] ?>"><span><?php echo $dadosEquipas['fora'] ?></span></a>
                                        </li>
                                    </ul>
                                    <?php
                                }
                                ?>

                            </div>
                        </div>
                    </aside>
                    <h4>Points Table</h4>
                    <aside id="sidebar" class="left-bar">
                        <div class="feature-matchs">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Equipa</th>
                                    <th>P</th>
                                    <th>V</th>
                                    <th>E</th>
                                    <th>D</th>
                                </tr>
                                </thead>
                                <tbody>
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
                                    ?>

                                    <tr>
                                        <td><?php echo $contador ?></td>
                                        <td><?php echo $dados['equipaNome'] ?></td>
                                        <td><?php echo $dados['totalPts'] ?></td>
                                        <td><?php echo $dadosV['totalV'] ?></td>
                                        <td><?php echo $dadosE['totalE'] ?></td>
                                        <td><?php echo $dadosD['totalD'] ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </aside>
                    <div class="content-widget top-story" style="background: url(images/top-story-bg.jpg);">
                        <div class="top-stroy-header">
                            <h2>Top Soccer Headlines Story <a href="#" class="fa fa-fa fa-angle-right"></a></h2>
                            <span class="date">July 05, 2017</span>
                            <h2>Other Headlines</h2>
                        </div>
                        <ul class="other-stroies">
                            <li><a href="#">Wenger Vardy won't start</a></li>
                            <li><a href="#">Evans: Vardy just</a></li>
                            <li><a href="#">Pires and Murray </a></li>
                            <li><a href="#">Okazaki backing</a></li>
                            <li><a href="#">Wolfsburg's Rodriguez</a></li>
                            <li><a href="#">Jamie Vardy compared</a></li>
                            <li><a href="#">Arsenal target Mkhitaryan</a></li>
                            <li><a href="#">Messi wins libel case.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-8 col-xs-12">
                    <div class="news-post-holder">
                        <?php
                        while ($dados1 = mysqli_fetch_array($result2)) {
                            ?>
                            <div class="news-post-widget">
                                <a href="noticia.php?id=<?php echo $dados1['noticiaId'] ?>"><img class="img-responsive"
                                                                                                 src="<?php echo $dados1['noticiaCapaURL'] ?>"
                                                                                                 alt=""></a>
                                <div class="news-post-detail">
                                    <span class="date"><?php echo $dados1['noticiaData'] ?></span>
                                    <h2>
                                        <a href="noticia.php?id=<?php echo $dados1['noticiaId'] ?>"><?php echo $dados1['noticiaTitulo'] ?></a>
                                    </h2>
                                    <p><?php echo $dados1['noticiaResumo'] ?></p>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
Bottom();

?>