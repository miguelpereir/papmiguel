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
            if(confirm('Confirma que deseja eliminar a equipa:'+nomeJogador+'?'))
                window.location="eliminaJogador.php?id=" + idJogador;
        }
    })
};



