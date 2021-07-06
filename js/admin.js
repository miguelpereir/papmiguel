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
            if(confirm('Confirma que deseja eliminar a Treinador:'+nomeTreinador+'?'))
                window.location="eliminaTreinador.php?id=" + idTreinador;
        }
    })
};