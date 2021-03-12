<?php
include_once ("../includes/body.inc.php");

$id=intval($_GET['id']);
$sql="select * from posicoes where posicaoId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<h1>Editar Posicao</h1>
<form action="confirmaEditaPosicao.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="posicaoId" value="<?php echo $id?>">
    <label>Nome: </label>
    <input type="text" name="nomePosicao" value="<?php echo $dados['posicaoNome']?>"><br>
    <br><label>Posição no Campo:</label>
    <select name="campoPosicao">
        <option value="-1">Escolha a posicao...</option>
        <option value="1">Guarda redes</option>
        <option value="2">Defesa</option>
        <option value="3">Médio</option>
        <option value="4">Avançado</option>
    </select>
    <input type="Submit" value="Edita"><br>