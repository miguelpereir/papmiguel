<?php
include_once ("../includes/body.inc.php");
$nome=addslashes($_POST['nomePosicao']);
$id=intval($_POST['posicaoId']);
$campo=addslashes($_POST['campoPosicao']);

$sql="Update posicoes set posicaoNome='".$nome."', posicaoCampo='".$campo."'";
$sql.=" where posicaoId=".$id;
mysqli_query($con,$sql);
header("location:admin_posicoes.php");
?>