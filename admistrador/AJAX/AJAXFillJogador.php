<?php
// dados na base de dados
include_once("../../includes/body.inc.php"); //precisa do ../
$txt = addslashes($_POST['txt']);
$sql = "Select * from jogadores inner join paises on jogadorPaisID=paisID where jogadorNome LIKE '$txt%'";

$result = mysqli_query($con, $sql);

?>
<table  class='table table-striped' align="center" width="100%">
    <tr>
        <td colspan="7" align='right'>
            <a href="admin_paises.php"><i class='fas fa-flag text-warning'> Paises</i></a>
            <a href="adicionar_jogadores.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Data</th>
        <th>Foto</th>
        <th>Pais</th>
        <th colspan="2">op&ccedil&otildees</th>
    </tr>

    <?php
    while ($dados = mysqli_fetch_array($result)) {
        ?>

        <tr>
            <td><?php echo $dados['jogadorId'] ?></td>
            <td><?php echo $dados['jogadorNome'] ?></td>
            <td><?php echo $dados['jogadorDataNascimento'] ?></td>
            <td><img width='90' src="../<?php echo $dados['jogadorFotoURL'] ?>"></td>
            <td><?php echo $dados['paisNome'] ?></td>
            <td><a href="editaJogador.php?id=<?php echo $dados['jogadorId'] ?>"> <i class="fas fa-edit text-primary"></i></a></td>
            <td><a href="#" onclick="confirmaEliminaJogador(<?php echo $dados['jogadorId'] ?>);"> <i class="fas fa-trash  text-danger"></i></a></td>
        </tr>
        <?php
    }
    ?>

</table>
