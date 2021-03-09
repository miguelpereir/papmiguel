<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);

$sql="select * from paises where canalId=$id";
$resultPaises=mysqli_query($con,$sql);
$dadosPaises=mysqli_fetch_array($resultPaises);

?>
<h1>Editar Pais</h1>
<form action="confirmaEditaPais.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="paisId" value="<?php echo $id?>">
    <label>Nome: </label>
    <input type="text" name="nomePais" value="<?php echo $dadosPaises['paisNome']?>"><br>
    <label>Logótipo:</label><br>
    <img src="../<?php echo $dadosPaises['paisBandeiraURL']?>"><br>
    <input type="file" name="logoPais"><br>


    <input type="Submit" value="Edita"><br>