<?php
include_once ("../includes/body.inc.php");

$nome=addslashes($_POST['nomeEquipa']);
$nomeTreinador=addslashes($_POST['nomeTreinador']);
$imagem=$_FILES['emblemaEquipa']['name'];
$novoNome="../images/".$imagem;
copy($_FILES['emblemaEquipa']['tmp_name'],$novoNome);
$ano=addslashes($_POST['anoEquipa']);
$estadioN=addslashes($_POST['nomeEstadio']);
$estadioF=$_FILES['fotoEstadio']['name'];
$novo="../images/".$estadioF;
copy($_FILES['fotoEstadio']['tmp_name'],$novo);
$treinadorF=$_FILES['fotoTreinador']['name'];
$novoTF="../images/".$treinadorF;
copy($_FILES['fotoTreinador']['tmp_name'],$novoTF);
$historia=addslashes($_POST['historiaEquipa']);
$presidente=addslashes($_POST['presidenteEquipa']);

echo $sql="insert into equipas(equipaNome,equipaEmblemaURL,equipaAnoFundacao,equipaEstadioNome,equipaEstadioURL,equipaHistoria,equipaPresidente, equipaTreinador, equipaTreinadorFotoURL)
values('".$nome."','images/".$imagem."','".$ano."','".$estadioN."','images/".$estadioF."','".$historia."','".$presidente."','".$nomeTreinador."','images/".$treinadorF."');";
mysqli_query($con,$sql);
header("location:equipas.php");

?>