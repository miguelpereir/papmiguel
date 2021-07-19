<?php
include_once ("../includes/body.inc.php");
$id=intval($_POST['equipaId']);
$nome=addslashes($_POST['nomeEquipa']);
$nomeTreinador=addslashes($_POST['nomeTreinador']);
$imagem=$_FILES['emblemaEquipa']['name'];
$novoNome="../images/".$imagem;
$ano=addslashes($_POST['anoEquipa']);
$estadioN=addslashes($_POST['nomeEstadio']);
$estadioF=$_FILES['fotoEstadio']['name'];
$novo="../images/".$estadioF;
$treinadorF=$_FILES['fotoTreinador']['name'];
$novoTF="../images/".$treinadorF;
$historia=addslashes($_POST['historiaEquipa']);
$presidente=addslashes($_POST['presidenteEquipa']);



$sql="Update equipas set equipaNome='".$nome."'";
if($imagem!=''){
    $sql.=", equipaEmblemaURL='images/".$imagem."'";
    copy($_FILES['emblemaEquipa']['tmp_name'],$novoNome);
}
$sql.=", equipaAnoFundacao='".$ano."', equipaEstadioNome='".$estadioN."'";
if ($estadioF!=''){
    $sql.=", equipaEstadioURl='images/".$estadioF."'";
    copy($_FILES['fotoEstadio']['tmp_name'],$novo);
}
if ($treinadorF!=''){
    $sql.=", equipaTreinadorFotoURl='images/".$treinadorF."'";
    copy($_FILES['fotoTreinador']['tmp_name'],$novoTF);
}
$sql.=", equipaHistoria='".$historia."', equipaPresidente='".$presidente."', equipaTreinador='".$nomeTreinador."'";

$sql.=" where equipaId=".$id;
mysqli_query($con,$sql);
header("location:equipas.php");
?>