<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/";
    $title = $_POST['title'];
    $target_file = $target_dir . $title . "_" . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        header("location:1.php");
    } else {
        echo "Ocurrió un error al subir el archivo.";
    }
}
?>
