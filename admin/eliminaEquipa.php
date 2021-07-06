<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);
echo $sql= "delete from equipas where equipaId=".$id;
echo $sql2= "delete from treinadores where treinadorEquipaId=".$id;
mysqli_query($con,$sql2);
mysqli_query($con,$sql);
header("location:equipas.php");



?>
