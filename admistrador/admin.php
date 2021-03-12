<?php
include_once("../includes/body.inc.php");
top_admin();
?>
<div class="container" >

	<table class='table table-striped'  width="100%" align="center" >
		<tr>
			<td colspan="12" align="center"><h1>Admin </h1></td>
		</tr>
		<tr>
			<td><a href="admin_equipas.php"><button type="button" class="btn btn-success">Equipas</button></a>
				<a href="admin_noticias.php"><button type="button" class="btn btn-success">Noticias</button></a>
                <a href="admin_paises.php"><button type="button" class="btn btn-success">Paises</button></a>
                <a href="admin_jogadores.php"><button type="button" class="btn btn-success">Jodadores</button></a>
                <a href="admin_posicoes.php"><button type="button" class="btn btn-success">Posições</button></a>
                <a href="admin_treinadores.php"><button type="button" class="btn btn-success">Treinadores</button></a>
		</tr>
		<tr>
		<tr>
			<td colspan="1">1</td>
			<td align="left" colspan="2"><img  src="images/sporting.jpg" width="30" sizes="10px;10px" ></td>
			<td colspan="2"><a href="sporting.php">Sporting</a></td>
			<td colspan="1">14</td>
			<td colspan="1">11</td>
			<td colspan="1">3</td>
			<td colspan="1">0</td>
			<td colspan="1">31</td>
			<td colspan="1">9</td>
			<td colspan="1">36</td>
		</tr>

		</tr>

	</table>
</div>
<?php
bot_admin();
?>