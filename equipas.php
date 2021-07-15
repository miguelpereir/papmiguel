<?php
include_once ("includes/body.inc.php");
top(TEAMS);
$sql = "Select * from equipas";
$result = mysqli_query($con, $sql);
?>

      <section id="contant" class="contant main-heading team">
         <div class="row">

            <div class="container">
             <?php
              while ($dados = mysqli_fetch_array($result)) {
                ?>
               <div class="col-md-3 column">
                  <div class="card">
                      <a href="equipa.php?id=<?php echo $dados['equipaId'] ?>"><img class="img-responsive" src="<?php echo $dados['equipaEmblemaURL'] ?>" alt="John" style="width:100%"></a>
                     <div class="">
                         <a href="equipa.php?id=<?php echo $dados['equipaId'] ?>"><h4><?php echo $dados['equipaNome'] ?></h4></a>
                        <p class="title">1º</p>
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