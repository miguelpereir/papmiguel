<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);
echo $sql= "delete from jogos where jogoId=".$id;
mysqli_query($con,$sql);
header("location:jogos.php");
?>
