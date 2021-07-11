<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);
echo $sql= "delete from paises where paisId=".$id;
mysqli_query($con,$sql);
header("location:paises.php");
?>