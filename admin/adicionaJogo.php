<?php
include_once("../includes/body.inc.php");
top_admin(TRAINER);
?>
<link href="../css/admin.css" rel="stylesheet">
<style>
    .image-upload > input {
        display: none;
    }

</style>

<script>
    function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<section id="contant" class="contant main-heading team">
    <div class="container" align="center">


        <div>
            <h1 align="center">Adicionar Jogo</h1>
        </div>

        <div class="row" align="left">
            <form action="confirmaNovoJogo.php" method="post" enctype="multipart/form-data">
                <div class="col-md-10">
                    <a href="jogos.php">
                        <button type="button" class="btn btn-black">Back</button>
                    </a>
                </div>
                <div class="col-md-02">
                    <input type="Submit" class="btn btn-success" value="Adiciona"><br>
                </div>

                <br>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <label> Equipa: </label>
                    <select name="equipaJogoCasa">
                        <option value="-1">Escolha a equipa casa...</option>
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
                    <label>Resultado:</label>

                    <input type="text" name="equipaGoloCasa" placeholder="Golos Casa">
                    <label>Data:</label><input type="date" name="jogoData">
                </div>
                <div class="col-md-5">
                    <label> Equipa: </label>
                    <select name="equipaJogoFora">
                        <option value="-1">Escolha a equipa fora...</option>
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
                    <br>
                    <br>
                    <input type="text" name="equipaGoloFora" placeholder="Golos Fora">
                </div>

                <div class="col-md-1"></div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php
bottom_admin();
?>
