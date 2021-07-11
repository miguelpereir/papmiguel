<?php
include_once("../includes/body.inc.php");
top_admin(COUNTRYS);
$id=intval($_GET['id']);
$sql="select * from paises where paisId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
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
            <h1 align="center">Edita Pais </h1>
        </div>
        <div class="row" align="left">
            <form action="confirmaEditaPais.php" method="post" enctype="multipart/form-data">
                <div class="col-md-11">
                    <a href="paises.php">
                        <button type="button" class="btn btn-success">Back</button>
                    </a>
                </div>
                <div class="col-md-01">
                    <input type="Submit" class="btn btn-primary" value="Edita"><br>
                </div>

                <div class="col-md-1"></div>
                <div class="col-md-5">

                    <input type="hidden" name="paisId" value="<?php echo $id ?>">
                    <label>Nome: </label>
                    <input type="text" name="nomePais"
                           value="<?php echo $dados['paisNome'] ?>"><br>

                </div>

                <div class="col-md-5">
                    <div class="image-upload">
                        <label>Foto:</label>
                        <label for="file-input"><br>
                            <img href="#" src="../<?php echo $dados['paisBandeiraURL'] ?>" id="output_image"  style="width: 150%;" />
                        </label>
                        <input id="file-input" class="custom-file-upload" type="file" accept="image/*" name="logoPais" onchange="preview_image(event)" style="color: darkgray">
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
