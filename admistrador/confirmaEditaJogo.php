<?php
include_once ("../includes/body.inc.php");
$nome=addslashes($_POST['nomeTreinador']);
$id=intval($_POST['jogoId']);
$equipaCasa=intval($_POST['equipaJogoCasa']);
$equipaFora=intval($_POST['equipaJogoFora']);
$data=$_POST['dataJogo'];

 echo $sql="Update jogos set jogoEquipaCasaId='".$equipaCasa."', jogoEquipaForaId='".$equipaFora."', jogoData='".$data."'";
 echo $sql.=" where jogoId=".$id;
mysqli_query($con,$sql);
header("location:admin_jogos.php");
?>