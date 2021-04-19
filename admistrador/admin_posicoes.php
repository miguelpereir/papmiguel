<?php
include_once("../includes/body.inc.php");
top_admin();
$id = intval($_GET['id']);
//$txt = addslashes($_POST['txt']);
$sql = "Select * from posicoes";

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
    <h1>Lista dos Posições</h1>

    Pesquisar:<br><input type="text" id="search">


    <table  class='table table-striped' align="center" width="100%">
        <tr>
            <td colspan="2" align='left'>
                <a href="admin_plantel.php?id=<?php echo $id ?>"> <i class='fas fa-arrow-left text-black'> Back</i></a>
            </td>
            <td colspan="3" align='right'>
                <a href="adicionar_posicoes.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
            </td>
        </tr>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Posição do Campo</th>
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
</div>
<?php

bot_admin();
?>