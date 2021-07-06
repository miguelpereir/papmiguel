<?php
include_once ("../includes/body.inc.php");
$nome=addslashes($_POST['nomeTreinador']);
$id=intval($_POST['treinadorId']);
$equipaId=intval($_POST['equipaTreinador']);
$imagem=$_FILES['fotoTreinador']['name'];
$novoNome="images/".$imagem;


$sql="Update treinadores set treinadorNome='".$nome."'";
if($imagem!=''){
    $sql.=", treinadorFotoURL='images/".$imagem."'";
    copy($_FILES['fotoTreinador']['tmp_name'],$novoNome);
}
$sql.=", treinadorEquipaId='".$equipaId."'";
$sql.=" where treinadorId=".$id;
mysqli_query($con,$sql);
header("location:treinadores.php");
?>