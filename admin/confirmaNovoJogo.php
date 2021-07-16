<?php
include_once ("../includes/body.inc.php");
$equipaCasaId=intval($_POST['equipaJogoCasa']);
$equipaForaId=intval($_POST['equipaJogoFora']);
$goloCasa=intval($_POST['equipaGoloCasa']);
$goloFora=intval($_POST['equipaGoloFora']);
$data=$_POST['jogoData'];

echo $sql="insert into jogos(jogoCasaEquipaId,jogoForaEquipaId,jogoData,jogoCasaGolos,jogoForaGolos)
values('".$equipaCasaId."','".$equipaForaId."','".$data."','".$goloCasa."','".$goloFora."');";
mysqli_query($con,$sql);
header("location:jogos.php");
?>
