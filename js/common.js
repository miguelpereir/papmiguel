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

