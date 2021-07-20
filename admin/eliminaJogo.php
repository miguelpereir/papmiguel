<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);
echo $sql= "delete from jogos where jogoId=".$id;
echo $sql2= " delete from pontos where pontoJogoId=".$id;
mysqli_query($con,$sql2);
mysqli_query($con,$sql);
header("location:jogos.php");
?>
