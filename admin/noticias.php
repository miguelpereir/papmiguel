<?php
include_once("../includes/body.inc.php");
top_admin(NEWS);
?>
    <section id="contant" class="contant main-heading team">
        <div class="container" align="center">
            <h1>Lista das Noticias</h1>
            Pesquisar:<br><input type="text" id="search">
            <div id="tableContent">

            </div>
        </div>
    </section>
<?php
bottom_admin(NOTICIAS);
?>