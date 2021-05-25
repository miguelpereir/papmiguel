<?php
// dados na base de dados
include_once("../../includes/body.inc.php"); //precisa do ../
$txt = addslashes($_POST['txt']);
$sql = "Select * from noticias where noticiaTitulo LIKE '%$txt%'";

$result = mysqli_query($con, $sql);

?>
<table  class='table table-striped' align="center" width="100%">
    <tr>
        <td colspan="10" align='right'>
            <a href="adicionar_noticias.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Sub Titulo</th>
        <th>Imagem</th>
        <th>Descrição</th>
        <th>Imagem de Capa</th>
        <th>Data</th>
        <th colspan="2">op&ccedil&otildees</th>
    </tr>

    <?php
    while ($dados = mysqli_fetch_array($result)) {
        ?>

        <tr>
            <td><?php echo $dados['noticiaId'] ?></td>
            <td><?php echo $dados['noticiaTitulo'] ?></td>
            <td><?php echo $dados['noticiaSubTitulo'] ?></td>
            <td><img width='90' src="../<?php echo $dados['noticiaImagemURL'] ?>"></td>
            <td><?php echo $dados['noticiaDescricao'] ?></td>
            <td><img width="90" src="../<?php echo $dados['noticiaCapaURL'] ?>"></td>
            <td><?php echo $dados['noticiaData'] ?></td>
            <td><a href="editaNoticia.php?id=<?php echo $dados['noticiaId'] ?>"> <i class="fas fa-edit text-primary"></i></a></td>
            <td><a href="#" onclick="confirmaEliminaNoticia(<?php echo $dados['noticiaId'] ?>);"> <i class="fas fa-trash  text-danger"></i></a></td>
        </tr>
        <?php
    }
    ?>
</table>


