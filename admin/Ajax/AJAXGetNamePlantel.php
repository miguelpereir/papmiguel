<?php
// dados na base de dados
include_once("../../includes/body.inc.php");
$id=intval($_POST['idPlantel']);
$sql="Select * from equipajogadores inner join jogadores on equipaJogadorJogadorId=jogadorId where equipaJogadorJogadorId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
echo $dados['jogadorNome'];
?>