function fillTablePaises(txt='') {
    $.ajax({
        url: "AJAX/AJAXFillPais.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });
}
function fillTableJogadores(txt='') {
    $.ajax({
        url: "AJAX/AJAXFillJogador.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });
}
function fillTableEquipas(txt='') {
    $.ajax({
        url: "AJAX/AJAXFillEquipa.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });
}
function fillTableNoticias(txt='') {
    $.ajax({
        url: "AJAX/AJAXFillNoticia.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });
}
function fillTableTreinadores(txt='') {
    $.ajax({
        url: "AJAX/AJAXFillTreinador.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });
}
function fillTablePosicao(txt='') {
    $.ajax({
        url: "AJAX/AJAXFillPosicao.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });
}
function fillTablePlantel(txt='') {
    $.ajax({
        url: "AJAX/AJAXFillPlantel.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });
}

function confirmaEliminaEquipa(idEquipa) {
    var nomeEquipa;
    $.ajax({
        url:"AJAX/AJAXGetNameEquipa.php",
        type:"post",
        data:{
            idEquipa:idEquipa
        },
        success:function (result){
            nomeEquipa=result;
            if(confirm('Confirma que deseja eliminar a equipa:'+nomeEquipa+'?'))
                window.location="eliminaEquipa.php?id=" + idEquipa;
        }
    })
};
function confirmaEliminaNoticia(idNoticia) {
    var nomeNoticia;
    $.ajax({
        url:"AJAX/AJAXGetNameNoticia.php",
        type:"post",
        data:{
            idEquipa:idNoticia
        },
        success:function (result){
            nomeNoticia=result;
            if(confirm('Confirma que deseja eliminar a noticia:'+nomeNoticia+'?'))
                window.location="eliminaNoticia.php?id=" + idNoticia;
        }
    })
};
function confirmaEliminaJogador(idJogador) {
    var nomeJogador;
    $.ajax({
        url:"AJAX/AJAXGetNameJogador.php",
        type:"post",
        data:{
            idJogador:idJogador
        },
        success:function (result){
            nomeJogador=result;
            if(confirm('Confirma que deseja eliminar o Jogador:'+nomeJogador+'?'))
                window.location="eliminaJogador.php?id="+idJogador;
        }
    })
};

function confirmaEliminaPais(idPais) {
    var nomePais;
    $.ajax({
        url:"AJAX/AJAXGetNamePais.php",
        type:"post",
        data:{
            idPais:idPais
        },
        success:function (result){
            nomePais=result;
            if(confirm('Confirma que deseja eliminar o pais:'+nomePais+'?'))
                window.location="eliminaPais.php?id=" + idPais;
        }
    })
};
function confirmaEliminaJogo(idJogo) {
    var jogo;
    $.ajax({
        url:"AJAX/AJAXGetNameJogo.php",
        type:"post",
        data:{
            idJogo:idJogo
        },
        success:function (result){
            jogo=result;
            if(confirm('Confirma que deseja eliminar o Jogo:'+jogo+'?'))
                window.location="eliminaJogo.php?id=" + idJogo;
        }
    })
};
function confirmaEliminaPosicao(idPosicao) {
    var jogo;
    $.ajax({
        url:"AJAX/AJAXGetNameJogo.php",
        type:"post",
        data:{
            idJogo:idJogo
        },
        success:function (result){
            jogo=result;
            if(confirm('Confirma que deseja eliminar o Jogo:'+jogo+'?'))
                window.location="eliminaJogo.php?id=" + idJogo;
        }
    })
};




