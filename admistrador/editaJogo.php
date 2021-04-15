<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);

$sql="select * from jogos where jogoId=$id";
$result=mysqli_query($con,$sql);
$resultJogos=mysqli_query($con,$sql);
$dadosJogos=mysqli_fetch_array($resultJogos);

?>
<h1>Editar Jogo</h1>
<form action="confirmaEditaJogo.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="jogoId" value="<?php echo $id?>">
    <select name="equipaJogoCasa">
        <option value="-1">Escolha o equipa...</option>
        <?php
        $sql="select * from equipas order by equipaNome";
        $resultEquipas=mysqli_query($con,$sql);
        while ($dadosEquipas=mysqli_fetch_array($resultEquipas)){
            ?>
            <option value="<?php echo $dadosEquipas['equipaId']?>"
                <?php
                if($dadosJogos['jogoEquipaCasaId']==$dadosEquipas['equipaId'])
                    echo " selected ";
                ?>
            >
                <?php echo $dadosEquipas['equipaNome']?>
            </option>
            <?php
        }



        ?>
    </select>
    <br>
    <select name="equipaJogoFora">
        <option value="-1">Escolha o equipa...</option>
        <?php
        $sql="select * from equipas order by equipaNome";
        $resultEquipas=mysqli_query($con,$sql);
        while ($dadosEquipas=mysqli_fetch_array($resultEquipas)){
            ?>
            <option value="<?php echo $dadosEquipas['equipaId']?>"
                <?php
                if($dadosJogos['jogoEquipaForaId']==$dadosEquipas['equipaId'])
                    echo " selected ";
                ?>
            >
                <?php echo $dadosEquipas['equipaNome']?>
            </option>
            <?php
        }



        ?>
    </select>
    <br>
    <label>Data:</label>
    <input type="date" name="dataJogo" value="<?php echo $dadosJogos['jogoData'] ?>"><br>

    <input type="Submit" value="Edita"><br>