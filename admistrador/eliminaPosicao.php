<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);
echo $sql= "delete from posicoes where posicaoId=".$id;
mysqli_query($con,$sql);
header("location:admin_posicoes.php");



?>