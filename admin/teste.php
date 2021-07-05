<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery Preview an Image Before it is Uploaded</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];

            if(file){
                var reader = new FileReader();

                reader.onload = function(){
                    $("#previewImg").attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        }
    </script>
</head>
<body>
<form action="confirmation.php" method="post">
    <p>
        <input type="file" name="photo" onchange="previewFile(this);" required>
    </p>
    <img id="previewImg" src="/examples/images/transparent.png" alt="Placeholder">
    <p>
        <input type="submit" value="Submit">
    </p>
</form>
</body>
</html>
