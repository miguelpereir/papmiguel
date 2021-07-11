<?php
include_once("../includes/body.inc.php");
top_admin(PLAYERS);
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
            <h1 align="center">Adicionar treinador </h1>
        </div>

        <div class="row" align="left">
            <form action="confirmaNovoJogador.php" method="post" enctype="multipart/form-data">
                <div class="col-md-10">
                    <a href="jogadores.php">
                        <button type="button" class="btn btn-success">Back</button>
                    </a>
                </div>
                <div class="col-md-02">
                    <input type="Submit" class="btn btn-success" value="Adiciona"><br>
                </div>

                <br>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <label>Nome: </label>
                    <input type="text" name="nomeJogador"><br>
                    <label >Pais:</label>
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
                    </select>
                    <label>Data:</label>
                    <input type="date" name="dataJogador">

                </div>
                <div class="col-md-5">
                    <div class="image-upload">
                        <label>Foto:</label>
                        <label for="file-input"><br>
                            <img href="#" src="../images/add%20imagem.png" id="output_image"  style="width: 150%;" />
                        </label>
                        <input id="file-input" class="custom-file-upload" type="file" accept="image/*" name="fotoJogador" onchange="preview_image(event)" style="color: darkgray">
                    </div>
                </div>

                <div class="col-md-1"></div>

            </form>
        </div>
    </div>
</section>
<?php
bottom_admin();
?>
