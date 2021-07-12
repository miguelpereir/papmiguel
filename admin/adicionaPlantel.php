<?php
include_once("../includes/body.inc.php");
top_admin(SQUAD);
$id=-1;
if(isset($_GET['id']))
    $id=intval($_GET['id']);
?>
<link href="../css/admin.css" rel="stylesheet">
<section id="contant" class="contant main-heading team">
    <div class="container" align="center">


        <div>
            <h1 align="center">Plantel </h1>
        </div>

        <div class="row" align="left">
            <form action="confirmaNovoPlantel.php" method="post" enctype="multipart/form-data">
                <div class="col-md-10">
                    <a href="plantel.php?id=<?php echo $id ?>">
                        <button type="button" class="btn btn-black">Back</button>
                    </a>
                </div>
                <div class="col-md-02">
                    <input type="Submit" class="btn btn-success" value="Adiciona"><br>
                </div>

                <br>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <label> Jogador:</label>
                    <select name="equipaJogadorJogador">
                        <option value="-1">Escolha a Jogador...</option>
                        <?php
                        $sql="select * from jogadores order by jogadorNome";
                        $result=mysqli_query($con,$sql);
                        while ($dados=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dados['jogadorId']?>"><?php echo $dados['jogadorNome']?></option>
                            <?php
                        }

                        ?>
                    </select>
                    <br>
                </div>
                <div class="col-md-5">
                    <label>Posição:</label>
                    <select name="equipaJogadorPosicao">
                        <option value="-1">Escolha a Posicao...</option>
                        <?php
                        $sql="select * from posicoes order by posicaoNome";
                        $result=mysqli_query($con,$sql);
                        while ($dados=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dados['posicaoId']?>"><?php echo $dados['posicaoNome']?></option>
                            <?php
                        }

                        ?>
                    </select>
                </div>

                <div class="col-md-1"></div>
                <label>Numero: </label>
                <input type="text" name="numeroJogador"><br>
            </form>
        </div>
    </div>
</section>
<?php
bottom_admin(PLANTEL);
?>
