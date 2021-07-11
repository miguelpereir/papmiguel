<?php
include_once("../includes/body.inc.php");
top_admin(COUNTRYS);
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
            <h1 align="center">Adicionar Pais </h1>
        </div>

        <div class="row" align="left">
            <form action="confirmaNovoPais.php" method="post" enctype="multipart/form-data">
                <div class="col-md-10">
                    <a href="paises.php">
                        <button type="button" class="btn btn-primary">Back</button>
                    </a>
                </div>
                <div class="col-md-02">
                    <input type="Submit" class="btn btn-success" value="Adiciona"><br>
                </div>

                <br>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <label>Nome: </label>
                    <input type="text" name="nomePais"><br>
                </div>
                <div class="col-md-5">
                    <div class="image-upload">
                        <label>Foto:</label>
                        <label for="file-input"><br>
                            <img href="#" src="../images/add%20imagem.png" id="output_image"  style="width: 150%;" />
                        </label>
                        <input id="file-input" class="custom-file-upload" type="file" accept="image/*" name="logoPais" onchange="preview_image(event)" style="color: darkgray">
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
