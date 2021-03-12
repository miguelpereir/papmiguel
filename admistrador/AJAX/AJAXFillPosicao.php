<?php
// dados na base de dados
include_once("../includes/body.inc.php"); //precisa do ../
$txt = addslashes($_POST['txt']);
$sql = "Select * from posicoes where posicaoNome LIKE '$txt%'";

$result = mysqli_query($con, $sql);

?>
<table  class='table table-striped' align="center" width="100%">
    <tr>
        <td colspan="5" align='right'>
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
            <td><a href="editaPosicao.php?id=<?php echo $dados['posicaoId'] ?>"> <i class="fas fa-edit text-primary"></i></a></td>
            <td><a href="#" onclick="confirmaElimina(<?php echo $dados['posicaoId'] ?>);"> <i class="fas fa-trash  text-danger"></i></a></td>
        </tr>
        <?php
    }
    ?>

</table>