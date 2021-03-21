<?php
include_once ("../includes/body.inc.php");
top_admin();
$id=intval($_GET['id']);
$sql="select * from equipas where equipaId=$id";
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
    <script>
        function preview_image_2(event)
        {
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('output_image_2');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    <div class="container" align="center" >


        <div>
            <h1 align="center">Edita Equipa </h1>
        </div>

        <div align="left">
            <a href="admin_equipas.php"><button type="button" class="btn btn-success">Back</button></a>
        </div>
        <br>
        <div align="left">
            <form action="confirmaEditaEquipa.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="equipaId" value="<?php echo $id?>">
                <label>Nome: </label>
                <input type="text" name="nomeEquipa" value="<?php echo $dados['equipaNome']?>"><br>
                <label>Emblema:</label>
                <img width="200" id="output_image" src="../<?php echo $dados['equipaEmblemaURL'] ?>">
                <input type="file" accept="image/*" name="emblemaEquipa" onchange="preview_image(event)" style="color: darkgray">
                <label>Ano de Fundação: </label>
                <input type="text" name="anoEquipa" value="<?php echo $dados['equipaAnoFundacao']?>"><br>
                <label>Nome do Estádio: </label>
                <input type="text" name="nomeEstadio" value="<?php echo $dados['equipaEstadioNome']?>"><br>
                <label>Foto do Estádio:</label>
                <img width="200" id="output_image_2" src="../<?php echo $dados['equipaEstadioURL'] ?>">
                <input type="file" accept="image/*" name="fotoEstadio" onchange="preview_image_2(event)" style="color: darkgray">
                <label>Historia: </label>
                <textarea name="historiaEquipa" id="" cols="50" rows="5"><?php echo $dados['equipaHistoria']?> </textarea><br>
                <label>Presidente:</label>
                <input type="text" name="presidenteEquipa" value="<?php echo $dados['equipaPresidente']?>"><br>

                <input type="Submit" value="Edita"><br>
        </div>
    </div>
<?php
bot_admin();
?>