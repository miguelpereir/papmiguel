<?php
// dados na base de dados
include_once("../../includes/body.inc.php"); //precisa do ../
$txt = addslashes($_POST['txt']);
$sql = "Select jogos.*, e1.equipaNome as casa, e2.equipaNome as fora 
        from equipas as e1 inner join jogos on e1.equipaId=jogos.jogoCasaEquipaId 
        inner join equipas as e2 on e2.equipaId=jogos.jogoForaEquipaId order by jogoData Asc";
$result = mysqli_query($con, $sql);

?>
<table  class='table table-striped' align="center" width="100%">
    <tr>
        <td colspan="8" align='right'>
            <a href="adicionaJogo.php"><i class='btn btn-success'> Adiciona</i></a>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Equipa Casa</th>
        <th>Equipa Fora</th>
        <th>Golos Casa</th>
        <th>Golos Fora</th>
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
            <td><?php echo $dados['jogoCasaGolos'] ?></td>
            <td><?php echo $dados['jogoForaGolos'] ?></td>
            <td><?php echo $dados['jogoData'] ?></td>
            <td><a href="#" onclick="confirmaEliminaJogo(<?php echo $dados['jogoId'] ?>);"> <i class="btn btn-danger">Elimina</i></a></td>
        </tr>
        <?php
    }
    ?>
</table>
