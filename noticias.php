<?php
include_once ("includes/body.inc.php");
top(NEWS);

$sql = "Select * from noticias";

$result = mysqli_query($con, $sql);
?>
      <section id="contant" class="contant">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-sm-12 col-xs-12">
                  <div class="news-post-holder">

                        <?php
                    while ($dados = mysqli_fetch_array($result)) {
                        ?>
                     <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="news-post-widget">
                            <a href="noticia.php?id=<?php echo $dados['noticiaId'] ?>"><img width="100" class="img-responsive" src="<?php echo $dados['noticiaCapaURL'] ?>" alt=""></a>
                           <div class="news-post-detail">
                              <span class="date"><?php echo $dados['noticiaData'] ?></span>
                              <h2><a  href="noticia.php?id=<?php echo $dados['noticiaId'] ?>"><?php echo $dados['noticiaTitulo'] ?></a></h2>
                              <p><?php echo $dados['noticiaSubTitulo'] ?></p>
                           </div>
                        </div>
                     </div>

                        <?php
                    }
                        ?>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-xs-12">
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
                  <aside id="sidebar" class="right-bar">
                     <div class="banner">
                        <img class="img-responsive" src="images/bg.png" alt="#">
                     </div>
                  </aside>
               </div>
            </div>
         </div>
      </section>
<?php
bottom();
?>