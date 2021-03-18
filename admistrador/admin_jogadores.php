<?php
include_once("../includes/body.inc.php");
top_admin();
$txt = addslashes($_POST['txt']);
$sql = "Select * from jogadores inner join paises on jogadorPaisID=paisID  where jogadorNome LIKE '$txt%'";

$result = mysqli_query($con, $sql);
?>
    <script>
        function confirmaElimina(id) {
            $.ajax({
                url:"AJAX/AJAXGetNameJogador.php",
                type:"post",
                data:{
                    idPais:id
                },
                success:function (result){
                    if(confirm('Confirma que deseja eliminar o jogador:'+result+"?"))
                        window.location="eliminaJogador.php?id=" + id;
                }
            })
        };

        $('document').ready(function (){
            $('#search').keyup(function (){
                fillTableJogadores(this.value);
            });
            fillTableJogadores();
        })
    </script>
<div class="container" align="center">
    <h1>Lista dos paises</h1>
    <tr>
        <td><a href="admin_equipas.php"><button type="button" class="btn btn-success">Equipas</button></a>
            <a href="admin_noticias.php"><button type="button" class="btn btn-success">Noticias</button></a>
            <a href="admin_paises.php"><button type="button" class="btn btn-success">Paises</button></a>
            <a href="admin_jogadores.php"><button type="button" class="btn btn-success">Jodadores</button></a>
            <a href="admin_posicoes.php"><button type="button" class="btn btn-success">Posições</button></a>
            <a href="admin_treinadores.php"><button type="button" class="btn btn-success">Treinadores</button></a>
            <a href="admin_plantel.php"><button type="button" class="btn btn-success">Plantel</button></a>
            <a href="admin_ultimo11.php"><button type="button" class="btn btn-success">Ultimo 11</button></a>

    </tr>
    <br>
    Pesquisar:<br><input type="text" id="search">
</div>
    <table  class='table table-striped' align="center" width="100%">
        <tr>
            <td colspan="7" align='right'>
                <a href="adicionar_jogadores.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
            </td>
        </tr>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Data</th>
            <th>Foto</th>
            <th>Pais</th>
            <th colspan="2">op&ccedil&otildees</th>
        </tr>

        <?php
        while ($dados = mysqli_fetch_array($result)) {
            ?>

            <tr>
                <td><?php echo $dados['jogadorId'] ?></td>
                <td><?php echo $dados['jogadorNome'] ?></td>
                <td><?php echo $dados['jogadorDataNascimento'] ?></td>
                <td><img width='90' src="../<?php echo $dados['jogadorFotoURL'] ?>"></td>
                <td><?php echo $dados['paisNome'] ?></td>
                <td><a href="editaJogador.php?id=<?php echo $dados['jogadorId'] ?>"> <i class="fas fa-edit text-primary"></i></a></td>
                <td><a href="#" onclick="confirmaElimina(<?php echo $dados['jogadorId'] ?>);"> <i class="fas fa-trash  text-danger"></i></a></td>
            </tr>
            <?php
        }
        ?>

    </table>
<?php

bot_admin();
?>