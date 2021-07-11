<?php
include_once ("../includes/body.inc.php");
$nome=addslashes($_POST['nomePais']);
$id=intval($_POST['paisId']);
$imagem=$_FILES['logoPais']['name'];
$novoNome="images/".$imagem;
$sql="Update paises set paisNome='".$nome."'";
if($imagem!=''){
     $sql.=", paisBandeiraURL='images/".$imagem."'";
    copy($_FILES['logoPais']['tmp_name'],$novoNome);
}
$sql.=" where paisId=".$id;
mysqli_query($con,$sql);
header("location:paises.php");
?>