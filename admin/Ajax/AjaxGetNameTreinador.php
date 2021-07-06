<?php
// dados na base de dados
include_once("../../includes/body.inc.php");
$id=intval($_POST['idTreinador']);
$sql="Select * from treinadores where treinadorId=$id";

$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
echo $dados['treinadorNome'];
?>