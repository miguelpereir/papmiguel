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