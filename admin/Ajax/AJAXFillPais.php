<?php
// dados na base de dados
include_once("../../includes/body.inc.php"); //precisa do ../
$txt = addslashes($_POST['txt']);
$sql = "Select * from paises where paisNome LIKE '$txt%'";

$result = mysqli_query($con, $sql);

?>
<table class='table table-striped' align="center" width="100%">
    <tr>
        <td colspan="5" align='right'>
            <a  class='btn btn-primary' href="jogadores.php"><i> Back</i></a>
            <a href="adicionaPais.php"><i class='btn btn-success'> Adiciona</i></a>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Imagem</th>
        <th colspan="2">op&ccedil&otildees</th>
    </tr>
    <?php
    while ($dados = mysqli_fetch_array($result)) {
        ?>

        <tr>
            <td><?php echo $dados['paisId'] ?></td>
            <td><?php echo $dados['paisNome'] ?></td>
            <td><img width='90' src="../<?php echo $dados['paisBandeiraURL'] ?>"></td>
            <td><a href="editaPais.php?id=<?php echo $dados['paisId'] ?>"> <i class="btn btn-primary">Edita</i></a></td>
            <td><a href="#" onclick="confirmaEliminaPais(<?php echo $dados['paisId'] ?>);"> <i class="btn btn-danger">Elimina</i></a></td>
        </tr>
        <?php
    }
    ?>


</table>
