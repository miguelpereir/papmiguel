<?php
// dados na base de dados
include_once("../../includes/body.inc.php");
$id=intval($_POST['idPosicao']);
$sql="Select * from posicoes where posicaoId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
echo $dados['posicaoNome'];
?>