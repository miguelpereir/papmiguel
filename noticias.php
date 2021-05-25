<?php
include_once("includes/body.inc.php");
top();
$sql = "Select * from noticias";

$result = mysqli_query($con, $sql);
?>

<div class="container" align="center">
	<h1>Noticias</h1>
	<table class="table table-responsive">
		<tr>
			<td colspan="6" align="right">
				<div id="divBusca">
					<img src="images/search3.png" alt="Buscar..."/>
					<input type="text" id="txtBusca" placeholder="Buscar..."/>
					<button id="btnBusca">Buscar</button>
				</div>
			</td>
		</tr>
		<br>

<?php
while ($dados = mysqli_fetch_array($result)) {
    ?>
        <tr>
			<div class="linha"></div>
				<td>
					<a href="noticia.php?id=<?php echo $dados['noticiaId'] ?>"><img width="200" src="<?php echo $dados['noticiaCapaURL'] ?>" alt=""></a>
				</td>
				<td>
					<a href="noticia.php?id=<?php echo $dados['noticiaId'] ?>"><h2 align="left"><?php echo $dados['noticiaTitulo'] ?></h2></a>
				<h4><?php echo $dados['noticiaSubTitulo'] ?></h4>

					<br>
					<br>
                    <br>
					<br>
                    <br>
					<h6><?php echo $dados['noticiaData'] ?></h6>
				</td>
    </tr>
    <?php
}
?>




	</table>

</div>

<?php
bot();
?>