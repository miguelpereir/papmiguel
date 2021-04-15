<?php
include_once ("../includes/body.inc.php");

$equipaCasaId=intval($_POST['equipaJogoCasa']);
$equipaForaId=intval($_POST['equipaJogoFora']);
$data=$_POST['dataJogo'];


echo $sql="insert into jogos(jogoEquipaCasaId,jogoEquipaForaId,jogoData)
values('".$equipaCasaId."','".$equipaForaId."','".$data."');";
mysqli_query($con,$sql);
header("location:admin_jogos.php");

?>