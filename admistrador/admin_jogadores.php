<?php
include_once("../includes/body.inc.php");
top_admin();
//$txt = addslashes($_POST['txt']);
$sql = "Select * from jogadores inner join paises on jogadorPaisID=paisID";

$result = mysqli_query($con, $sql);
?>
    <script>
        function confirmaElimina(id) {
            $.ajax({
                url: "AJAX/AJAXGetNameJogador.php",
                type: "post",
                data: {
                    idPais: id
                },
                success: function (result) {
                    if (confirm('Confirma que deseja eliminar o jogador:' + result + "?"))
                        window.location = "eliminaJogador.php?id=" + id;
                }
            })
        };

        $('document').ready(function () {
            $('#search').keyup(function () {
                fillTableJogadores(this.value);
            });
            fillTableJogadores();
        })
    </script>
    <div class="container" align="center">
        <h1>Lista dos Jogadores</h1>
        Pesquisar:<br><input type="text" id="search">
        <div id="tableContent">

        </div>

    </div>
<?php

bot_admin(JOGADORES);
?>