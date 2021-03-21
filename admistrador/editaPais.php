<?php
include_once ("../includes/body.inc.php");
top_admin();
$id=intval($_GET['id']);
$sql="select * from paises where paisId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<script>
    function preview_image(event)
    {
        var reader = new FileReader();
        reader.onload = function()
        {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<div class="container" align="center" >


    <div>
        <h1 align="center">Edita Pais </h1>
    </div>

    <div align="left">
        <a href="admin_paises.php"><button type="button" class="btn btn-success">Back</button></a>
    </div>
    <br>
    <div align="left">
        <form action="confirmaEditaPais.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="paisId" value="<?php echo $id?>">
            <label>Nome: </label>
            <input type="text" name="nomePais" value="<?php echo $dados['paisNome']?>"><br>
            <label>Log&oacutetipo:</label>
            <img width="50" id="output_image" src="../<?php echo $dados['paisBandeiraURL']?>"><br>
            <input type="file" accept="image/*" name="logoPais" onchange="preview_image(event)" style="color: darkgray">
            <input type="Submit" value="Edita"><br>
    </div>
</div>
<?php
bot_admin();
?>