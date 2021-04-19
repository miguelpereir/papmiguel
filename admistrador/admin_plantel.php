<?php
include_once("../includes/body.inc.php");
top_admin();
$id = intval($_GET['id']);
//$txt = addslashes($_POST['txt']);
$sql = "Select * from (((equipajogadores inner join jogadores on equipaJogadorJogadorId=jogadorId)
    inner join equipas on equipaJogadorEquipaId=equipaId)
    inner join posicoes on equipaJogadorPosicaoId=posicaoId) where equipaId= $id";
$result = mysqli_query($con, $sql);
?>
    <script>
        function confirmaElimina(id) {
            $.ajax({
                url:"AJAX/AJAXGetNamePlantel.php",
                type:"post",
                data:{
                    idPais:id
                },
                success:function (result){
                    if(confirm('Confirma que deseja eliminar o plantel:'+result+"?"))
                        window.location="eliminaPlantel.php?id=" + id;
                }
            })
        };

        $('document').ready(function (){
            $('#search').keyup(function (){
                fillTablePlantel(this.value);
            });
            fillTablePlantel();
        })
    </script>
</div>
<div class="container" align="center">
    <h1>Lista do Plantel</h1>
    Pesquisar:<br><input type="text" id="search">


    <table  class='table table-striped' align="center" width="100%">
        <tr>
            <td colspan="2" align='left'>
                <a href="admin_equipas.php"><i class='fas fa-arrow-left text-black'> Back</i></a>
            </td>
            <td colspan="3" align='right'>
                <a href="admin_posicoes.php?id=<?php echo $id ?>"><i class='fas fa-map-marker text-warning'> Posições</i></a>
                <a href="edita_ultimo11.php?id=<?php echo $id ?>"><i class='fas fa-image text-info'> Ultimo 11</i></a>
                <a href="adicionar_plantel.php?id=<?php echo $id ?>"><i class='fas fa-plus text-success'> Adiciona</i></a>
            </td>
        </tr>
        <tr>
            <th>Jogador</th>
            <th>Posição</th>
            <th>Numero</th>
            <th colspan="2">op&ccedil&otildees</th>
        </tr>

        <?php
        while ($dados = mysqli_fetch_array($result)) {
            ?>

            <tr>
                <td><?php echo $dados['jogadorNome'] ?></td>
                <td><?php echo $dados['posicaoNome'] ?></td>
                <td><?php echo $dados['equipaJogadorNumero'] ?></td>
                <td><a href="editaPlantel.php?id=<?php echo $id ?>"> <i class="fas fa-edit text-primary"></i></a></td>
                <td><a href="#" onclick="confirmaElimina(<?php echo $dados['equipaJogadorJogadorId'] ?>);"> <i class="fas fa-trash  text-danger"></i></a></td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>
<?php

bot_admin();
?>