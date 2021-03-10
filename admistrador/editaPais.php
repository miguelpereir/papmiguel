<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);

$sql="select * from paises where paisId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

?>
<h1>Editar Pais</h1>
<form action="confirmaEditaPais.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="paisId" value="<?php echo $id?>">
    <label>Nome: </label>
    <input type="text" name="nomePais" value="<?php echo $dados['paisNome']?>"><br>
    <label>Logótipo:</label><br>
    <img src="../<?php echo $dados['paisBandeiraURL']?>"><br>
    <input type="file" name="logoPais"><br>


    <input type="Submit" value="Edita"><br>