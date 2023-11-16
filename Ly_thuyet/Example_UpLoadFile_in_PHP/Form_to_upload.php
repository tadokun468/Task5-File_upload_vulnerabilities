<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<h1>Upload File In PHP</h1>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ; ?>"
          enctype="multipart/form-data"
          method="POST"     
    >Mời bạn chọn file
        <input type="file" name="file"> <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php include 'upload.php' ; ?>
</body>
</html>