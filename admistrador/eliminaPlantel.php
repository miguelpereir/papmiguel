<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);
echo $sql= "delete from equipajogadores where equipaJogadorJogadorId=".$id;
mysqli_query($con,$sql);
header("location:admin_plantel.php");



?>