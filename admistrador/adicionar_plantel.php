<?php
include_once("../includes/body.inc.php");
top_admin();
$id = intval($_GET['id']);
$sql="select * from equipas where equipaId=$id";
?>
<div class="container" align="center" >


		<div>
			<h1 align="center">Adicionar Plantel </h1>
		</div>

		<div align="left">
			<a href="admin_plantel.php"><button type="button" class="btn btn-success">Back</button></a>
		</div>
    <br>
        <div align="left">
        <form action="confirmaNovoPlantel.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <select name="equipaJogadorJogador">
                <option value="-1">Escolha a Jogador...</option>
                <?php
                $sql="select * from jogadores order by jogadorNome";
                $result=mysqli_query($con,$sql);
                while ($dados=mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
                    <?php
                }

                ?>
            </select>
            <br>
                    <select name="equipaJogadorPosicao">
                        <option value="-1">Escolha a Posicao...</option>
                        <?php
                        $sql="select * from posicoes order by posicaoNome";
                        $result=mysqli_query($con,$sql);
                        while ($dados=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dados['posicaoId']?>"><?php echo $dados['posicaoNome']?></option>
                            <?php
                        }

                        ?>
                    </select>
                        <br>
        <label>Numero: </label>
        <input type="text" name="numeroJogador"><br>

        <input type="Submit" value="Adiciona"><br>
        </div>
    </div>

<?php
bot_admin();
?>