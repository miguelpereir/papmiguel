<?php
include_once("../includes/body.inc.php");
top_admin();
?>
<div class="container" align="center" >


		<div>
			<h1 align="center">Adicionar Posicao </h1>
		</div>

		<div align="left">
			<a href="admin_posicoes.php"><button type="button" class="btn btn-success">Back</button></a>
		</div>
    <br>
        <div align="left">
        <form action="confirmaNovaPosicao.php" method="post" enctype="multipart/form-data">
        <label>Nome: </label>
        <input type="text" name="nomePosicao"><br>

            <br><label>Posição no Campo:</label>
            <select name="campoPosicao">
                <option value="-1">Escolha a posicao...</option>
                <option value="1">Guarda redes</option>
                <option value="2">Defesa</option>
                <option value="3">Médio</option>
                <option value="4">Avançado</option>
            </select>
        <input type="Submit" value="Adiciona"><br>
        </div>
    </div>

<?php
bot_admin();
?>