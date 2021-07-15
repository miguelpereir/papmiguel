<?php
include_once("includes/body.inc.php");
top(TEAMS);
$id = intval($_GET['id']);
$sql = "Select * from equipas inner join treinadores on equipaId=treinadorequipaId where equipaId=$id";
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result)
?>
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
                                <ul>
                                    <li>
                                        <img src="images/img-01_002.png" alt="">
                                        <span>Portugal</span>
                                    </li>
                                    <li class="vs"><span>vs</span></li>
                                    <li>
                                        <img src="images/img-02.png" alt="">
                                        <span>Germany</span>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <img src="images/img-03_002.png" alt="">
                                        <span>Portugal</span>
                                    </li>
                                    <li class="vs"><span>vs</span></li>
                                    <li>
                                        <img src="images/img-04_003.png" alt="">
                                        <span>Germany</span>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <img src="images/img-05_002.png" alt="">
                                        <span>Portugal</span>
                                    </li>
                                    <li class="vs"><span>vs</span></li>
                                    <li>
                                        <img src="images/img-06.png" alt="">
                                        <span>Germany</span>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <img src="images/img-07_002.png" alt="">
                                        <span>Portugal</span>
                                    </li>
                                    <li class="vs"><span>vs</span></li>
                                    <li>
                                        <img src="images/img-08.png" alt="">
                                        <span>Germany</span>
                                    </li>
                                </ul>
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

                    <div class="col-md-3">
                        <div class="row">
                            <div class="blog-sidebar">
                                <div class="col-md-12">
                                    <h3 class="heading">Miguel Pereira</h3>
                                </div>
                                <div class="category-menu">
                                    <ul>
                                        <li>
                                            <div class="col-md-12">
                                                <img src="images/walle.jpg" alt="#">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img style="position: absolute;padding-right: 10px" class="img-responsive"
                                                         src="images/portugal.png" title="a">
                                                </div>
                                                <div class="col-md-8">
                                                    <h5 style="width: 70px;">35 anos</h5><h5 style="width: 30px">10</h5>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
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
                                    <th>D</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="images/img-01_004.png" alt="">Liverpool</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="images/img-02_002.png" alt="">Chelsea</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="images/img-03_003.png" alt="">Norwich City</td>
                                    <td>20</td>
                                    <td>15</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><img src="images/img-04_002.png" alt="">West Brom</td>
                                    <td>60</td>
                                    <td>10</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><img src="images/img-05.png" alt="">sunderland</td>
                                    <td>30</td>
                                    <td>06</td>
                                    <td>30</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </aside>
                    <div class="blog-sidebar">
                        <h4 class="heading">Treinador</h4>
                        <div class="category-menu">
                            <ul>
                                <li>
                                    <span><img src="<?php echo $dados['treinadorFotoURL'] ?>" alt="#"></span>
                                    <span>
                                 <h3><?php echo $dados['treinadorNome'] ?></h3>
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