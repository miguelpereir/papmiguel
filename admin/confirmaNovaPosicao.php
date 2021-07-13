<?php
include_once ("../includes/body.inc.php");

$nome=addslashes($_POST['nomePosicao']);
$campo=addslashes($_POST['campoPosicao']);

echo $sql="insert into posicoes(posicaoNome,posicaoCampo)
values('".$nome."','".$campo."');";
mysqli_query($con,$sql);
header("location:posicoes.php");
?>
?>