<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);
echo $sql= "delete from jogadores where jogadorId=".$id;
echo $sql2= "delete from equipajogadores where equipaJogadorJogadorId=".$id;
mysqli_query($con,$sql2);
mysqli_query($con,$sql);
header("location:jogadores.php");
?>
