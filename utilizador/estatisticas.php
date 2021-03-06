<?php
include_once("../includes/body.inc.php");
top_utilizador();
?>

<!-- /Footer Section -->

<div class="container" id="perfil">

    <div id="titulo" width="100%" align="center">
        <td colspan="12" align="center"><h1>Estatisticas</h1></td>
    </div>
    <div id="globais" align="left">
        <div class="box1">
            <h2 class="header"
                style="color:black;border-bottom:1px solid gray;margin-bottom:10px;">
                Globais</h2>
        </div>
        <table class="zztable">
            <tbody>
            <tr>
                <td class="triple" style="text-align:left;">Jogos:&nbsp;&nbsp;</td>
                <td style="text-align:right;padding-right:60px ">189</td>
                <td class="triple" style="text-align:left;">Golos:&nbsp;&nbsp;</td>
                <td style="text-align:right;padding-right:60px ">444</td>
                <td class="triple" style="text-align:left;">Media:&nbsp;&nbsp;</td>
                <td style="text-align:right;padding-right:60px ">2,35</td>
            </tr>
            <tr>
                <td class="triple" style="text-align:left;">Empates:&nbsp;&nbsp;</td>
                <td style="text-align:right;padding-right:60px">50</td>
                <td class="triple" style="text-align:left;">J. da semana:&nbsp;&nbsp;</td>
                <td style="text-align:right;padding-right:60px ">CR7</td>
                <td class="triple" style="text-align:left;">Resultado Tipíco:&nbsp;&nbsp;</td>
                <td style="text-align:right;padding-right:60px ">2-0</td>
            </tr>
            </tbody>
        </table>

    </div>
    <div id="equipas" align="left">
        <div class="box1">
            <h2 class="header"
                style="color:black;border-bottom:1px solid gray;margin-bottom:10px;">
                Equipas</h2>
        </div>
        <table class="zztable">
            <tbody>
            <tr style="height:30px; ">
                <td style="border-right:1px solid gray;border-bottom: 1px solid gray ">Melhor Ataque</td>
                <td style="padding-left:4px;border-bottom: 1px solid gray;">FC Porto</td>
                <td style="padding-left:4px;border-bottom: 1px solid gray;"></td>
                <td style="padding-left:4px;border-bottom: 1px solid gray;">45 Golos</td>
                <td style="text-align:right;border-bottom: 1px solid gray;">
            </tr>
            <tr style="height:30px; ">
                <td style="border-right:1px solid gray;border-bottom: 1px solid gray ">Pior Ataque</td>
                <td style="padding-left:4px;border-bottom: 1px solid gray;">Belenenses SAD</td>
                <td style="padding-left:4px;border-bottom: 1px solid gray;"></td>
                <td style="padding-left:4px;border-bottom: 1px solid gray;">13 Golos</td>
                <td style="text-align:right;border-bottom: 1px solid gray;">
            </tr>
            <tr style="height:30px; ">
                <td style="border-right:1px solid gray;border-bottom: 1px solid gray ">Melhor Defesa</td>
                <td style=" padding-left:4px;border-bottom: 1px solid gray;">Sporting</td>
                <td style="padding-left:4px;border-bottom: 1px solid gray;"></td>
                <td style="padding-left:4px;border-bottom: 1px solid gray;">10 Golos Sofridos</td>
                <td style="text-align:right;border-bottom: 1px solid gray;">
            </tr>
            </tbody>
        </table>

    </div>
    <div id="jogadores" align="left">
        <div class="box1">
            <h2 class="header"
                style="color:black;border-bottom:1px solid gray;margin-bottom:10px;">
                Jodadores</h2>
        </div>
        <table class="zztable">
            <tbody>
            <tr style="height:30px; ">
                <td style="border-right:1px solid gray;border-bottom: 1px solid gray; ">Melhor Marcador</td>
                <td style="padding-left:4px;border-bottom: 1px solid gray;">
                    <img
                            src="../images/espanha.png" width="18" height="13"
                            alt="Portugal" title="Portugal" style="vertical-align:middle;margin-top:0px;">
                   Pedro Gonçalves
                </td>
                <td style="padding-left:4px;border-bottom: 1px solid gray;"></td>
                <td style="padding-left:4px;border-bottom: 1px solid gray;">14 Golos</td>
                <td style="text-align:right;border-bottom: 1px solid gray;">
            </tr>
            <tr style="height:30px; ">
                <td style="border-right:1px solid gray;border-bottom: 1px solid gray; ">Melhor Marcador</td>
                <td style="padding-left:4px;border-bottom: 1px solid gray;">
                    <img
                            src="../images/espanha.png" width="18" height="13"
                            alt="Portugal" title="Portugal" style="vertical-align:middle;margin-top:0px;">
                    Pedro Gonçalves
                </td>
                <td style="padding-left:4px;border-bottom: 1px solid gray;"></td>
                <td style="padding-left:4px;border-bottom: 1px solid gray;">45 Golos</td>
                <td style="text-align:right;border-bottom: 1px solid gray;">
            </tr>
            </tbody>
        </table>

    </div>


</div>
<?php
bot_utilizador();
?>