function fillTableNoticias(txt = '') {
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
};
function confirmaEliminaNoticia(idNoticia) {

    $.ajax({
        url: "AJAX/AJAXGetNameNoticia.php",
        type: "post",
        data: {
            idNoticia: idNoticia
        },
        success: function (result) {

            if (confirm('Confirma que deseja eliminar a noticia:' + result + '?'))
                window.location = "eliminaNoticia.php?id=" + idNoticia;
        }
    })
};
function fillTableEquipas(txt = '') {
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
};
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
function fillTableTreinadores(txt = '') {
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
};
function confirmaEliminaTreinador(idTreinador) {
    var nomeTreinador;
    $.ajax({
        url:"AJAX/AJAXGetNameTreinador.php",
        type:"post",
        data:{
            idTreinador:idTreinador
        },
        success:function (result){
            nomeTreinador=result;
            if(confirm('Confirma que deseja eliminar o Treinador:'+nomeTreinador+'?'))
                window.location="eliminaTreinador.php?id=" + idTreinador;
        }
    })
};
function fillTableJogadores(txt = '') {
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
                window.location="eliminaJogador.php?id=" + idJogador;
        }
    })
};
function fillTablePaises(txt = '') {
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
            if(confirm('Confirma que deseja eliminar o Pais:'+nomePais+'?'))
                window.location="eliminaPais.php?id=" + idPais;
        }
    })
};