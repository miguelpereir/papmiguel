<?php
include_once("../includes/body.inc.php");
$idJog=intval($_POST['jogadorId']);
$idEq=intval($_POST['equipaId']);
$posicaoId=intval($_POST['posicao']);
$numero=addslashes($_POST['numeroJogador']);

$sql="Update equipaJogadores set equipaJogadorPosicaoId=$posicaoId,equipaJogadorNumero=$numero";
echo $sql.=" where equipaJogadorJogadorId=".$idJog." and equipaJogadorEquipaId=".$idEq;
mysqli_query($con,$sql);
header("location:plantel.php?id=".$idEq);
?>

