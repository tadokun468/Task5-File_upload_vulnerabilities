<form method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="file">
    <input type="submit">
</form>

<?php
    // var_dump($_FILES);
    if(isset($_FILES["file"])) {
        $file = "upload/" . $_FILES["file"]["name"];
        move_uploaded_file($_FILES["file"]["tmp_name"], $file);
        echo 'Successfully uploaded file at: <a href="' . $file . '">' . $file . ' </a>';
    }
?>
