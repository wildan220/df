<?php 
$target_path ="uploads/";

$target_path = $target_path . basename(
    $_FILES['uploadedfile']['name']
);

if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)) {
    echo "the file" . basename($_FILES['uploadedfile']['name'])."has been uploaded";
}
else {
    echo "there was an error uploading the file, please try again!";
}
?>