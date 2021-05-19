<?php
include_once("../includes/body.inc.php");
top_admin();
//$txt = addslashes($_POST['txt']);
//$sql = "Select * from equipas ";

//$result = mysqli_query($con, $sql);

?>


    <div class="container" align="center">
        <h1>Lista das Noticias</h1>
        Pesquisar:<br><input  type="text" id="search">
        <div id="tableContent">

        </div>
    </div>
<?php
bot_admin(NOTICIAS);
?>