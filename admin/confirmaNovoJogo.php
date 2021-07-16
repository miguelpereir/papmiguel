<?php
include_once ("../includes/body.inc.php");
$equipaCasaId=intval($_POST['equipaJogoCasa']);
$equipaForaId=intval($_POST['equipaJogoFora']);
$goloCasa=intval($_POST['equipaGoloCasa']);
$goloFora=intval($_POST['equipaGoloFora']);
$data=$_POST['jogoData'];

$sql="insert into jogos(jogoCasaEquipaId,jogoForaEquipaId,jogoData,jogoCasaGolos,jogoForaGolos)
values('".$equipaCasaId."','".$equipaForaId."','".$data."','".$goloCasa."','".$goloFora."');";
mysqli_query($con,$sql);
echo $idJogo=mysqli_insert_id($con);
if($goloCasa==$goloFora){
    $sqlPontos="insert into pontos(pontoResultado, pontoValor, pontoJogoId, pontoEquipaId) values(";
    $sqlPontos.="'E',1,$idJogo,$equipaCasaId)";
    mysqli_query($con,$sqlPontos);
    $sqlPontos="insert into pontos(pontoResultado, pontoValor, pontoJogoId, pontoEquipaId) values(";
    $sqlPontos.="'E',1,$idJogo,$equipaForaId)";
    mysqli_query($con,$sqlPontos);
}elseif($goloCasa>$goloFora){
    $sqlPontos="insert into pontos(pontoResultado, pontoValor, pontoJogoId, pontoEquipaId) values(";
    $sqlPontos.="'V',3,$idJogo,$equipaCasaId)";
    mysqli_query($con,$sqlPontos);
    $sqlPontos="insert into pontos(pontoResultado, pontoValor, pontoJogoId, pontoEquipaId) values(";
    $sqlPontos.="'D',0,$idJogo,$equipaForaId)";
    mysqli_query($con,$sqlPontos);
}else{
        $sqlPontos="insert into pontos(pontoResultado, pontoValor, pontoJogoId, pontoEquipaId) values(";
        $sqlPontos.="'D',0,$idJogo,$equipaCasaId)";
        mysqli_query($con,$sqlPontos);
        $sqlPontos="insert into pontos(pontoResultado, pontoValor, pontoJogoId, pontoEquipaId) values(";
        $sqlPontos.="'V',3,$idJogo,$equipaForaId)";
        mysqli_query($con,$sqlPontos);
}
header("location:jogos.php");
?>
