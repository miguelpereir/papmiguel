<?php
include_once("includes/body.inc.php");
top(NEWS);
$sql = "Select * from noticias";
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result)
?>
    <section id="contant" class="contant">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="feature-post">
                        <h1><?php echo $dados['noticiaTitulo'] ?></h1>
                        <div class="feature-img">
                            <img src="<?php echo $dados['noticiaImagemURL'] ?>" class="img-responsive" alt="#"/>
                        </div>
                        <div class="feature-cont">

                            <div class="post-info">
                                <span>
                                <h5><?php echo $dados['noticiaData'] ?></h5>
                                </span>
                            </div>
                            <div class="post-heading">
                                <h3><?php echo $dados['noticiaResumo'] ?></h3>
                                <p><?php echo $dados['noticiaDescricao'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="post-heading">
                    <h2>Comentarios</h2>
                    </div>
                    <div class="feature-post small-blog">
                        <div class="col-md-12">
                            <div class="feature-cont">
                                <div class="post-info">
                                    <img src="images/profile-img.png" alt="#"/>
                                    <span>
                                 <h4>by George Kvasnikov</h4>
                                 <h5>on Jun 27, 2014</h5>
                              </span>
                                </div>
                                <div class="post-heading">
                                    <h3>Sydney derby takes centre stage while Tim Cahill says no to A-League</h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti atque corrupti quos dolores
                                        et quas molestias excepturi sint occaecati cupiditate non provident, similique
                                        sunt in culpa qui officia deserunt mollitia animi, id est
                                        laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita
                                        distinctio.</p>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                    <div class="contact-us">
                        <form method="post" class="comments-form" id="contactform">
                            <ul>
                            <li><textarea name="message" id="message" placeholder="Faz um comentário"></textarea></li>
                            <li><input class="thbg-color" type="submit" value="Comentar"></li>
                            </ul>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <!--
                    <div class="blog-sidebar">
                        <h4 class="heading">Informação</h4>
                        <div class="category-menu">
                            <ul>
                                <li>
                                    <span>
                                  <h5>Ano de fundação:</h5> <h3>1905</h3>
                                  <h5>Presidente:</h5><h3>Miguel Pereira</h3>
                               </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <aside id="sidebar" class="right-bar">
                        <div align="center" class="banner">
                            <img class="img-responsive" src="images/about.jpeg" alt="#">
                            <h3 style="padding-left: 10px">Estadio de Alvadade</h3>
                        </div>
                    </aside>
                     -->
                    <div class="blog-sidebar">
                        <h4 class="heading">Popular News</h4>
                        <div class="category-menu">
                            <ul>
                                <li>
                                    <span><img src="images/profile-img2.png" alt="#"></span>
                                    <span>
                                 <p>Two touch penalties, imaginary cards</p>
                                 <p class="date">22 Feb, 2016</p>
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
bottom(NOTICIAS);
?>