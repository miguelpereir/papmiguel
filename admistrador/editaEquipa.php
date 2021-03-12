<?php
include_once ("../includes/body.inc.php");

$id=intval($_GET['id']);
$sql="select * from equipas where equipaId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<h1>Editar Equipa</h1>
<form action="confirmaEditaEquipa.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="equipaId" value="<?php echo $id?>">
    <label>Nome: </label>
    <input type="text" name="nomeEquipa" value="<?php echo $dados['equipaNome']?>"><br>
    <label>Emblema:</label><br>
    <img src="../<?php echo $dados['equipaEmblemaURL']?>"><br>
    <input type="file" name="emblemaEquipa"><br>
    <label>Ano de Fundação: </label>
    <input type="text" name="anoEquipa" value="<?php echo $dados['equipaAnoFundacao']?>"><br>
    <label>Nome do Estádio: </label>
    <input type="text" name="nomeEstadio" value="<?php echo $dados['equipaEstadioNome']?>"><br>
    <label>Foto do Estádio:</label>
    <img src="../<?php echo $dados['equipaEstadioURL']?>"><br>
    <input type="file" name="fotoEstadio"><br>
    <label>Historia: </label>
    <textarea name="historiaEquipa" id="" cols="50" rows="5"><?php echo $dados['equipaHistoria']?> </textarea><br>
    <label>Presidente:</label>
    <input type="text" name="presidenteEquipa" value="<?php echo $dados['equipaPresidente']?>"><br>


    <input type="Submit" value="Edita"><br>