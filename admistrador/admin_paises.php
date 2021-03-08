<?php
include_once("../includes/body.inc.php");
top_admin();
?>
    <script>
        function confirmaElimina(id) {
            $.ajax({
                url:"AJAX/AJAXGetNamePais.php",
                type:"post",
                data:{
                    idPais:id
                },
                success:function (result){
                    if(confirm('Confirma que deseja eliminar o pais:'+result+"?"))
                        window.location="eliminaPais.php?id=" + id;
                }
            })
        };

        $('document').ready(function (){
            $('#search').keyup(function (){
                fillTablePaises(this.value);
            });
            fillTablePaises();
        })
    </script>
</div>
<div class="container" align="center">
    <h1>Lista dos paises</h1>
    <tr>
        <td><a href="admin_equipas.php"><button type="button" class="btn btn-success">Equipas</button></a>
            <a href="admin_noticias.php"><button type="button" class="btn btn-success">Noticias</button></a>
            <a href="admin_paises.php"><button type="button" class="btn btn-success">Paises</button></a>
    </tr>
    <br>
    Pesquisar:<br><input type="text" id="search">
    <div id="tableContent"></div>

    </div>
<?php

bot_admin();
?>