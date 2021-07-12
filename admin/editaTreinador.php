<?php
include_once("../includes/body.inc.php");
top_admin(TRAINER);
$id = intval($_GET['id']);

$sql = "select * from treinadores where treinadorId=$id";
$result = mysqli_query($con, $sql);
$resultTreinadores = mysqli_query($con, $sql);
$dadosTreinadores = mysqli_fetch_array($resultTreinadores);
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
            <h1 align="center">Edita treinador </h1>
        </div>
        <div class="row" align="left">
            <form action="confirmaEditaTreinador.php" method="post" enctype="multipart/form-data">
                <div class="col-md-11">
                    <a href="treinadores.php">
                        <button type="button" class="btn btn-black">Back</button>
                    </a>
                </div>
                <div class="col-md-01">
                    <input type="Submit" class="btn btn-primary" value="Edita"><br>
                </div>

                <div class="col-md-1"></div>
                <div class="col-md-5">

                    <input type="hidden" name="treinadorId" value="<?php echo $id ?>">
                    <label>Nome: </label>
                    <input type="text" name="nomeTreinador"
                           value="<?php echo $dadosTreinadores['treinadorNome'] ?>"><br>
                    <label>Equipa:</label>
                    <select name="equipaTreinador">
                        <option value="-1">Escolha o equipa...</option>
                        <?php
                        $sql = "select * from equipas order by equipaNome";
                        $resultEquipas = mysqli_query($con, $sql);
                        while ($dadosEquipas = mysqli_fetch_array($resultEquipas)) {
                            ?>
                            <option value="<?php echo $dadosEquipas['equipaId'] ?>"
                                <?php
                                if ($dadosTreinadores['treinadorEquipaId'] == $dadosEquipas['equipaId'])
                                    echo " selected ";
                                ?>
                            >
                                <?php echo $dadosEquipas['equipaNome'] ?>
                            </option>
                            <?php
                        }


                        ?>
                    </select>
                </div>

                <div class="col-md-5">
                    <div class="image-upload">
                        <label>Foto:</label>
                        <label for="file-input"><br>
                            <img href="#" src="../<?php echo $dadosTreinadores['treinadorFotoURL'] ?>" id="output_image"  style="width: 150%;" />
                        </label>
                        <input id="file-input" class="custom-file-upload" type="file" accept="image/*" name="fotoTreinador" onchange="preview_image(event)" style="color: darkgray">
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
