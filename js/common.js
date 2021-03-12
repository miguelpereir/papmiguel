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
}function fillTablePosicao(txt='') {
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

