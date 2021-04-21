<?php
include_once("includes/body.inc.php");
top();
$id = intval($_GET['id']);
$sql = "select * from equipas where equipaId=$id";
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);
?>
    <div class="container" align="center">

        <div class="row">
            <div class="col-md-12">
                <h1><?php echo $dados['equipaNome'] ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" align="left">
                <a href="clubes.php"> <i class="fas fa-arrow-circle-left"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-2" align="left">
                <img width='200' src="<?php echo $dados['equipaEmblemaURL'] ?>">
            </div>

            <div class="col-md-5" align="left">
                <br>
                <h4>Fundado em <b><?php echo $dados['equipaAnoFundacao'] ?></b></h4>
                <h4>Presidente: <b><?php echo $dados['equipaPresidente'] ?> </b></h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-1"><a href="#historia"> Historia</a></div>
            <div class="col-md-1"><a href="#jogos">Jogos</a></div>
            <div class="col-md-1"><a href="noticias.php">Noticias</a></div>
            <div class="col-md-1"><a href="#plantel">Plantel</a></div>
            <div class="col-md-1"><a href="plantel_sporting.html">Ultimo 11</a></div>

        </div>
        <br>
        <div class="row">
            <div class="col-md-12" align="left">
                <div id="historia "><h2> História </h2></div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6" align="left">
                <h4 ><?php echo $dados['equipaHistoria'] ?></h4>
            </div>
            <div class="col-md-1" align="left">

            </div>
            <div class="col-md-5" align="right">
                <h3><?php echo $dados['equipaEstadioNome'] ?></h3>
                <img width="300" align="right" src="<?php echo $dados['equipaEstadioURL'] ?>">
            </div>
        </div>
        <br>
        <div class="row" id="jogos">
            <div class="col-md-12" align="left"><h2> Ultimo Jogo</h2></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <br>
                <h4 align="center"><img width="50" src="images/gilvicente.png" alt="">Gil vicente 1-2 Sporting
                    <img width="50" src="images/sportingicon.jpg" alt=""></h4>
            </div>
        </div>
        <div class="row" id="plantel">
            <br>
            <div class="col-md-12" align="left"><h2>Plantel</h2></div>
        </div>
        <div class="row">
            <div class="col-md-12" align="left">
                <br>
                <h4 align="left">Guarda-Redes</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="staff_line">
                    <div class="staff">
                        <div class="number">1</div>
                        <div class="photo"
                             style="background-image: url('equipas/scp/adan.jpg')"></div>
                        <div class="name">
                            <div>
                                <div align="left"><img
                                            src="images/espanha.png" width="18"
                                            height="12" alt="Espanha" title="Espanha"
                                            style="vertical-align:middle;margin-top:0px;"><span">33 anos</span></a>
                                </div>
                                <div class="text"><a href="#">Antonio Adán</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="staff_line">
                    <div class="staff">
                        <div class="number">1</div>
                        <div class="photo"
                             style="background-image: url('equipas/scp/adan.jpg')"></div>
                        <div class="name">
                            <div>
                                <div align="left"><img
                                            src="images/espanha.png" width="18"
                                            height="12" alt="Espanha" title="Espanha"
                                            style="vertical-align:middle;margin-top:0px;"><span">33 anos</span></a>
                                </div>
                                <div class="text"><a href="#">Antonio Adán</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12" align="left">
                <h4 align="left">Guarda-Redes</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="staff_line">
                    <div class="staff">
                        <div class="number">1</div>
                        <div class="photo"
                             style="background-image: url('equipas/scp/adan.jpg')"></div>
                        <div class="name">
                            <div>
                                <div align="left"><img
                                            src="images/espanha.png" width="18"
                                            height="12" alt="Espanha" title="Espanha"
                                            style="vertical-align:middle;margin-top:0px;"><span">33 anos</span></a>
                                </div>
                                <div class="text"><a href="#">Antonio Adán</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="staff_line">
                    <div class="staff">
                        <div class="number">1</div>
                        <div class="photo"
                             style="background-image: url('equipas/scp/adan.jpg')"></div>
                        <div class="name">
                            <div>
                                <div align="left"><img
                                            src="images/espanha.png" width="18"
                                            height="12" alt="Espanha" title="Espanha"
                                            style="vertical-align:middle;margin-top:0px;"><span">33 anos</span></a>
                                </div>
                                <div class="text"><a href="#">Antonio Adán</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
bot();
?>