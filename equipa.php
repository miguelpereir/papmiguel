<?php
include_once("includes/body.inc.php");
top(TEAMS);
$id = intval($_GET['id']);
$sql = "Select * from equipas  where equipaId=$id";
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);

$sql2 = "select equipaId,equipaNome, sum(pontoValor) as totalPts
from equipas left join pontos on equipaId=pontoEquipaId
group by 1
order by totalPts desc limit 5";
$result2 = mysqli_query($con, $sql2);

?>
    <script>
        $(document).ready(function ($) {
            $(".clickable-row").click(function () {
                window.location = $(this).data("href");
            });
        });
    </script>

    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="container">
                <div class="col-md-9">
                    <div class="feature-post small-blog">
                        <div class="col-md-5">
                            <div class="feature-img">
                                <img align="middle" src="<?php echo $dados['equipaEmblemaURL'] ?>"
                                     class="img-responsive" alt="#"/>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="feature-cont">
                                <div class="post-heading">
                                    <h1><?php echo $dados['equipaNome'] ?></h1>
                                    <h3>Historia:</h3>
                                    <p><?php echo $dados['equipaHistoria'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <aside id="sidebar" class="left-bar">
                        <div class="feature-matchs">
                            <div class="post-heading">
                                <h3>Jogos:</h3>

                            </div>
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
                                    inner join equipas as id2 on id2.equipaId=jogos.jogoForaEquipaId where jogoCasaEquipaId=$id or jogoForaEquipaId=$id order by jogoData desc ";

                                $resultEquipas = mysqli_query($con, $sqlEquipas);
                                while ($dadosEquipas = mysqli_fetch_array($resultEquipas)) {
                                    ?>
                                    <ul>
                                        <li>
                                            <a href="equipa.php?id=<?php echo $dadosEquipas['idcasa'] ?>"><img
                                                        width="40%" src="<?php echo $dadosEquipas['foto1'] ?>"
                                                        alt=""></a>
                                            <a href="equipa.php?id=<?php echo $dadosEquipas['idcasa'] ?>"><span><?php echo $dadosEquipas['casa'] ?></span></a>
                                        </li>
                                        <li class="vs"><span><?php echo $dadosEquipas['jogoCasaGolos'] ?></span></li>
                                        <li class="vs"><span>vs</span></li>
                                        <li class="vs"><span><?php echo $dadosEquipas['jogoForaGolos'] ?></span></li>
                                        <li>
                                            <a href="equipa.php?id=<?php echo $dadosEquipas['idfora'] ?>"><img
                                                        width="40%" src="<?php echo $dadosEquipas['foto2'] ?>"
                                                        alt=""></a>
                                            <a href="equipa.php?id=<?php echo $dadosEquipas['idfora'] ?>"><span><?php echo $dadosEquipas['fora'] ?></span></a>
                                        </li>
                                    </ul>
                                    <?php
                                }
                                ?>

                            </div>
                        </div>
                    </aside>
                    <div class="post-heading">
                        <h3>Plantel:</h3>
                    </div>
                    <div class="heading">
                        <br>
                        <h4 align="left">Guarda-Redes</h4>
                    </div>
                    <div class="row">

                        <?php
                        $sqlJogador = "select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  inner join paises on jogadorPaisId=paisId
                                                  where posicaoCampo='guarda redes' and equipaJogadorEquipaId=$id  order by jogadorNome";
                        $resultJogador = mysqli_query($con, $sqlJogador);
                        while ($dadosJogador = mysqli_fetch_array($resultJogador)) {
                            ?>
                            <div class="col-md-3">
                                <div class="row">
                                    <div style="height: 361px" class="blog-sidebar">
                                        <div class="col-md-12">
                                            <h3 style="width: 100%;"  class="heading"><?php echo $dadosJogador['jogadorNome'] ?></h3>
                                        </div>
                                        <div class="category-menu">
                                            <ul>
                                                <li>
                                                    <div class="col-md-12">
                                                        <img height="180px" src="<?php echo $dadosJogador['jogadorFotoURL'] ?>"
                                                             alt="#">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12" align="left">
                                                            <img style="width: 50px" class="img-responsive"
                                                                 src=" <?php echo $dadosJogador['paisBandeiraURL'] ?>"
                                                                 title="<?php echo $dadosJogador['paisNome'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8" align="left">
                                                    <span>
                                                    <?php echo $dadosJogador['jogadorDataNascimento'] ?>
                                                    </span>
                                                        </div>
                                                        <div class="col-md-4" align="right">
                                                    <span>
                                                        <?php echo $dadosJogador['equipaJogadorNumero'] ?>
                                                    </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                    <div class="heading">
                        <br>
                        <h4 align="left">Defesas</h4>
                    </div>
                    <div class="row">

                        <?php
                        $sqlJogador = "select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  inner join paises on jogadorPaisId=paisId
                                                  where posicaoCampo='Defesa' and equipaJogadorEquipaId=$id  order by jogadorNome";
                        $resultJogador = mysqli_query($con, $sqlJogador);
                        while ($dadosJogador = mysqli_fetch_array($resultJogador)) {
                            ?>
                            <div class="col-md-3">
                                <div class="row">
                                    <div style="height: 361px" class="blog-sidebar">
                                        <div class="col-md-12">
                                            <h3 style="width: 100%"  class="heading"><?php echo $dadosJogador['jogadorNome'] ?></h3>
                                        </div>
                                        <div class="category-menu">
                                            <ul>
                                                <li>
                                                    <div class="col-md-12">
                                                        <img height="180px" src="<?php echo $dadosJogador['jogadorFotoURL'] ?>"
                                                             alt="#">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12" align="left">
                                                            <img style="width: 50px" class="img-responsive"
                                                                 src="<?php echo $dadosJogador['paisBandeiraURL'] ?>"
                                                                 title="<?php echo $dadosJogador['paisNome'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8" align="left">
                                                    <span>
                                                    <?php echo $dadosJogador['jogadorDataNascimento'] ?>
                                                    </span>
                                                        </div>
                                                        <div class="col-md-4" align="right">
                                                    <span>
                                                        <?php echo $dadosJogador['equipaJogadorNumero'] ?>
                                                    </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                    <div class="heading">
                        <br>
                        <h4 align="left">Médios</h4>
                    </div>
                    <div class="row">

                        <?php
                        $sqlJogador = "select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  inner join paises on jogadorPaisId=paisId
                                                  where posicaoCampo='Médio' and equipaJogadorEquipaId=$id  order by jogadorNome";
                        $resultJogador = mysqli_query($con, $sqlJogador);
                        while ($dadosJogador = mysqli_fetch_array($resultJogador)) {
                            ?>
                            <div class="col-md-3">
                                <div class="row">
                                    <div style="height: 361px" class="blog-sidebar">
                                        <div class="col-md-12">
                                            <h3 class="heading"><?php echo $dadosJogador['jogadorNome'] ?></h3>
                                        </div>
                                        <div class="category-menu">
                                            <ul>
                                                <li>
                                                    <div class="col-md-12">
                                                        <img height="180px" src="<?php echo $dadosJogador['jogadorFotoURL'] ?>"
                                                             alt="#">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12" align="left">
                                                            <img style="width: 50px" class="img-responsive"
                                                                 src="<?php echo $dadosJogador['paisBandeiraURL'] ?>"
                                                                 title="<?php echo $dadosJogador['paisNome'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8" align="left">
                                                    <span>
                                                    <?php echo $dadosJogador['jogadorDataNascimento'] ?>
                                                    </span>
                                                        </div>
                                                        <div class="col-md-4" align="right">
                                                    <span>
                                                        <?php echo $dadosJogador['equipaJogadorNumero'] ?>
                                                    </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                    <div class="heading">
                        <br>
                        <h4 align="left">Avançados</h4>
                    </div>
                    <div class="row">

                        <?php
                        $sqlJogador = "select * from jogadores inner join equipajogadores on jogadorId=equipaJogadorJogadorId
                                                  inner join posicoes on posicaoId=equipaJogadorPosicaoId
                                                  inner join paises on jogadorPaisId=paisId
                                                  where posicaoCampo='Avançado' and equipaJogadorEquipaId=$id  order by jogadorNome";
                        $resultJogador = mysqli_query($con, $sqlJogador);
                        while ($dadosJogador = mysqli_fetch_array($resultJogador)) {
                            ?>
                            <div class="col-md-3">
                                <div class="row">
                                    <div style="height: 361px" class="blog-sidebar">
                                        <div class="col-md-12">
                                            <h3 class="heading"><?php echo $dadosJogador['jogadorNome'] ?></h3>
                                        </div>
                                        <div class="category-menu">
                                            <ul>
                                                <li>
                                                    <div class="col-md-12">
                                                        <img height="180px" src="<?php echo $dadosJogador['jogadorFotoURL'] ?>"
                                                             alt="#">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12" align="left">
                                                            <img style="width: 50px" class="img-responsive"
                                                                 src="<?php echo $dadosJogador['paisBandeiraURL'] ?>"
                                                                 title="<?php echo $dadosJogador['paisNome'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8" align="left">
                                                    <span>
                                                    <?php echo $dadosJogador['jogadorDataNascimento'] ?>
                                                    </span>
                                                        </div>
                                                        <div class="col-md-4" align="right">
                                                    <span>
                                                        <?php echo $dadosJogador['equipaJogadorNumero'] ?>
                                                    </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="blog-sidebar">
                        <h4 class="heading">Informação</h4>
                        <div class="category-menu">
                            <ul>
                                <li>
                                    <span>
                                  <h5>Ano de fundação:</h5> <h3><?php echo $dados['equipaAnoFundacao'] ?></h3>
                                  <h5>Presidente:</h5><h3><?php echo $dados['equipaPresidente'] ?></h3>
                               </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <aside id="sidebar" class="right-bar">
                        <div align="center" class="banner">
                            <img class="img-responsive" src="<?php echo $dados['equipaEstadioURL'] ?>" alt="#">
                            <h3 style="padding-left: 10px"><?php echo $dados['equipaEstadioNome'] ?></h3>
                        </div>
                    </aside>

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
                                while ($dados2 = mysqli_fetch_array($result2)) {
                                    $contador++;
                                    $id = $dados2['equipaId'];
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

                                    <tr class='clickable-row'
                                        data-href='equipa.php?id=<?php echo $dados2['equipaId'] ?>'>
                                        <td><?php echo $contador ?></td>
                                        <td><?php echo $dados2['equipaNome'] ?></td>
                                        <td><?php echo $dados2['totalPts'] ?></td>
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
                    <div class="blog-sidebar">
                        <h4 class="heading">Treinador</h4>
                        <div class="category-menu">
                            <ul>
                                <li>
                                    <span><img src="<?php echo $dados['equipaTreinadorFotoURL'] ?>" alt="#"></span>
                                    <span>
                                 <h3><?php echo $dados['equipaTreinador'] ?></h3>
                              </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
bottom();
?>