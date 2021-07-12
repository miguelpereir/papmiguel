<?php
// dados na base de dados
include_once("../../includes/body.inc.php"); //precisa do ../
$txt = addslashes($_POST['txt']);
$sql = "Select * from equipas where equipaNome LIKE '%$txt%'";

$result = mysqli_query($con, $sql);

?>
<table  class='table table-striped align-middle' width="100%">
    <tr>
        <td colspan="12" align='right'>
        <a href="treinadores.php"><i class='btn btn-warning'> Treinadores</i></a>
        <a href="adicionaEquipa.php"><i class='btn btn-success'> Adiciona</i></a>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Emblema</th>
        <th>Ano</th>
        <th>Nome do Estadio</th>
        <th>Foto do Estadio</th>
        <th>Historia</th>
        <th>Presidente</th>

        <th colspan="3"  >Opções</th>
    </tr>

    <?php
    while ($dados = mysqli_fetch_array($result)) {
        ?>

        <tr align="middle">
            <td><?php echo $dados['equipaId'] ?></td>
            <td><?php echo $dados['equipaNome'] ?></td>
            <td><img width='90' src="../<?php echo $dados['equipaEmblemaURL'] ?>"></td>
            <td><?php echo $dados['equipaAnoFundacao'] ?></td>
            <td><?php echo $dados['equipaEstadioNome'] ?></td>
            <td><img width="90" src="../<?php echo $dados['equipaEstadioURL'] ?>"></td>
            <td><?php echo substr($dados['equipaHistoria'], 0,100)."(..)" ?></td>
            <td><?php echo $dados['equipaPresidente'] ?></td>
            <td><a href="plantel.php?id=<?php echo $dados['equipaId'] ?>"> <i class="btn btn-info">Plantel</i></a></td>
            <td><a href="editaEquipa.php?id=<?php echo $dados['equipaId'] ?>"> <i class="btn btn-primary">Editar</i></a></td>
            <td><a href="#" onclick="confirmaEliminaEquipa(<?php echo $dados['equipaId'] ?>);"> <i class="btn btn-danger">Eliminar</i></a></td>
        </tr>
        <?php
    }
    ?>
</table>
