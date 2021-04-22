<?php
// dados na base de dados
include_once("../../includes/body.inc.php");
$id=intval($_POST['idEquipa']);
$sql="Select * from equipas where equipaId=$id";

$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
echo $dados['equipaNome'];
?>