<?php
// dados na base de dados
include_once("../../includes/body.inc.php"); //precisa do ../
$id = intval($_POST['id']);
$txt = addslashes($_POST['txt']);
$sql = "Select * from equipajogadores inner join jogadores on equipaJogadorJogadorId=jogadorId
                inner join equipas on equipaJogadorEquipaId=equipaId
                inner join posicoes on equipaJogadorPosicaoId=posicaoId
                where jogadorNome LIKE '%".$txt."%'";
if($id!=-1)
    $sql.=" and equipaId= $id";
$result = mysqli_query($con, $sql);

?>
<table  class='table table-striped' align="center" width="100%">
    <tr>
        <td colspan="1" align='left'>
            <a href="equipas.php"><i class='btn btn-black'> Back</i></a>
        </td>
        <td colspan="4" align='right'>
            <a href="edita_ultimo11.php?id=<?php echo $id ?>"><i class='btn btn-info'> Ultimo 11</i></a>
            <a href="adicionaPlantel.php?id=<?php echo $id ?>"><i class='btn btn-success'> Adiciona</i></a>
        </td>
    </tr>
    <tr>
        <th>Jogador</th>
        <th>Posição</th>
        <th>Numero</th>
        <th colspan="1">op&ccedil&otildees</th>
    </tr>

    <?php
    while ($dados = mysqli_fetch_array($result)) {
        ?>

        <tr>
            <td><?php echo $dados['jogadorNome'] ?></td>
            <td><?php echo $dados['posicaoNome'] ?></td>
            <td><?php echo $dados['equipaJogadorNumero'] ?></td>
            <td><a href="editaPlantel.php?idJog=<?php echo $dados['jogadorId'] ?>&idEq=<?php echo $id ?>"> <i class="btn btn-primary">Edita</i></a></td>
            <td><a href="#" onclick="confirmaEliminaPlantel(<?php echo $dados['equipaJogadorNumero'] ?>);"><i class="btn btn-danger">Elimina</i></a></td>
        </tr>
        <?php
    }
    ?>

</table>
