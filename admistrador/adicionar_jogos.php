<?php
include_once("../includes/body.inc.php");
top_admin();
?>
    <div class="container" align="center">


        <div>
            <h1 align="center">Adicionar Jogo </h1>
        </div>

        <div align="left">
            <a href="admin_jogos.php">
                <button type="button" class="btn btn-success">Back</button>
            </a>
        </div>
        <br>
        <div align="left">
            <form action="confirmaNovoJogo.php" method="post" enctype="multipart/form-data">
                <select name="equipaJogoCasa">
                    <option value="-1">Escolha a equipa Casa...</option>
                    <?php
                    $sql = "select * from equipas order by equipaNome";
                    $result = mysqli_query($con, $sql);
                    while ($dados = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $dados['equipaId'] ?>"><?php echo $dados['equipaNome'] ?></option>
                        <?php
                    }


                    ?>
                </select>
                <br>
                <select name="equipaJogoFora">
                    <option value="-1">Escolha a equipa Fora...</option>
                    <?php
                    $sql = "select * from equipas order by equipaNome";
                    $result = mysqli_query($con, $sql);
                    while ($dados = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $dados['equipaId'] ?>"><?php echo $dados['equipaNome'] ?></option>
                        <?php
                    }


                    ?>
                </select>
                <br>
                <label>Data:</label>
                <input type="date" name="dataJogo">
                <br>


            <input type="Submit" value="Adiciona"><br>
            </form>
        </div>
    </div>

<?php
bot_admin();
?>