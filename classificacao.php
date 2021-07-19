<?php
include_once("includes/body.inc.php");
top(CLASSIFICACAO);
$sql="select equipaId,equipaNome, sum(pontoValor) as totalPts
from equipas left join pontos on equipaId=pontoEquipaId
group by 1
order by totalPts desc";
$result = mysqli_query($con, $sql);
?>
<script>
    $(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>
<section id="contant" class="contant main-heading team" >
    <!--
   <div class="aboutus">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12">
               <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="full">
                     <h3>SPORTY LEAGUE HISTORY</h3>
                     <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet.
                        Vidisse quid incurreret ut ut possumus transferrem si ita labore dolor si appellat, aut dolore doctrina. Commodo dolor
                        esse in magna, a a multos senserit nam si aliqua iis multos..
                     </p>
                     <ul class="icon-list">
                        <li><i class="fa fa-angle-right"></i> Voluptate illum dolore ita ipsum</li>
                        <li><i class="fa fa-angle-right"></i> Labore admodum ita multos malis ea nam nam tamen fore amet</li>
                        <li><i class="fa fa-angle-right"></i> Voluptate illum dolore ita ipsum</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-5 col-sm-5 col-xs-12">
                  <img class="img-responsive" src="images/img-07.jpg" alt="#" />
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="dark-section" style="background:url(images/walle.jpg)">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12">
               <div class="heading-main">
                  <h2>Our Testimonials</h2>
               </div>
               <div class="testimonial-slider">
                  <div class="carousel slide" data-ride="carousel" id="quote-carousel">

                     <div class="carousel-inner text-center">

                        <div class="item active">
                           <blockquote>
                              <div class="row">
                                 <div class="col-sm-10 col-sm-offset-1">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                    <small>Someone famous</small>
                                 </div>
                              </div>
                           </blockquote>
                        </div>

                        <div class="item">
                           <blockquote>
                              <div class="row">
                                 <div class="col-sm-10 col-sm-offset-1">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    <small>Someone famous</small>
                                 </div>
                              </div>
                           </blockquote>
                        </div>

                        <div class="item">
                           <blockquote>
                              <div class="row">
                                 <div class="col-sm-10 col-sm-offset-1">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                    <small>Someone famous</small>
                                 </div>
                              </div>
                           </blockquote>
                        </div>
                     </div>

                     <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                        </li>
                     </ol>

                     <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                     <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   -->

        <div class="container" align="center">
            <h1>Classificação</h1>
            <div class="feature-matchs" >
                <table class="table table-bordered table-hover">
                    <thead >
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

                        <tr  class='clickable-row' data-href='equipa.php?id=<?php echo $dados['equipaId'] ?>'>

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
bottom();
?>
