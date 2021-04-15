<?php
include_once("../includes/body.inc.php");
top_admin();
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
        Pesquisar:<br><input type="text" id="search">
        <div id="tableContent">

        </div>
    </div>
<?php
bot_admin(EQUIPAS);
?>