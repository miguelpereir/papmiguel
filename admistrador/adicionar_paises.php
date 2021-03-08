<?php
include_once("../includes/body.inc.php");
top_admin();
?>
<div class="container" align="center" >


		<div>
			<h1 align="center">Adicionar Pais </h1>
		</div>

		<div align="left">
			<a href="admin_paises.php"><button type="button" class="btn btn-success">Back</button></a>
		</div>
    <br>
        <div align="left">
        <form action="confirmaNovoPais.php" method="post" enctype="multipart/form-data">
        <label>Nome: </label>
        <input type="text" name="nomePais"><br>
        <label>Log&oacutetipo:</label>
        <input type="file" name="logoPais"><br>

        <input type="Submit" value="Adiciona"><br>
        </div>
    </div>

<?php
bot_admin();
?>