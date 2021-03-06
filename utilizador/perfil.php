<?php
include_once("../includes/body.inc.php");
top_utilizador();
?>
<!-- /Footer Section -->
<div class="container" id="perfil" >

	<div id="titulo" width="100%" align="center" >
		<td colspan="12" align="center"><h1>Perfil </h1></td>
	</div>

    <br>
	<div >
		<div class="mb-3">
			<label class="form-label">Nome de Utilizador</label>
			<input class="form-control" id="nome" placeholder="ex:.miguelpereira">
		</div>
		<div class="mb-3">
			<label class="form-label">Nome Completo</label>
			<input class="form-control" id="NomeC" placeholder="">
		</div>
		<div>
  	      <label class="form-label">Nacionalidade</label>
   	     <br>
			<select class="form-select" aria-label="Default select example">
 	      	 <option selected>Open this select menu</option>
  	     	 <option value="1">One</option>
  	     	 <option value="2">Two</option>
  	      	 <option value="3">Three</option>
		  	</select>
		</div>
    	<div class="mb-3">
        	<label class="form-label">Foto</label><br>
			<img class="foto" width="100" src="../images/a1.jpg" alt="">
        	<input class="form-control" type="file" id="formFile">
    	</div>
		<div class="mb-3">
			<label class="form-label">Clube Favorito</label>
			<input class="form-control" id="clubeF" >
		</div>
		<div class="mb-3">
			<label class="form-label">Jogador Favorito</label>
			<input class="form-control" id="jogadorF" >
		</div>
		<br>
		<button  type="button" class="btn btn-outline-success">Guardar</button>


	</div>




	<div id="campo" align="center">
		<label  class="form-label">Plantel de sonho</label><br>
		<img width="500" src="../images/campo.png" alt="">
		<br>
		<p align="right">editar...</p>


	</div>




</div>


<?php
bot_utilizador();
?>