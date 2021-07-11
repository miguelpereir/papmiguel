<?php
include_once ("../includes/body.inc.php");


$nome=addslashes($_POST['nomeJogador']);
$imagem=$_FILES['fotoJogador']['name'];
$paisId=intval($_POST['jogadorPais']);
$novoNome="../images/".$imagem;
$data=$_POST['dataJogador'];

copy($_FILES['fotoJogador']['tmp_name'],$novoNome);

echo $sql="insert into jogadores(jogadorNome,JogadorDataNascimento,jogadorFotoURL,jogadorPaisId)
values('".$nome."','".$data."','images/".$imagem."','".$paisId."');";
mysqli_query($con,$sql);
header("location:jogadores.php");
?>