function fillTableNoticia(txt = '') {
    $.ajax({
        url: "AJAX/AJAXFillNoticias.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });
};