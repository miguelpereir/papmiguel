<?php
include_once ("../includes/body.inc.php");
$nome=addslashes($_POST['nomeJogador']);
$id=intval($_POST['jogadorId']);
$data=$_POST['dataJogador'];
$paisId=intval($_POST['jogadorPais']);
$imagem=$_FILES['fotoJogador']['name'];
$novoNome="images/".$imagem;


$sql="Update jogadores set jogadorNome='".$nome."', jogadorDataNascimento='".$data."'";
if($imagem!=''){
    $sql.=", jogadorFotoURL='images/".$imagem."'";
    copy($_FILES['fotoJogador']['tmp_name'],$novoNome);
}
$sql.=", jogadorPaisId='".$paisId."'";
$sql.=" where jogadorId=".$id;
mysqli_query($con,$sql);
header("location:admin_jogadores.php");
?>