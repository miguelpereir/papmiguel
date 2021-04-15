<?php
include_once("../includes/body.inc.php");
top_admin();
$txt = addslashes($_POST['txt']);
$sql = "Select * from treinadores inner join equipas on treinadorEquipaID=equipaID  where treinadorNome LIKE '$txt%'";

$result = mysqli_query($con, $sql);
?>
    <script>
        function confirmaElimina(id) {
            $.ajax({
                url:"AJAX/AJAXGetNameTreinador.php",
                type:"post",
                data:{
                    idPais:id
                },
                success:function (result){
                    if(confirm('Confirma que deseja eliminar o treinador:'+result+"?"))
                        window.location="eliminaTreinador.php?id=" + id;
                }
            })
        };

        $('document').ready(function (){
            $('#search').keyup(function (){
                fillTableTreinador(this.value);
            });
            fillTableTreinador();
        })
    </script>
<div class="container" align="center">
    <h1>Lista dos Treinadores</h1>

    Pesquisar:<br><input type="text" id="search">

    <table  class='table table-striped' align="center" width="100%">
        <tr>
            <td colspan="2" align='left'>
                <a href="admin_jogadores.php"><i class='fas fa-arrow-left text-black'> Back</i></a>
            </td>
            <td colspan="4" align='right'>
                <a href="adicionar_treinadores.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
            </td>
        </tr>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Foto</th>
            <th>Equipa</th>
            <th colspan="2">op&ccedil&otildees</th>
        </tr>

        <?php
        while ($dados = mysqli_fetch_array($result)) {
            ?>

            <tr>
                <td><?php echo $dados['treinadorId'] ?></td>
                <td><?php echo $dados['treinadorNome'] ?></td>
                <td><img width='90' src="../<?php echo $dados['treinadorFotoURL'] ?>"></td>
                <td><?php echo $dados['equipaNome'] ?></td>
                <td><a href="editaTreinador.php?id=<?php echo $dados['treinadorId'] ?>"> <i class="fas fa-edit text-primary"></i></a></td>
                <td><a href="#" onclick="confirmaElimina(<?php echo $dados['treinadorId'] ?>);"> <i class="fas fa-trash  text-danger"></i></a></td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>
<?php

bot_admin();
?>