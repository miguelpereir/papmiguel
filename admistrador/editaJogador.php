<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);

$sql="select * from jogadores where jogadorId=$id";
$result=mysqli_query($con,$sql);
$resultJogadores=mysqli_query($con,$sql);
$dadosJogadores=mysqli_fetch_array($resultJogadores);

?>
<h1>Editar Jogador</h1>
<form action="confirmaEditaJogador.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="jogadorId" value="<?php echo $id?>">
    <label>Nome: </label>
    <input type="text" name="nomeJogador" value="<?php echo $dadosJogadores['jogadorNome']?>"><br>
    <label>Data de nascimento:</label>
    <input type="date" name="dataJogador" value="<?php echo $dadosJogadores['jogadorDataNascimento']?>"><br>
    <label>Foto:</label><br>
    <img src="../<?php echo $dadosJogadores['jogadorFotoURL']?>">
    <input type="file" name="fotoJogador"><br>
    <select name="jogadorPais">
        <option value="-1">Escolha o pais...</option>
        <?php
        $sql="select * from paises order by paisNome";
        $resultPaises=mysqli_query($con,$sql);
        while ($dadosPaises=mysqli_fetch_array($resultPaises)){
            ?>
            <option value="<?php echo $dadosPaises['paisId']?>"
                <?php
                if($dadosJogadores['jogadorPaisId']==$dadosPaises['paisId'])
                    echo " selected ";
                ?>
            >
                <?php echo $dadosPaises['paisNome']?>
            </option>
            <?php
        }


        ?>
    </select>



    <input type="Submit" value="Edita"><br>