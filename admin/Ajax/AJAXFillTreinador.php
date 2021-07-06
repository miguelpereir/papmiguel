<?php
// dados na base de dados
include_once("../../includes/body.inc.php"); //precisa do ../
$txt = addslashes($_POST['txt']);
$sql = "Select * from treinadores inner join equipas on treinadorEquipaID=equipaID  where treinadorNome LIKE '$txt%'";

$result = mysqli_query($con, $sql);

?>
<table  class='table table-striped' width="100%">
    <tr>
        <td colspan="12" align='right'>
            <a  class='btn btn-primary' href="equipas.php"><i> Back</i></a>
            <a class='btn btn-success' href="adicionaTreinador.php"><i > Adiciona</i></a>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Foto</th>
        <th>Equipa</th>
        <th colspan="2">Opções</th>
    </tr>

    <?php
    while ($dados = mysqli_fetch_array($result)) {
        ?>

        <tr>
            <td><?php echo $dados['treinadorId'] ?></td>
            <td><?php echo $dados['treinadorNome'] ?></td>
            <td><img width='90' src="../<?php echo $dados['treinadorFotoURL'] ?>"></td>
            <td><?php echo $dados['equipaNome'] ?></td>
            <td><a href="editaTreinador.php?id=<?php echo $dados['treinadorId'] ?>"> <i class="btn btn-primary">Editar</i></a></td>
            <td><a href="#" onclick="confirmaEliminaTreinador(<?php echo $dados['treinadorId'] ?>);"> <i class="btn btn-danger">Eliminar</i></a></td>
        </tr>
        <?php
    }
    ?>

</table>