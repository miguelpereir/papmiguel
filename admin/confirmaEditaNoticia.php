<?php
include_once ("../includes/body.inc.php");
$id=intval($_POST['noticiaId']);
$titulo=addslashes($_POST['tituloNoticia']);
$resumo=addslashes($_POST['resumoNoticia']);
$imagem=$_FILES['imagemNoticia']['name'];
$novoNome="../images/".$imagem;
$capa=$_FILES['capaNoticia']['name'];
$novo="../images/".$capa;
$descricao=addslashes($_POST['descricaoNoticia']);
$data=addslashes($_POST['dataNoticia']);



$sql="Update noticias set noticiaTitulo='".$titulo."'";
if($imagem!=''){
    $sql.=", noticiaImagemURL='images/".$imagem."'";
    copy($_FILES['imagemNoticia']['tmp_name'],$novoNome);
}
$sql.=", noticiaResumo='".$resumo."'";
if ($capa!=''){
    $sql.=", noticiaCapaURl='images/".$capa."'";
    copy($_FILES['capaNoticia']['tmp_name'],$novo);
}
$sql.=", noticiaDescricao='".$descricao."', noticiaData='".$data."'";

echo $sql.=" where noticiaId=".$id;
mysqli_query($con,$sql);
header("location:noticias.php");
?>
