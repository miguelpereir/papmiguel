<?php
include_once("includes/body.inc.php");
top();
$txt = addslashes($_POST['txt']);
$sql = "Select * from equipas  where equipaNome LIKE '$txt%'";

$result = mysqli_query($con, $sql);
?>
    <div align="center"><h1>Clubes</h1></div>
<div class="container" align="center">
    <div class="clubes "align="center">
<?php
while ($dados = mysqli_fetch_array($result)) {
    ?>
        <div class="card" style= "padding-top: 20px; padding-bottom: 20px; width: 18rem;float: left;">
            <a href="clube.php?id=<?php echo $dados['equipaId'] ?>"><img width="200" src="<?php echo $dados['equipaEmblemaURL'] ?>" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h3 class="card-title"><a href="clube.php?id=<?php echo $dados['equipaId'] ?>"><?php echo $dados['equipaNome'] ?></h3></a>
            </div>
        </div>
    <?php
}
?>


    </div>
</div>
<?php
bot();
?>