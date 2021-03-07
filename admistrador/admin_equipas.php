<?php
include_once("../includes/body.inc.php");
top_admin();
?>
<div class="container" align="center" >


		<div>
			<h1 align="center">Admin </h1>
		</div>

		<div align="left">
				<a href="admin_equipas.php"><button type="button" class="btn btn-success">Equipas</button></a>
				<a href="admin_noticias.php"><button type="button" class="btn btn-success">Noticias</button></a>
                <a href="adicionar_paises.php"><button type="button" class="btn btn-success">Paises</button></a>
		</div>
	<br><a href="adicionar_equipa.html"><p align="right">adicionar equipa</p></a>

	<table class='table table-striped'  width="100%" align="center" >
		<tr>
			<th colspan="1">Posição</th>
			<th colspan="1">Imagem</th>
			<th colspan="1">Nome</th>
			<th colspan="1">Jogos</th>
			<th colspan="1">Vitorias</th>
			<th colspan="1">Empates</th>
			<th colspan="1">Derrotas</th>
			<th colspan="1">Golos M.</th>
			<th colspan="1">Golos S.</th>
			<th colspan="1">Pontos</th>
			<th colspan="2"> Opções</th>
		</tr>
		<tr>
			<td colspan="1">1</td>
			<td align="left" ><img  src="../images/sporting.jpg" width="30" sizes="10px;10px" ></td>
			<td>Sporting</td>
			<td>14</td>
			<td>11</td>
			<td>3</td>
			<td>0</td>
			<td>31</td>
			<td>9</td>
			<td>36</td>
			<td><i class="fas fa-edit"></i></td>
			<td><i class="fas fa-trash"></i></td>


		</tr>

	</table>
</div>
<?php
bot_admin();
?>