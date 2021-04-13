<?php
include_once ("../includes/body.inc.php");
$id=intval($_POST['id']);
$sql="select * from equipas where equipaId=$id";

$jogadorId=intval($_POST['equipaJogadorJogador']);
$posicaoId=intval($_POST['equipaJogadorPosicao']);
$numero=addslashes($_POST['numeroJogador']);

echo $sql="insert into equipajogadores(equipaJogadorJogadorId,equipaJogadorEquipaId,equipaJogadorPosicaoId,equipaJogadorNumero)
values('".$jogadorId."','".$id."','".$posicaoId."','".$numero."');";
mysqli_query($con,$sql);
header("location:admin_plantel.php?id=".$id);
?>