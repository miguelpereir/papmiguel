<?php
include_once("includes/body.inc.php");
top();
$id=intval($_GET['id']);
$sql="select * from equipas where equipaId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container">

    <table class='table table-responsive' width="100%" align="center">
        <tr>
            <td colspan="12" align="center"><h1><?php echo $dados['equipaNome']?></h1></td>
        </tr>

        <tr>
            <td colspan="12" align="left"><a href="clubes.php"> <i class="fas fa-arrow-circle-left"></i> </a></td>
        </tr>

        <tr>
            <td >
                <img width='200' src="<?php echo $dados['equipaEmblemaURL'] ?>"
            </td>

            <td>
                <br>
                <h4>Fundado em <b><?php echo $dados['equipaAnoFundacao'] ?></b> </h4>
                <h4>Presidente: <b><?php echo $dados['equipaPresidente'] ?> </b></h4>
            </td>
        </tr>




        <tr >
            <th><a href="#historia"> Historia</a></th>
            <th><a href="#jogos">Jogos</a></th>
            <th><a href="noticias.php"></a>Noticias</th>
            <th><a href="#plantel">Plantel</a></th>
            <th><a href="plantel_sporting.html">Ultimo 11</a></th>

        </tr>
        <tr>

                <td colspan="12" id="historia "><h2> História </h2></td>

        </tr>
        <tr>
            <td colspan="4">
                <h4><?php echo $dados['equipaHistoria'] ?></h4>
                <br>

            </td>
            <td>
                <h3 align="center"><?php echo $dados['equipaEstadioNome'] ?></h3>
                <img width="300" align="right" src="<?php echo $dados['equipaEstadioURL'] ?>">
            </td>
        </tr>
        <tr id="jogos">
            <td colspan="12"><h2> Ultimo Jogo</h2> </td>

                </tr>
        <tr>
            <td>
            <br>
                <h4 align="center"><img src="images/gilvicente.png" alt="">Gil vicente 1-2 Sporting
                    <img src="images/sportingicon.jpg" alt=""></h4>
            </td>
        </tr>
        <tr id="plantel">
            <td colspan="12"><h2>Plantel</h2></td>
        </tr>
        <tr>
            <td>
                <br>
                <h4>Guarda-Redes</h4>

                <div class="staff_line">
                <div class="staff">
                    <div class="number">1</div>
                    <div class="photo"
                         style="background-image: url('equipas/scp/adan.jpg')"></div>
                    <div class="name">
                        <div>
                            <div><img
                                    src="images/espanha.png" width="18"
                                    height="12" alt="Espanha" title="Espanha"
                                    style="vertical-align:middle;margin-top:0px;"><span>33 anos</span></a></div>
                            <div class="text"><a href="#">Antonio Adán</a></div>
                        </div>
                        </div>
                 </div>
                    <div class="staff">
                        <div class="number">1</div>
                        <div class="photo"
                             style="background-image: url('equipas/scp/adan.jpg')"></div>
                        <div class="name">
                            <div>
                                <div><img
                                        src="images/espanha.png" width="18"
                                        height="12" alt="Espanha" title="Espanha"
                                        style="vertical-align:middle;margin-top:0px;"><span>33 anos</span></a></div>
                                <div class="text"><a href="#">Antonio Adán</a></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h4>Defesas</h4>

                    <div class="staff">
                        <div class="number">1</div>
                        <div class="photo"
                             style="background-image: url('equipas/scp/adan.jpg')"></div>
                        <div class="name">
                            <div>
                                <div><img
                                        src="images/espanha.png" width="18"
                                        height="12" alt="Espanha" title="Espanha"
                                        style="vertical-align:middle;margin-top:0px;"><span>33 anos</span></a></div>
                                <div class="text"><a href="#">Antonio Adán</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="staff">
                        <div class="number">1</div>
                        <div class="photo"
                             style="background-image: url('equipas/scp/adan.jpg')"></div>
                        <div class="name">
                            <div>
                                <div><img
                                        src="images/espanha.png" width="18"
                                        height="12" alt="Espanha" title="Espanha"
                                        style="vertical-align:middle;margin-top:0px;"><span>33 anos</span></a></div>
                                <div class="text"><a href="#">Antonio Adán</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>

        </tr>


    </table>
</div>
<?php
bot();
?>