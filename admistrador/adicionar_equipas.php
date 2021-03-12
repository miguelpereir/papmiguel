<?php
include_once("../includes/body.inc.php");
top_admin();
?>
<div class="container" align="center" >


		<div>
			<h1 align="center">Adicionar Equipa </h1>
		</div>

		<div align="left">
			<a href="admin_equipas.php"><button type="button" class="btn btn-success">Back</button></a>
		</div>
    <br>
        <div align="left">
        <form action="confirmaNovaEquipa.php" method="post" enctype="multipart/form-data">
        <label>Nome: </label>
        <input type="text" name="nomeEquipa"><br>
        <label>Emblema:</label>
        <input type="file" name="emblemaEquipa"><br>
        <label>Ano de Fundação: </label>
        <input type="text" name="anoEquipa"><br>
        <label>Nome do Estádio: </label>
        <input type="text" name="nomeEstadio"><br>
        <label>Foto do Estádio:</label>
        <input type="file" name="fotoEstadio"><br>
        <label>Historia: </label>
        <textarea name="historiaEquipa" id="" cols="50" rows="5"></textarea><br>
        <label>Presidente:</label>
        <input type="text" name="presidenteEquipa"><br>

        <input type="Submit" value="Adiciona"><br>
        </div>
    </div>

<?php
bot_admin();
?>