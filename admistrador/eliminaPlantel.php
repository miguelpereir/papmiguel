<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);
$sql="select equipaJogadorEquipaId from equipajogadores";
$result = mysqli_query($con, $sql);
$dados=mysqli_fetch_array($result);

echo $sql= "delete from equipajogadores where equipaJogadorJogadorId=".$id;
mysqli_query($con,$sql);
header("location:admin_plantel.php?id=".$dados['equipaJogadorEquipaId']);

?>