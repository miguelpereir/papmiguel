<?php
include_once ("../includes/body.inc.php");

$jogadorId=intval($_POST['equipaJogadorJogador']);
$equipaId=intval($_POST['equipaJogadorEquipa']);
$posicaoId=intval($_POST['equipaJogadorPosicao']);
$numero=addslashes($_POST['numeroJogador']);

echo $sql="insert into equipajogadores(equipaJogadorJogadorId,equipaJogadorEquipaId,equipaJogadorPosicaoId,equipaJogadorNumero)
values('".$jogadorId."','".$equipaId."','".$posicaoId."','".$numero."');";
mysqli_query($con,$sql);
header("location:admin_plantel.php");
?>