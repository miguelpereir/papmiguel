<?php
include_once ("../includes/body.inc.php");


$nome=addslashes($_POST['nomeTreinador']);
$imagem=$_FILES['fotoTreinador']['name'];
$equipaId=intval($_POST['equipaTreinador']);
$novoNome="../images/".$imagem;
copy($_FILES['fotoTreinador']['tmp_name'],$novoNome);

echo $sql="insert into treinadores(treinadorNome,treinadorFotoURL,treinadorEquipaId)
values('".$nome."','images/".$imagem."','".$equipaId."');";
mysqli_query($con,$sql);
header("location:admin_treinadores.php");

?>