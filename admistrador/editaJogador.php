<?php
include_once("../includes/body.inc.php");
top_admin();
$id = intval($_GET['id']);

$sql = "select * from jogadores where jogadorId=$id";
$result = mysqli_query($con, $sql);
$resultJogadores = mysqli_query($con, $sql);
$dadosJogadores = mysqli_fetch_array($resultJogadores);

?>
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
    <div class="container" align="center">


        <div>
            <h1 align="center">Editar Jogador </h1>
        </div>

        <div align="left">
            <a href="admin_jogadores.php">
                <button type="button" class="btn btn-success">Back</button>
            </a>
        </div>
        <br>
        <div align="left">
            <form action="confirmaEditaJogador.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="jogadorId" value="<?php echo $id ?>">
                <label>Nome: </label>
                <input type="text" name="nomeJogador" value="<?php echo $dadosJogadores['jogadorNome'] ?>"><br>
                <label>Data de nascimento:</label>
                <input type="date" name="dataJogador"
                       value="<?php echo $dadosJogadores['jogadorDataNascimento'] ?>"><br>
                <label>Foto:</label>
                <img width="100" id="output_image" src="../<?php echo $dadosJogadores['jogadorFotoURL'] ?>"><br>
                <input type="file" accept="image/*" name="fotoJogador" onchange="preview_image(event)"
                       style="color: darkgray">
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

                <input type="Submit" value="Adiciona"><br>
        </div>
    </div>

<?php
bot_admin();
?>