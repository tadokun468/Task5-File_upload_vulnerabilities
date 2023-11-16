<?php
if (isset($_POST['submit'])) {
    $dir_upload = "uploads/";
    $file_name = $_FILES['file']['name'];
    $file_path = $dir_upload . "$file_name";
    if (file_exists($file_path)) {
        echo "File đã được tải lên<a href=" . $file_path . ">tại đây</a>";
    } else {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) {
            echo "$file_name đã được tải lên thành công xem <a href=" . $file_path . ">tại đây</a>";
        } else {
            echo "File chưa được tải lên";
        }
    }
}
