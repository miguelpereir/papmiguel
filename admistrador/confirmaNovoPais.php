<?php
include_once ("../includes/body.inc.php");


$nome=addslashes($_POST['nomePais']);
$imagem=$_FILES['logoPais']['name'];
$novoNome="../imagens/".$imagem;

copy($_FILES['logoPais']['tmp_name'],$novoNome);

echo $sql="insert into canais(canalNome,canalBandeiraURL)
values('".$nome."','../imagens/".$imagem."');";
mysqli_query($con,$sql);
header("location:admin_equipas.php");
?>