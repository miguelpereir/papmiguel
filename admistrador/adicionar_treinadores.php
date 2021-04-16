<?php
include_once("../includes/body.inc.php");
top_admin();
?>
<div class="container" align="center" >


		<div>
			<h1 align="center">Adicionar treinador </h1>
		</div>

		<div align="left">
			<a href="admin_treinadores.php"><button type="button" class="btn btn-success">Back</button></a>
		</div>
    <br>
        <div align="left">
        <form action="confirmaNovotreinador.php" method="post" enctype="multipart/form-data">
        <label >Nome: </label>
        <input type="text" name="nomeTreinador"><br>
        <br><label id="name">Foto:</label>
        <input type="file" name="fotoTreinador"><br>
            <select name="equipaTreinador">
                <option value="-1">Escolha a equipa...</option>
                <?php
                $sql="select * from equipas order by equipaNome";
                $result=mysqli_query($con,$sql);
                while ($dados=mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $dados['equipaId']?>"><?php echo $dados['equipaNome']?></option>
                    <?php
                }


                ?>

        <input type="Submit" value="Adiciona"><br>
        </div>
    </div>

<?php
bot_admin();
?>