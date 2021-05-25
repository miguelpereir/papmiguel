<?php
include_once("includes/body.inc.php");
top();
$id = intval($_GET['id']);
$sql = "select * from noticias where noticiaId=$id";
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);
?>
<div class="container" >


    <div class="row">
        <div class="col-md-12" align="center"><h1><?php echo $dados['noticiaTitulo'] ?></h1></div>
    </div>
    <div class="row">
        <div class="col-md-12" align="center"><h3><?php echo $dados['noticiaSubTitulo'] ?></h3></div>
    </div>
    <div class="row">
        <div class="col-md-2" align="left"><a href="noticias.php"> <i class="fas fa-arrow-circle-left"></i> </a></div>
    </div>
    <div class="row">
        <div class="col-md-12"align="center"><img width="1000" src="<?php echo $dados['noticiaImagemURL'] ?>" alt="">

        </div>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h4><?php echo $dados['noticiaDescricao'] ?></h4>
        </div>
    </div>
    <br>

    <br>
    <div class="row">
        <div class="col-md-12" align="left">
            <h2>Comentários</h2>
        </div>

    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div align="left" class="col-md-11">
            <textarea name="comentarios" id="" cols="20" rows="5"
                      style="margin: 0px; width: 470px; height: 130px;"></textarea>
        </div>
        <br>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5" align="right">
            <a id="comentar" href="#" class="btn btn-success disabled" tabindex="-1" aria-disabled="true" role="button"
               data-bs-toggle="button">Comentar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-1">
            <img width="70" style="border-radius: 10px;" src="images/adan.jpg" alt="">
        </div>
        <div class="col-md-1" style="padding-top: 10px;padding-right: 60px ">
            <h3>Joao</h3>
        </div>

    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-5" align="left">
            <h5>Nenhum desses avançados que estão ou já passaram pelo Benfica, tinham o histórico de problemas físicos
                que o Diego Costa tem. Esse é que é o grande problema.
                Portanto, o teu argumento cai logo por terra aqui.</h5>

        </div>

    </div>
    <div class="row">
        <div class="col-md-7">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-1">
            <img width="70" style="border-radius: 10px;" src="images/adan.jpg" alt="">
        </div>
        <div class="col-md-1" style="padding-top: 10px;padding-right: 60px ">
            <h3>Joao</h3>
        </div>

    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-5" align="left">
            <h5>Nenhum desses avançados que estão ou já passaram pelo Benfica, tinham o histórico de problemas físicos
                que o Diego Costa tem. Esse é que é o grande problema.
                Portanto, o teu argumento cai logo por terra aqui.</h5>

        </div>

    </div>
    <div class="row">
        <div class="col-md-7">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" align="left"><h2>Mais Noticias</h2></td></div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <img width="150" src="images/benfica.png" alt=""><br>
            <h3>Benfica</h3><br>
            <h5 style="padding-bottom:10px">Jorge Jesus diz:"Vamos ganhar ainda vão ver"</h5>

        </div>
        <div class="col-md-3">
            <img width="150" src="images/benfica.png" alt=""><br>
            <h3>Benfica</h3><br>
            <h5 style="padding-bottom:10px">Jorge Jesus diz:"Vamos ganhar ainda vão ver"</h5>

        </div>
        <div class="col-md-3">
            <img width="150" src="images/benfica.png" alt=""><br>
            <h3>Benfica</h3><br>
            <h5 style="padding-bottom:10px">Jorge Jesus diz:"Vamos ganhar ainda vão ver"</h5>

        </div>

    <div class="col-md-3">
        <img width="150" src="images/benfica.png" alt=""><br>
        <h3>Benfica</h3><br>
        <h5 style="padding-bottom:10px">Jorge Jesus diz:"Vamos ganhar ainda vão ver"</h5>

    </div>
</div>
</div>
</div>
<!--<tr>
    <td width="100%" colspan="6" align="center" >

        <div class="col-md-3 agile_team_grid team-left-w3l-agile">
            <div class="agile_team_grid_main">
                <a href="noticias_sporting.html"> <img src="images/sporting.jpg" alt=" " class="img-responsive"></a>
                <div class="p-mask">
                    <ul class="social-icons">
                        <li><a title="Fonte"
                               href="https://www.abola.pt/nnh/2021-02-09/liga-sporting-vence-em-barcelos-com-reviravolta/878424"><i
                                class="fa fa-dribbble"></i></a></li>

                    </ul>
                </div>
            </div>
            <div class="agile_team_grid1">
                <h3>Sporting</h3>
                <p>Ninguem o para</p>
            </div>
        </div>
        <div class="col-md-3 agile_team_grid team-left-w3l-agile">
            <div class="agile_team_grid_main">
                <a href="noticias_sporting.html"> <img src="images/sporting.jpg" alt=" " class="img-responsive"></a>
                <div class="p-mask">
                    <ul class="social-icons">
                        <li><a title="Fonte"
                               href="https://www.abola.pt/nnh/2021-02-09/liga-sporting-vence-em-barcelos-com-reviravolta/878424"><i
                                class="fa fa-dribbble"></i></a></li>

                    </ul>
                </div>
            </div>
            <div class="agile_team_grid1">
                <h3>Sporting</h3>
                <p>Ninguem o para</p>
            </div>
        </div>
        <div class="col-md-3 agile_team_grid team-left-w3l-agile">
            <div class="agile_team_grid_main">
                <a href="noticias_sporting.html"> <img src="images/sporting.jpg" alt=" " class="img-responsive"></a>
                <div class="p-mask">
                    <ul class="social-icons">
                        <li><a title="Fonte"
                               href="https://www.abola.pt/nnh/2021-02-09/liga-sporting-vence-em-barcelos-com-reviravolta/878424"><i
                                class="fa fa-dribbble"></i></a></li>

                    </ul>
                </div>
            </div>
            <div class="agile_team_grid1">
                <h3>Sporting</h3>
                <p>Ninguem o para</p>
            </div>
        </div>
        <div class="col-md-3 agile_team_grid team-left-w3l-agile">
            <div class="agile_team_grid_main">
                <a href="noticias_sporting.html"> <img src="images/sporting.jpg" alt=" " class="img-responsive"></a>
                <div class="p-mask">
                    <ul class="social-icons">
                        <li><a title="Fonte"
                               href="https://www.abola.pt/nnh/2021-02-09/liga-sporting-vence-em-barcelos-com-reviravolta/878424"><i
                                class="fa fa-dribbble"></i></a></li>

                    </ul>
                </div>
            </div>
            <div class="agile_team_grid1">
                <h3>Sporting</h3>
                <p>Ninguem o para</p>
            </div>
        </div>



    </td>
</tr>
-->

</div>
<?php
bot();
?>

