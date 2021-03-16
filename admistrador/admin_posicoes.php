<?php
include_once("../includes/body.inc.php");
top_admin();
$txt = addslashes($_POST['txt']);
$sql = "Select * from posicoes where posicaoNome LIKE '$txt%'";

$result = mysqli_query($con, $sql);
?>
    <script>
        function confirmaElimina(id) {
            $.ajax({
                url:"AJAX/AJAXGetNamePosicao.php",
                type:"post",
                data:{
                    idPais:id
                },
                success:function (result){
                    if(confirm('Confirma que deseja eliminar o pais:'+result+"?"))
                        window.location="eliminaPosicao.php?id=" + id;
                }
            })
        };

        $('document').ready(function (){
            $('#search').keyup(function (){
                fillTablePosicao(this.value);
            });
            fillTablePosicao();
        })
    </script>
</div>
<div class="container" align="center">
    <h1>Lista dos Posi��es</h1>
    <tr>
        <td><a href="admin_equipas.php"><button type="button" class="btn btn-success">Equipas</button></a>
            <a href="admin_noticias.php"><button type="button" class="btn btn-success">Noticias</button></a>
            <a href="admin_paises.php"><button type="button" class="btn btn-success">Paises</button></a>
            <a href="admin_jogadores.php"><button type="button" class="btn btn-success">Jodadores</button></a>
            <a href="admin_posicoes.php"><button type="button" class="btn btn-success">Posi��es</button></a>
            <a href="admin_treinadores.php"><button type="button" class="btn btn-success">Treinadores</button></a>
            <a href="admin_plantel.php"><button type="button" class="btn btn-success">Plantel</button></a>
    </tr>
    <br>
    Pesquisar:<br><input type="text" id="search">

    </div>
    <table  class='table table-striped' align="center" width="100%">
        <tr>
            <td colspan="5" align='right'>
                <a href="adicionar_posicoes.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
            </td>
        </tr>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Posi��o do Campo</th>
            <th colspan="2">op&ccedil&otildees</th>
        </tr>

        <?php
        while ($dados = mysqli_fetch_array($result)) {
            ?>

            <tr>
                <td><?php echo $dados['posicaoId'] ?></td>
                <td><?php echo $dados['posicaoNome'] ?></td>
                <td><?php echo $dados['posicaoCampo'] ?></td>
                <td><a href="editaPosicoes.php?id=<?php echo $dados['posicaoId'] ?>"> <i class="fas fa-edit text-primary"></i></a></td>
                <td><a href="#" onclick="confirmaElimina(<?php echo $dados['posicaoId'] ?>);"> <i class="fas fa-trash  text-danger"></i></a></td>
            </tr>
            <?php
        }
        ?>

    </table>
<?php

bot_admin();
?>