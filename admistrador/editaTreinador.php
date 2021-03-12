<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);

$sql="select * from treinadores where treinadorId=$id";
$result=mysqli_query($con,$sql);
$resultTreinadores=mysqli_query($con,$sql);
$dadosTreinadores=mysqli_fetch_array($resultTreinadores);

?>
<h1>Editar Jogador</h1>
<form action="confirmaEditaTreinador.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="treinadorId" value="<?php echo $id?>">
    <label>Nome: </label>
    <input type="text" name="nomeTreinador" value="<?php echo $dadosTreinadores['treinadorNome']?>"><br>
    <label>Foto:</label><br>
    <img src="../<?php echo $dadosTreinadores['treinadorFotoURL']?>">
    <input type="file" name="fotoTreinador"><br>
    <select name="equipaTreinador">
        <option value="-1">Escolha o equipa...</option>
        <?php
        $sql="select * from equipas order by equipaNome";
        $resultEquipas=mysqli_query($con,$sql);
        while ($dadosEquipas=mysqli_fetch_array($resultEquipas)){
            ?>
            <option value="<?php echo $dadosEquipas['equipaId']?>"
                <?php
                if($dadosTreinadores['treinadorEquipaId']==$dadosEquipas['equipaId'])
                    echo " selected ";
                ?>
            >
                <?php echo $dadosEquipas['equipaNome']?>
            </option>
            <?php
        }


        ?>
    </select>



    <input type="Submit" value="Edita"><br>