<?php
include_once("../includes/body.inc.php");
top_admin(TRAINER);
$id = intval($_GET['id']);

$sql = "select * from jogadores where jogadorId=$id";
$result = mysqli_query($con, $sql);
$resultJogadores = mysqli_query($con, $sql);
$dadosJogadores = mysqli_fetch_array($resultJogadores);
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
            <h1 align="center">Edita Jogador </h1>
        </div>
        <div class="row" align="left">
            <form action="confirmaEditaJogador.php" method="post" enctype="multipart/form-data">
                <div class="col-md-11">
                    <a href="jogadores.php">
                        <button type="button" class="btn btn-black">Back</button>
                    </a>
                </div>
                <div class="col-md-01">
                    <input type="Submit" class="btn btn-primary" value="Edita"><br>
                </div>

                <div class="col-md-1"></div>
                <div class="col-md-5">

                    <input type="hidden" name="jogadorId" value="<?php echo $id ?>">
                    <label>Nome: </label>
                    <input type="text" name="nomeJogador"
                           value="<?php echo $dadosJogadores['jogadorNome'] ?>"><br>
                    <label>Pais:</label>
                    <select name="jogadorPais">
                        <option value="-1">Escolha o pais...</option>
                        <?php
                        $sql = "select * from paises order by paisNome";
                        $resultPaises = mysqli_query($con, $sql);
                        while ($dadosPaises = mysqli_fetch_array($resultPaises)) {
                            ?>
                            <option value="<?php echo $dadosPaises['paisId'] ?>"
                                <?php
                                if ($dadosJogadores['jogadorPaisId'] == $dadosPaises['paisId'])
                                    echo " selected ";
                                ?>
                            >
                                <?php echo $dadosPaises['paisNome'] ?>
                            </option>
                            <?php
                        }


                        ?>
                    </select>
                    <label>Data:</label>
                    <input type="date" name="dataJogador"
                           value="<?php echo $dadosJogadores['jogadorDataNascimento'] ?>"><br>
                </div>

                <div class="col-md-5">
                    <div class="image-upload">
                        <label>Foto:</label>
                        <label for="file-input"><br>
                            <img href="#" src="../<?php echo $dadosJogadores['jogadorFotoURL'] ?>" id="output_image"  style="width: 150%;" />
                        </label>
                        <input id="file-input" class="custom-file-upload" type="file" accept="image/*" name="fotoJogador" onchange="preview_image(event)" style="color: darkgray">
                    </div>
                </div>

                <div class="col-md-1"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
bottom_admin();
?>
