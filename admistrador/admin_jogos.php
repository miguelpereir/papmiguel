<?php
include_once("../includes/body.inc.php");
top_admin();
//$txt = addslashes($_POST['txt']);
$sql = "Select jogos.*, e1.equipaNome as casa, e2.equipaNome as fora from equipas as e1 inner join jogos on e1.equipaId=jogos.jogoEquipaCasaId inner join equipas as e2 on e2.equipaId=jogos.jogoEquipaForaId";
$result = mysqli_query($con, $sql);
?>
    <script>
    //    $('document').ready(function (){
       //     $('#search').keyup(function (){
     //           fillTableTreinador(this.value);
    //        });
    //        fillTableTreinador();
    //    })
    </script>
<div class="container" align="center">
    <h1>Lista dos Jogos</h1>

    Pesquisar:<br><input type="text" id="search">

    <table  class='table table-striped' align="center" width="100%">
        <tr>
            <td colspan="6" align='right'>
                <a href="adicionar_jogos.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
            </td>
        </tr>
        <tr>
            <th>Id</th>
            <th>Equipa Casa</th>
            <th>Equipa Fora</th>
            <th>Data</th>
            <th colspan="2">op&ccedil&otildees</th>
        </tr>

        <?php
        while ($dados = mysqli_fetch_array($result)) {
            ?>

            <tr>
                <td><?php echo $dados['jogoId'] ?></td>
                <td><?php echo $dados['casa'] ?></td>
                <td><?php echo $dados['fora'] ?></td>
                <td><?php echo $dados['jogoData'] ?></td>
                <td><a href="editajogo.php?id=<?php echo $dados['jogoId'] ?>"> <i class="fas fa-edit text-primary"></i></a></td>
                <td><a href="#" onclick="confirmaEliminaJogo(<?php echo $dados['jogoId'] ?>);"> <i class="fas fa-trash  text-danger"></i></a></td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>
<?php

bot_admin();
?>