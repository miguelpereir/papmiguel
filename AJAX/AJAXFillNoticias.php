<?php
include_once("../includes/body.inc.php");
$txt = addslashes($_POST['txt']);
$sql = "Select * from noticias where noticiaTitulo LIKE '%$txt%' order by noticiaData desc";

$result = mysqli_query($con, $sql);
?>

<?php
while ($dados = mysqli_fetch_array($result)) {
    ?>
    <div style="height:400px " class="col-lg-6 col-sm-6 col-xs-12">
        <div class="news-post-widget">
            <a href="noticia.php?id=<?php echo $dados['noticiaId'] ?>"><img height="100px" width="100%" class="img-responsive" src="<?php echo $dados['noticiaCapaURL'] ?>" alt=""></a>
            <div class="news-post-detail">
                <span class="date"><?php echo $dados['noticiaData'] ?></span>
                <h2><a  href="noticia.php?id=<?php echo $dados['noticiaId'] ?>"><?php echo $dados['noticiaTitulo'] ?></a></h2>
                <p><?php echo $dados['noticiaResumo'] ?></p>
            </div>
        </div>
    </div>

    <?php
}
?>