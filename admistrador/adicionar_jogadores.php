<?php
include_once("../includes/body.inc.php");
top_admin();
?>
<div class="container" align="center" >


		<div>
			<h1 align="center">Adicionar Pais </h1>
		</div>

		<div align="left">
			<a href="admin_jogadores.php"><button type="button" class="btn btn-success">Back</button></a>
		</div>
    <br>
        <div align="left">
        <form action="confirmaNovoJogador.php" method="post" enctype="multipart/form-data">
        <label>Nome: </label>
        <input type="text" name="nomeJogador"><br>
        <label>Data de nascimento:</label>
            <input type="date" name="dataJogador">

            <br><label>Foto:</label>
        <input type="file" name="fotoJogador"><br>
            <select name="jogadorPais">
                <option value="-1">Escolha a pais...</option>
                <?php
                $sql="select * from paises order by paisNome";
                $result=mysqli_query($con,$sql);
                while ($dados=mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $dados['paisId']?>"><?php echo $dados['paisNome']?></option>
                    <?php
                }


                ?>

        <input type="Submit" value="Adiciona"><br>
        </div>
    </div>

<?php
bot_admin();
?>