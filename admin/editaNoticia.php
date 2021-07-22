<?php
include_once("../includes/body.inc.php");
top_admin(NEWS);

$id = intval($_GET['id']);
$sql = "select * from noticias where noticiaId=$id";
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);
?>
<style>
    .image-upload > input {
        display: none;
    }

</style>
<script>
    function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    //--------------------------------------------------
    function preview_image_2(event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('output_image_2');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>


<link href="../css/admin.css" rel="stylesheet">
<link href="summernote.css" rel="stylesheet">
<script src='../js/tinymce/tinymce.min.js'></script>
<script>
    tinymce.init({
        selector: 'textarea#myTextarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: "30s",
        autosave_prefix: "{path}{query}-{id}-",
        autosave_restore_when_empty: false,
        autosave_retention: "2m",
        image_advtab: true,
        /*content_css: '//www.tiny.cloud/css/codepen.min.css',*/
        link_list: [
            {title: 'My page 1', value: 'https://www.codexworld.com'},
            {title: 'My page 2', value: 'https://www.xwebtools.com'}
        ],
        image_list: [
            {title: 'My page 1', value: 'https://www.codexworld.com'},
            {title: 'My page 2', value: 'https://www.xwebtools.com'}
        ],
        image_class_list: [
            {title: 'None', value: ''},
            {title: 'Some class', value: 'class-name'}
        ],
        importcss_append: true,
        file_picker_callback: function (callback, value, meta) {
            /* Provide file and text for the link dialog */
            if (meta.filetype === 'file') {
                callback('https://www.google.com/logos/google.jpg', {text: 'My text'});
            }
            /* Provide image and alt text for the image dialog */
            if (meta.filetype === 'image') {
                callback('https://www.google.com/logos/google.jpg', {alt: 'My alt text'});
            }
            /* Provide alternative source and posted for the media dialog */
            if (meta.filetype === 'media') {
                callback('movie.mp4', {source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg'});
            }
        },
        templates: [
            {
                title: 'New Table',
                description: 'creates a new table',
                content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
            },
            {title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...'},
            {
                title: 'New list with dates',
                description: 'New List with dates',
                content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
            }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: "mceNonEditable",
        toolbar_mode: 'sliding',
        contextmenu: "link image imagetools table",
    });
</script>
<section id="contant" class="contant main-heading team">
    <div class="container" align="center">


        <div>
            <h1 align="center">Editar Noticia </h1>
        </div>
        <div class="row" align="left">
            <form action="confirmaEditaNoticia.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="noticiaId" value="<?php echo $id ?>">
                <div class="col-md-11">
                    <a href="noticias.php">
                        <button type="button" class="btn btn-black">Back</button>
                    </a>
                </div>
                <div class="col-md-01">
                    <input type="Submit" class="btn btn-primary" value="Edita">
                </div>

                <br>

                <div class="col-md-1"></div>
                <div class="col-md-5">

                    <label>Titulo: </label>
                    <input type="text" name="tituloNoticia" value="<?php echo $dados['noticiaTitulo'] ?>"><br>
                    <label>Resumo:</label>
                    <input type="text" name="resumoNoticia" value="<?php echo $dados['noticiaResumo'] ?>"><br>
                    <label>Data:</label>
                    <input type="date" name="dataNoticia" value="<?php echo $dados['noticiaData']?>"><br>

                </div>
                <div class="col-md-5">

                    <div class="image-upload">
                        <label>Imagem: </label>
                        <label for="file-input"><br>
                            <img href="#" src="../<?php echo $dados['noticiaImagemURL'] ?>" id="output_image"
                                 style="width: 150%;"/>
                        </label>
                        <input id="file-input" class="custom-file-upload" type="file" accept="image/*"
                               name="imagemNoticia" onchange="preview_image(event)" style="color: darkgray"><br>
                    </div>


                    <div class="image-upload">
                        <label>Foto Capa:</label>
                        <label for="file-input_2"><br>
                            <img href="#" src="../<?php echo $dados['noticiaCapaURL'] ?>" id="output_image_2"
                                 style="width: 150%;"/>
                        </label>
                        <input id="file-input_2" class="custom-file-upload" type="file" accept="image/*"
                               name="capaNoticia" onchange="preview_image_2(event)" style="color: darkgray">
                    </div>

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-12">
                    <label>Descrição: </label>
                    <textarea class="col-2" name="descricaoNoticia" id="myTextarea" cols="50"
                              rows="5"> <?php echo $dados['noticiaDescricao'] ?></textarea><br>
                </div
            </form>
        </div>
    </div>
</section>

<?php
bottom_admin();
?>
