<?php
include_once ("../includes/body.inc.php");

$titulo=addslashes($_POST['tituloNoticia']);
$resumo=addslashes($_POST['resumoNoticia']);
$imagem=$_FILES['imagemNoticia']['name'];
$novoNome="../images/".$imagem;
copy($_FILES['imagemNoticia']['tmp_name'],$novoNome);
$descricao=addslashes($_POST['descricaoNoticia']);

$capaN=$_FILES['capaNoticia']['name'];
$novo="../images/".$capaN;
copy($_FILES['capaNoticia']['tmp_name'],$novo);

$data=addslashes($_POST['dataNoticia']);

echo $sql="insert into noticias(noticiaTitulo,noticiaResumo,noticiaImagemURL,noticiaCapaURL,noticiaDescricao,noticiaData)
values('".$titulo."','".$resumo."','images/".$imagem."','images/".$capaN."','".$descricao."','".$data."');";
mysqli_query($con,$sql);
header("location:noticias.php");

?>
