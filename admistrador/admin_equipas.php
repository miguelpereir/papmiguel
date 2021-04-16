<?php
include_once("../includes/body.inc.php");
top_admin();
$id = intval($_GET['id']);
$txt = addslashes($_POST['txt']);
$sql = "Select * from equipas where equipaNome LIKE '$txt%'";

$result = mysqli_query($con, $sql);

?>
    <script>
        function confirmaElimina(id) {
            $.ajax({
                url:"AJAX/AJAXGetNameEquipa.php",
                type:"post",
                data:{
                    idPais:id
                },
                success:function (result){
                    if(confirm('Confirma que deseja eliminar a equipa:'+result+"?"))
                        window.location="eliminaEquipa.php?id=" + id;
                }
            })
        };

    </script>

    <div class="container" align="center">
        <h1>Lista das Equipas</h1>
        Pesquisar:<br><input  type="text" id="search">
        <table  class='table table-striped' align="center" width="100%">
            <tr>
                <td colspan="11" align='right'>
                    <a href="admin_treinadores.php"><i class='fas fa-clipboard text-secondary'> Treinadores</i></a>
                    <a href="adicionar_equipas.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
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

                <th colspan="2">op&ccedil&otildees</th>
            </tr>

            <?php
            while ($dados = mysqli_fetch_array($result)) {
                ?>

                <tr>
                    <td><?php echo $dados['equipaId'] ?></td>
                    <td><?php echo $dados['equipaNome'] ?></td>
                    <td><img width='90' src="../<?php echo $dados['equipaEmblemaURL'] ?>"></td>
                    <td><?php echo $dados['equipaAnoFundacao'] ?></td>
                    <td><?php echo $dados['equipaEstadioNome'] ?></td>
                    <td><img width="90" src="../<?php echo $dados['equipaEstadioURL'] ?>"></td>
                    <td><?php echo $dados['equipaHistoria'] ?></td>
                    <td><?php echo $dados['equipaPresidente'] ?></td>
                    <td><a href="admin_plantel.php?id=<?php echo $dados['equipaId'] ?>"> <i class="fas fa-eye text-warning"></i></a></td>
                    <td><a href="editaEquipa.php?id=<?php echo $dados['equipaId'] ?>"> <i class="fas fa-edit text-primary"></i></a></td>
                    <td><a href="#" onclick="confirmaElimina(<?php echo $dados['equipaId'] ?>);"> <i class="fas fa-trash  text-danger"></i></a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>

<?php
bot_admin();
?>